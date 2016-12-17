/**
 * DIM = dimensional weight charge
 */


DIM = [];

/**
 *
 * TODO: add documentation
 */


$(document).on('click', '#toggle-advanced', function () {
    if ($('.advanced').hasClass('showing')) {
        $('.advanced').removeClass('showing animated fadeOutDown');
        $('#toggle-advanced').text('SHOW ADVANCED OPTIONS');
    } else {
        $('.advanced').addClass("showing animated bounceInDown");
        $('#toggle-advanced').text('HIDE ADVANCED OPTIONS');
    }
});

/**
 *
 * TODO: add documentation
 */
$(document).on('click', '#calculate-dims', function () {
    _gaq.push(['_trackEvent', 'Interaction', 'Calculator', 'DIM Calculator']);
    var df = isan('#dim_divisor');
    if (!df || isNaN(df)) {
        df = 166;
        $('#dim_divisor').val(166);
    }

    var length = ifZeroThenOne('#length');
    var width = ifZeroThenOne('#width');
    var height = ifZeroThenOne('#height');
    var weight = ifZeroThenOne('#weight');
    if(weight > 150) {
        weight = 150;
        $('#weight').val(150);
    }

    $.post('/ajax/dim-calculator',
        {
            A: {
                discounts: {
                    general :  isan('#discount'),
                    tier: 0,
                    "1-5": 0
                },
                carrier: $('#carrier').val(),
                per_month:  isan('#per_month'),
                weight: weight,
                l:      length,
                w:      width,
                h:      height,
                email:  $('#email').val(),
                dim_divisor:    df,
                min:    isan('#min_charge')
            }
        }, function(rates){
            DIM = JSON.parse(rates);
            DIM = dimFloatArrays(DIM);
            if(DIM.dim[2] <= DIM.real[2]){
                showNoResults();
            }
            else if ( getDimW() > 150 ){
                var DimW = getDimW();
                makeSureDimWIsRealistic(DimW);
            }
            else{
                showResults();
            }
        });
});

function dimFloatArrays(dim){
    for(var type in dim){
        for(var zone in dim[type]){
            dim[type][zone] = parseFloat(dim[type][zone]);
        }
    }
    return dim;
}

/**
 *
 * TODO: add documentation
 */
function ifZeroThenOne(id) {
    var param = isan(id);
    if (param == 0) {
        param = 1;
    }
    $(id).val(param);
    return param;
}

/**
 *
 * TODO: add documentation
 */
function isan(id){
    var val = parseFloat($(id).val().replace('$',''));
    $(id).bind('keyup', function(){
        $(this).removeAttr('style');
    });
    if(isNaN(val) && !$(id).hasClass('not_required')){
        val = false;
        $(id).css('border-color', '#900');
        $(id).focus();
    }
    return val;
}

/**
 *
 * TODO: add documentation
 */
$(document).on('change', '#zone-toggle select', function(){
    showResults();
});


/**
 *  @method showNoResults()
 *  TODO: add documentation
 */
function showNoResults(){
    $('#no-results .alert').html('Oops!<br/>The package you described would not suffer from DIM charges. You only get DIM\'d on packages that are big but not heavy.');
    $('#dim-results').hide();
    $('#no-results').show();
}
/**
 * @method makeSureDimWIsRealistic
 * This method will create an alert if the Dim Weight is above 150...
 * would be unrealistic to have a package with a dimensional weight above 150
 */
function makeSureDimWIsRealistic( weight ){
    var alertContent = '';
    alertContent += 'Yikes! <br> It looks like your packages would get billed as if they weighed ';
    alertContent += weight;
    alertContent += ' Lbs! Unfortunately, I only know the rates for packages up to 150 Lbs.'
    alertContent += 'For fancy charts and stuff, please try again with a less extreme example.'
    $('#no-results .alert').html(alertContent);
    $('#dim-results').hide();
    $('#no-results').show();
}


/**
 *  @method showResults()
 *  TODO: add documentation
 */
function showResults(){
    $('#no-results').hide();
    $('#dim-results').show();
    generateGraphs();
    fillSummary();
    $(window).trigger('resize');
    $('html, body').animate({
        scrollTop: $('#zone-toggle').position().top-80
    }, 700);
}

/**
 * @method generateGraphs()
 * wraps any graphs or charts that are being generated
 */
function generateGraphs(){
    pricePerPackageChart();
    monthlyProjectedCostsGraph();
}


/**
 * @method getDimW()
 * this method calculates the Dimensional Weight.
 * Minimum charge for the weight of the box based on the dimensions
 */
function getDimW(){
    var l =  parseInt($('#length').val());
    var w =  parseInt($('#width').val());
    var h =  parseInt($('#height').val());
    var f =  parseInt($('#dim_divisor').val());
    return Math.ceil(l*w*h/f);
}

/**
 *  fillSummary()
 *  Generates a summary of data that goes with the graphs
 *
 */
function fillSummary(){
    var r = DIM.real;
    var d = DIM.dim;
    var z = $('#zone-toggle select').val();
    var w = Math.ceil($('#weight').val());
    var v = parseInt($('#per_month').val());
    var dimw = getDimW();
    var inc = d[z]-r[z];

    $('.res-actual-w').text(pounds(w));
    $('.res-actual-p').text((r[z]).formatMoney());
    $('.res-dim-w').text(pounds(dimw)); // this is the Dimensional weight
    $('.res-dim-p').text((d[z]).formatMoney());
    $('.res-inc-pp').text(inc.formatMoney());
    $('.res-inc-pm').text((inc*v).formatMoney());
    $('.res-inc-py').text((inc*v*12).formatMoney());
}

/**
 * @method pounds()
 * returns a number with weight measurement
 * @params num
 */
function pounds(num){
    return num+' Lbs.';
}

/**
 *  @method pricePerPackageChart()
 *  this function loads up the bar chart for the per package report
 *  @uses Chartist.js
 */
function pricePerPackageChart(){
    var r = DIM.real;
    var d = DIM.dim;
    var data = {
        labels: ['Zone2', 'Zone3', 'Zone4', 'Zone5', 'Zone6', 'Zone7', 'Zone8'],
        series: [
            [r[2],r[3],r[4],r[5],r[6],r[7],r[8]],
            [d[2],d[3],d[4],d[5],d[6],d[7],d[8]]
        ]
    };
    var options = {
        seriesBarDistance: 10
    };
    var responsiveOptions = [
        ['screen and (max-width: 640px)', {
            seriesBarDistance: 5,
            axisX: {
                labelInterpolationFnc: function (value) {
                    return value[0];
                }
            }
        }]
    ];
    new Chartist.Bar('#chart-ppz', data, options, responsiveOptions);
}

/**
 *  @method monthlyProjectedCostsGraph()
 *  this function loads up the bar chart for the monthly report
 *  @uses Chartist.js
 */

function monthlyProjectedCostsGraph(){
    var r = DIM.real;
    var d = DIM.dim;
    var v = parseInt($('#per_month').val());
    var z = parseInt($('#zone-toggle select').val());
    var data = {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mai', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        series: [
            [r[z]*v*1, r[z]*v*2, r[z]*v*3, r[z]*v*4, r[z]*v*5,r[z]*v*6,r[z]*v*7,r[z]*v*8,r[z]*v*9,r[z]*v*10,r[z]*v*11,r[z]*v*12],
            [d[z]*v*1, d[z]*v*2, d[z]*v*3,d[z]*v*4,d[z]*v*5,d[z]*v*6,d[z]*v*7,d[z]*v*8,d[z]*v*9,d[z]*v*10,d[z]*v*11,d[z]*v*12]
        ]
    };
    var options = {
        seriesBarDistance: 10
    };
    var responsiveOptions = [
        ['screen and (max-width: 640px)', {
            seriesBarDistance: 5,
            axisX: {
                labelInterpolationFnc: function (value) {
                    return value[0];
                }
            }
        }]
    ];
    new Chartist.Bar('#chart-mpc', data, options, responsiveOptions);
}



