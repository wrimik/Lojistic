/**
 * Created by Mike on 6/3/15.
 * see readme for details
 */
//Countdown Component
var Timer = {
    template: '#timer',
    props:['firstStartTime', 'zeroMsg', 'time', 'msg'],
    data: function(){
        return {
            intervalTime: 1000,
            zeroMsg: '',
            intervalCallback: "function(){}",
            intervalID: 0
        };
    },
    created: function(){
        //bind listeners
        this.$on('timerMsg', function(msg){
            this.timerMsg = msg;
        });
        this.$on('startChildTimer', function(time){
            this.start(time);
        });
        this.$on('setTimerMsg', function(msg){
            this.msg = msg
        });
    },
    compiled: function(){
        this.time = this.firstStartTime;
        this.msg = this.time;
    },
    methods: {
        start: function(time){
            if(!time){
                this.setTime(this.firstStartTime);
            }
            this.setTime(time);
            this.intervalID = setInterval(this.decriment, 1000);
        },
        stop: function(){
            window.clearInterval(this.intervalID);
            this.$dispatch('timerComplete');
        },
        decriment: function(){
            this.msg = this.time;
            if(this.time < 1) {
                this.msg = this.zeroMsg;
                this.stop();
            }
            this.time--;
        },
        setTime: function(time){
            this.time = Math.floor(time);
        }
    }
};

Vue.filter('number', function (value) {
    if (typeof(value) == 'undefined') {
        return '';
    }
    return value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
});
Vue.filter('classname', function (value) {
    return value.replace(/\s+/g, '-').toLowerCase();
});

// Report is responsible for holding the results and displaying them
var Report = new Vue({
    el: '#audisee',
    components: { timer: Timer},
    data: {
        carrier: "",
        title: 'Loading Audit Results',
        total_records: '0',
        total_shipments: 0,
        annual_spend: 0,
        selected_point: 'late-deliveries',
        shipment_range: {
            start: "",
            end: "" //  06/18/2015
        },
        points: {},
        findings: {},
        invoice_details: {},
        uploadProgress: 0,
        progressTitle: 'Uploading.',
        timerCallback: []
    },
    computed: {
        recovery_percent: function(){
            return (this.total_recovery / this.total_dollars_audited).toFixed(2) * 100;
        },
        total_dollars_audited: function(){
            var total = 0;
            $(this.invoice_details).each(function(){
                total = total + parseFloat(this.invoice_total);
            });
            return total;
        },
        isUPS: function () {
            return (this.carrier_name == 'UPS');
        },
        isFedEx: function () {
            return (this.carrier_name == 'FedEx');
        },
        carrier_name: function(){
            var name = {'ups' : 'UPS' , 'fedex' : 'FedEx', '' : ''};
            return name[this.carrier];
        },
        total_findings: function () {
            return this.findings.length;
        },
        total_recovery: function(){
            var total = 0;
            $(this.findings).each(function () {
                total = total + parseFloat(this.charge_amount);
            });
            return total;
        },
        tracking_url: function () {
            if (this.carrier == 'ups') {
                url = 'http://wwwapps.ups.com/WebTracking/track?track=yes&trackNums=';
            } else {
                url = 'http://www.fedex.com/Tracking?action=track&tracknumbers=';
            }
            return url
        },
        selected_findings: function(){
            var selected = [];
            var parent = this;
            $(this.findings).each(function(){
               if(this.audit_point == parent.selected_point){
                   selected.push(this);
               }
            });
            return selected;
        },
        pointsWithFindings: function(){
            var relevant = {};
            for(var finding in this.findings){
                var point = this.findings[finding].audit_point;
                if(this.count(this.findings[finding].audit_point) > 0){
                    relevant[point] = this.findings[finding];
                }
            }
            return relevant;
        }
    },
    created: function(){
      this.$on('timerComplete', function(){
          if(this.timerCallback !== []){
              this.timerCallback();
          }
      });
    },
    methods: {
        timerMsg: function(msg){
            this.$broadcast('updateChildTimerMsg', msg);
        },
        startTimer: function(time){
            if(!time){
                time = 25;
            }
            this.$broadcast('startChildTimer', time);
        },
        pointTotal: function (point) {
            var t = 0;
            $(this.findings).each(function () {
                if (this.audit_point == point) {
                    t = parseFloat(t) + parseFloat(this.charge_amount);
                }
            });
            return t;
        },
        count: function (point) {
            var t = 0;
            $(this.findings).each(function () {
                if (this.audit_point == point) {
                    t++;
                }
            });
            return t;
        }
    }
});

// We assign the points here becuse it would be destracting up there^
Report.points = {
    'late-deliveries': {
        name: 'Late Deliveries',
        description: 'Shipments have a guaranteed delivery date based on the service level, distance traveled, and pickup date. To make this report as accurate  as possible, we\'ve scrubbed unrecoverable items such as shipments delayed due to weather.',
        total: 0
    }, 'never-delivered': {
        name: 'Never Delivered',
        description: 'These shipments never arrived at their destination.',
        total: 0
    }, 'manifested-not-shipped': {
        name: 'Manifested, Not Shipped',
        description: 'A label was printed but no package was ever actually picked up.',
        total: 0
    }, 'saturday-pickups': {
        name: 'Invalid Saturday Pickups',
        description: 'An additional charge was placed for a Saturday Pickup when the actual pickup date was not on a Saturday.',
        total: 0
    }, 'saturday-deliveries': {
        name: 'Invalid Saturday Deliveries',
        description: 'An additional charge was placed for a Saturday Delivery when the actual delivery date was not on a Saturday.',
        total: 0
    }, 'residential-surcharge': {
        name: 'Invalid Residential Fee',
        description: 'An additional charge was placed for a Residential Delivery and, at a glance, we suspect these shipments were sent to commercial buildings.',
        total: 0
    }
};


// Audit is (mostly) responsible for communicating with the server and
// passing results to the other objects
AuditController = {
    AuditID: '',
    Error: '',
    BaseUrl: '/audisee/instant-parcel-audit/',
    AnimationRuntime: 15000, // in ms
    FetchResultsDelay: 0,
    UpsFetchResultsDelay: 30000,
    FedExFetchResultsDelay: 15000,
    RuntimeBufferTime: 3000,
    animatedUpsStatus: false,
    uncompellingMessageMaxSavings: 20, //shows a message if the total savings is under this value
    upsProgressDelayInSeconds: 10,
    nocache: function (){
        return '?nocache=' + Math.floor(Date.now() / 1000);
    },
    showUploadProgress: function(){
        $('.step:visible > h2, .step:visible > div:nth-child(2)').show();
        //reset incase of bad entry
        Report.progressTitle = 'Uploading.';
        $('#unknown-file').hide();
        Report.uploadProgress = 0;
        $('.radial-progress').show();
        $('.upload-messages').show();
        //end reset
        Interview.showStep(2);
    },
    uploadCSV: function () {
        AuditController.showUploadProgress();
        $('#uploading-overlay').addClass('active');
        slack('Audisee: ' + abGet('audisee-landing'));
        setTimeout(function () { //ux delay
            var data = new FormData($('#audisee-upload-form')[0]);
            if (!data) {
                return;
            }
            $.ajax({
                url: AuditController.BaseUrl + 'create', // point to server-side PHP script
                dataType: 'json',
                cache: false,
                processData: false, // lets data be a FormData object
                contentType: false, // lets data be a FormData object
                data: data,
                type: 'post',
                xhr: AuditController.xhrProgress,
                fail: function () {

                },
                success: function (result) {
                    AuditController.csvUploadCallback(result);
                }
            });
        }, 1500);
    },
    xhrProgress: function () {
        //Upload progress
        var xhr = new window.XMLHttpRequest();
        xhr.upload.addEventListener("progress", function (evt) {
            if (evt.lengthComputable) {
                var percent = evt.loaded / evt.total;
                Report.uploadProgress = percent;
            }
        }, false);
        return xhr;
    },
    csvUploadCallback: function (result) {
        if (result.error != false) {
            trackGaEvent('Audisee|4-Bad File');
            AuditController.Error = result.error;
            AuditController.showError();
        } else {
            Report.progressTitle = 'Upload Complete, Prepping File.';
            $('.progress-circ i').removeClass('fa-circle-o-notch').addClass('fa-gear');
            $('.progress-circ span').text('');
            trackGaEvent('Audisee|4-Good File');
            AuditController.AuditID = result.id;
            Report.total_records = result.records;
            Report.carrier = result.carrier;
            Report.title = 'Auditing ' + Report.$options.filters.number(Report.total_records) + ' Records';
            AuditController.run();
        }
    },
    run: function () {
        trackGaEvent('Audisee|5-Audit.run Initiated');
        $.ajax({
            url: AuditController.BaseUrl + AuditController.AuditID + '/run' + AuditController.nocache()
        }).fail(function () {
            trackGaEvent('Audisee|5-Audit.run 500 error');
            AuditController.retryRun();
        }).done(function (data) {
            trackGaEvent('Audisee|5-Audit.run Success');
            data = JSON.parse(data);
            if (data.status == 'complete') {
                if (Report.isFedEx) {
                    AuditController.fetchAuditResults(false);
                } else if(Report.isUPS) {
                    Report.progressTitle = 'UPS File Processing.<br/> We Will Check On Progress In:';
                    Report.timerCallback = AuditController.fetchUpsProgress; // setTimeout this on timer completion
                    Report.startTimer(AuditController.upsProgressDelayInSeconds);
                }
                Busy.hide();
            } else if (data.status == 'not-complete') {
                AuditController.retryRun();
            }
        });
        //if (Report.isUPS) {
        //    AuditController.showUpsProgress();
        //}
        _gaq.push(['_trackEvent', 'Interaction', 'DemoAudit', 'Audit Ran']);
    },
    retryRun: function () {
        Busy.show();
        setTimeout(function () {
            AuditController.run();
        }, 15000);//recursive
    },
    showError: function () {
        $('.radial-progress').hide();
        $('.upload-messages #unknown-file').show();
        $('.step:visible > h2, .step:visible > div:nth-child(2)').hide();
    },
    load: function (id) {
        if (id == '') {
            Interview.nextStep();
            Interview.nextTitle();
        } else {
            AuditController.Rerun = true;
            AuditController.AuditID = id;
            AuditController.FetchResultsDelay = -1;
            Interview.nextTitle();
            AuditController.fetchAuditResults();
        }
    },
    animateUpload: function () {
        if (this.AuditID.length > 0 && Report.total_findings > 0) {
            Interview.nextStep();
            AuditController.showRevisit();
            AuditController.runAnimation();
        }
    },
    showRevisit: function () {
        var field = $('#revisit-link');
        var url = field.attr('data-base') + this.AuditID;
        field.val(url);
        $('#audit-share').removeClass('pending hidden');
    },
    fetchUpsProgress: function () {
        Report.progressTitle = 'Checking On Progress.';
        var url = AuditController.BaseUrl + AuditController.AuditID + '/status' +  AuditController.nocache();
        $.ajax({
            url: url
        }).fail(function () {
            setTimeout(function(){ AuditController.fetchUpsProgress(); }, 5000);
        }).done(function (data) {
            data = JSON.parse(data);
            if (data.status == 'processing') {
                Report.startTimer(guessRuntime(AuditController.upsProgressDelayInSeconds, data.progress['current-records'], data.progress['total-records']));
                Report.progressTitle = 'Expecting Audit Results In: ';
            } else if (data.status == 'complete') {
                AuditController.fetchAuditResults(false);
                Report.timerCallback = [];
            }
        });
    },
    fetchAuditResults: function () {
        Report.timerMsg('');// removes timer message
        Report.progressTitle = 'Audit Complete, Fetching Results.';
        if (!Report.findings.length) {
            $.get(AuditController.BaseUrl + AuditController.AuditID + '/results' + AuditController.nocache(),
                function (data) {
                    Interview.nextTitle();
                    Report.findings = JSON.parse(data);
                    setTimeout(animateNumbers, 500);
                    Report.uploadProgress = .999;
                    AuditController.animateUpload();
                    AuditController.getStats();
                    if (AuditController.Rerun) {
                        Report.title = 'Loading Audit Results';
                        AuditController.AnimationRuntime = 7000;
                        trackGaEvent('Audisee|Rerun');
                    } else{
                        Report.title = 'Audit In Progress';
                    }
                    Interview.showStep(3);
                    AuditController.showRevisit();
                    AuditController.runAnimation();
                    Vue.nextTick(function(){
                        Report.$data.selected_point = $('#point-select option:first-child').attr('value');
                    });
                });
        }
    },
    runAnimation: function () {
        animateProgressMeter();
        setTimeout(function () {
            AuditController.complete()
        }, AuditController.AnimationRuntime + 1200);
    },
    complete: function () {
        Charts.drawCharges();
        //remove progress meter
        setTimeout(function () {
            //change title
            $('.progress-meter').hide();
            if (AuditController.Rerun) {
                Report.title = 'Audited ' + Report.$options.filters.number(Report.total_shipments) + ' Shipments';
            } else {
                Report.title = 'Finished Auditing ' + Report.$options.filters.number(Report.total_shipments) + ' Shipments';
            }
            $('.convert').show();
        }, 1000);
        //show navigation buttons
        $('.tab-controls .btn').addClass('brightBlue');
        if (Report.findings.length > 0) {
            $('.tab-controls .btn:gt(0)').addClass('animated slideInTop flatGrey');
            $('.tab-controls .btn').removeClass('hidden');
        }
        $('.tab-controls .btn:last-child').removeClass('hidden');//always show stats
        $('.total-recovery, .total').each(function () {
            var t = parseFloat($(this).text().replace(',', '')).forHumans(2);
            $(this).text(t);
        });
        if (Report.total_recovery < AuditController.uncompellingMessageMaxSavings) {
            $('.uncompelling-modal').modal('show');
        }
    },
    refreshStats: function(delay){
        setTimeout(function(){ AuditController.getStats(); }, delay);
    },
    getStats: function () {
        $.ajax({
            url: AuditController.BaseUrl + AuditController.AuditID + '/stats' + AuditController.nocache()
        }).fail(function(){
            AuditController.refreshStats(5000);
        }).done(function (data) {
            Report.carrier          = data.carrier;
            Report.total_records    = data.total_records;
            Report.total_shipments  = data.total_shipments;
            Report.shipment_range   = data.shipment_range;
            Report.invoice_range    = data.invoice_range;
            Report.invoice_details  = data.invoice_details;
            if(data.total_records > 0 && data.invoice_details == false){
                AuditController.refreshStats(5000);
            }
        });
    }
}; // end Audit

function guessRuntime(delay, current, total){
    var runtimeGuess = (delay / current) * (total - current);
    if (runtimeGuess < 5) {
        runtimeGuess = 5;
    } else if (runtimeGuess > 300) { //5 minutes
        runtimeGuess = 300;
    }
    return runtimeGuess;
}

$(document).ready(function () {
    // select csv
    $(document).on('click', '.upload-btn', function () {
        var valid = validateVisible();
        if (!valid) {
            return false;
        }
        $('#invoice-csv').click();
    });
    // drop validation error
    $(document).on('blur', '.required', function () {
        if ($(this).val() != '') {
            $(this).tooltip('hide');
        }
    });
    // bind tool tips
    $(function () {
        $('[data-toggle="tooltip"]').tooltip({
            trigger: 'manual'
        })
    });
    // bind uploadcsv
    $(document).on('change', '#invoice-csv', function () {
        var file = $(this).val();
        if (file == '') {
            $('#upload-btn').show();
            $('#submit-btn').hide();
        } else if (file.substring(file.length - 4) != '.csv' && file.substring(file.length - 4) != '.xml') {
            $(this).val('');
            alert('Please select a .csv or .xml file instead');
        } else if (calcFileSize(this) > 110000000) {
            $('#email-reminder').val($('#upload-csv input[name=hs\\[email\\]]').val());
            $('#filesize-modal').modal('show');
            var btn = $('#request-large-audit');
            var msg = btn.attr('data-message');
            btn.attr('data-message', msg + $('#upload-csv').serialize())
        } else {
            AuditController.uploadCSV();
        }
    });
    Interview.init(false);
    $('.progress-indicator').css({'opacity': 1, 'background-color': '#45bbf6'});
    $('.info').tooltip();
});
$(document).on('click', '.show-revisit', function () {
    AuditController.showRevisit();
});

Charts = {
    data: {},
    addData: function (charge, point) {
        if (typeof(this.data[point]) == 'undefined') {
            this.data[point] = {charges: 0, count: 0, 'label': /*AuditCard.pointsForHumans[point].name*/ ''};
        }
        this.data[point].charges = this.data[point].charges + toFloat(charge);
        this.data[point].count++;
    },
    output: function (field, title) {
        var output = [['Audit Point', title]];
        output.push(this.data);
        return output;
    },
    drawCharges: function () {
        var data = [['Audit Point', 'Total Charges']];
        for(var i in Report.points){
            var name = Report.points[i].name;
            var total = Report.pointTotal(i);
            data.push([ name ,  total ]);
        }
        this.pieChart('charges-chart', 'Potential Recovery Overview', data);
    },
    pieChart: function (targetId, title, data) {
        data = google.visualization.arrayToDataTable(data);
        var options = {
            title: title,
            pieHole: 0.4,
            backgroundColor: 'transparent',
            colors: ['#00C853', '#164260', '#7e888c', '#00ACED', '#e18c4b', '#7c529f']
        };
        var formatter = new google.visualization.NumberFormat({
            decimalSymbol: '.',
            groupingSymbol: ',',
            prefix: '$'
        });
        formatter.format(data, 1);
        var chart = new google.visualization.PieChart(document.getElementById(targetId));
        chart.draw(data, options);
    }
};

// Helper Functions
function animateNumbers(){
    $('*[data-animate-to]').each(function(){
        var decimals = $(this).hasClass('currency');
        var target =  $(this);
        var total  = parseFloat($(this).attr('data-animate-to'));
        $({numberValue: 0}).animate({numberValue: total}, {
            duration:  AuditController.AnimationRuntime,
            easing: 'linear',
            step: function() {
                if(decimals){
                    $(target).text((Math.ceil(this.numberValue*100)/100).toFixed(2));
                }else{
                    $(target).text(Math.ceil(this.numberValue));
                }
            },
            complete: function(){
                target.text(parseFloat(target.attr('data-animate-to')).forHumans((decimals ? 2 : 0)));
            }
        });
    });
}

function calcFileSize(input) {
    var files = $(input)[0].files;
    var totalSize = 0;
    $(files).each(function () {
        totalSize = totalSize + this.size;
    });
    return totalSize;
}

$(document).on('click', '#confirm-email', function () {
    slack('Big Audit Email: ' + $('#email-reminder').val(), false);
    $('#confirm-email').html('&check;');
});
$(document).on('keyup', '#email-reminder', function () {
    $('#confirm-email').html('UPDATE');
});
$(document).on('click', '.close-modal', function () {
    $('.modal .close').trigger('click');
});
$(document).on('click', '#request-large-audit', function () {
    $('#request-large-audit-before').hide();
    $('#request-large-audit-after').show();
});
$(document).on('click', '.no-invoices', function () {
    alert("While you may be able to log in, some sets of credentials are " +
        "limited in what they can view. Consider using administrator or " +
        "accounts-payable login info. If you’re still stuck, call UPS/FedEx " +
        "support and see if they can help you troubleshoot your account.");
});
$(document).on('click', '.convert', function () {
    $('.convert-modal').modal('show');
    _gaq.push(['_trackEvent', 'Interaction', 'DemoAudit', 'Audit Recover Button Pressed']);
});
$(document).on('click', '.convert', function () {
    $('.convert-modal').modal('show');
    _gaq.push(['_trackEvent', 'Interaction', 'DemoAudit', 'Audit Recover Button Pressed']);
});

google.load("visualization", "1", {packages: ["corechart"]});
function toFloat(num) {
    if (num == '' || num == null || typeof(num) == 'undefined' || isNaN(num)) {
        return 0;
    } else {
        return parseFloat(num);
    }
}
$(document).on('click', '.tab-controls .btn', function () { //simple tabs
    var btn = $(this);
    var i = btn.index();
    $('.tabs .tab:not(' + i + ')').hide();
    $('.tabs .tab:eq(' + i + ')').show();
    $('.tab-controls .btn').removeClass('brightBlue').addClass('flatGrey');
    btn.addClass('brightBlue').removeClass('flatGrey');
});
$(document).on('click', '.show-ups-instructions', function () {
    $('.ups-instructions').show();
    $('.fedex-instructions').hide();
});
$(document).on('click', '.show-fedex-instructions', function () {
    $('.fedex-instructions').show();
    $('.ups-instructions').hide();
});
$(document).on('click', '#audit-share .close', function () {
    $('#audit-share').addClass('after');
});
$(document).on('click', '#audit-share.after', function () {
    $('#audit-share').removeClass('after');
});
$(document).on('click', '.draw-charges', function () {
    setTimeout(function () {
        Charts.drawCharges();
    }, 5); //refreshes svg size
});
function increment(target) {
    target.text(parseInt(target.text()) + 1);
}
Number.prototype.forHumans = function (precision) {
    return this.toFixed(precision).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
};
Number.prototype.msAsSeconds = function () {
    return Math.ceil(this / 1000);
};
function getRandomInt(min, max) {
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

function animateProgressMeter() {
    $('.interview-title .progress-indicator').css({
        transition: 'width ' + (AuditController.AnimationRuntime / 1000) + 's'
    });
    setTimeout(function () {
        $('.progress-indicator').css('width', '100%');
    }, 1000);
}


//animate numbers
(function (d) {
    var p = function (b) {
        return b.split("").reverse().join("")
    }, l = {
        numberStep: function (b, a) {
            var e = Math.floor(b);
            d(a.elem).text(e)
        }
    }, h = function (b) {
        var a = b.elem;
        a.nodeType && a.parentNode && (a = a._animateNumberSetter, a || (a = l.numberStep), a(b.now, b))
    };
    d.Tween && d.Tween.propHooks ? d.Tween.propHooks.number = {set: h} : d.fx.step.number = h;
    d.animateNumber = {
        numberStepFactories: {
            append: function (b) {
                return function (a, e) {
                    var k = Math.floor(a);
                    d(e.elem).prop("number", a).text(k + b)
                }
            }, separator: function (b, a) {
                b = b || " ";
                a =
                    a || 3;
                return function (e, k) {
                    var c = Math.floor(e).toString(), s = d(k.elem);
                    if (c.length > a) {
                        for (var f = c, g = a, l = f.split("").reverse(), c = [], m, q, n, r = 0, h = Math.ceil(f.length / g); r < h; r++) {
                            m = "";
                            for (n = 0; n < g; n++) {
                                q = r * g + n;
                                if (q === f.length)break;
                                m += l[q]
                            }
                            c.push(m)
                        }
                        f = c.length - 1;
                        g = p(c[f]);
                        c[f] = p(parseInt(g, 10).toString());
                        c = c.join(b);
                        c = p(c)
                    }
                    s.prop("number", e).text(c)
                }
            }
        }
    };
    d.fn.animateNumber = function () {
        for (var b = arguments[0], a = d.extend({}, l, b), e = d(this), k = [a], c = 1, h = arguments.length; c < h; c++)k.push(arguments[c]);
        if (b.numberStep) {
            var f =
                this.each(function () {
                    this._animateNumberSetter = b.numberStep
                }), g = a.complete;
            a.complete = function () {
                f.each(function () {
                    delete this._animateNumberSetter
                });
                g && g.apply(this, arguments)
            }
        }
        return e.animate.apply(e, k);
    }
})(jQuery);

$(document).on('click', '.inst-btn', function () {
    $('#empty-modal .modal-footer').html('');
    var target = $($(this).data('target'));
    var title  = $(this).data('title');
    var inst   = $('.instructions:visible');
    var backBtn = $('#sm-back-btn-proto').html();
    var closeBtn = $('#sm-close-btn-proto').html();
    if ($(this).data('btn') == false) {
        backBtn = '';
    }
    //inst.addClass('animated flipOutX');
    inst.css('display', 'none');
    $(target).css('display', 'block');
    //$(target).css('display', 'block').addClass('animated flipInX').removeClass('flipOutX');
    $('#empty-modal .modal-title').html(title);
    $('#empty-modal .modal-footer').html(backBtn + closeBtn);
});

// "busy" modal counter
Busy = {
    interval: false,
    show: function () {
        $('#busy').modal('show');
        Busy.updateTimer(15);
        Busy.startTimer();
    },
    hide: function () {
        $('#busy').modal('hide');
        window.clearInterval(Busy.interval);
    },
    startTimer: function () {
        if (!Busy.interval) {
            Busy.interval = setInterval(Busy.decrimentTimer, 1000);
        }
    },
    decrimentTimer: function () {
        var next = Busy.getTime() - 1;
        Busy.updateTimer(next);
    },
    updateTimer: function (time) {
        if (time > 0) {
            $('#busy-timer').text(time);
        }
    },
    getTime: function () {
        return parseInt($('#busy-timer').text());
    }
};

//# sourceMappingURL=audit.js.map
