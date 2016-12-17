jQuery(document).ready(function () {
    //Mask the inputs
    $('input.phone').inputmask("(999) 999-9999");
    bindModals();
    slackBtns();
    //navShrunk = false;
    //navAniDur = 200;
    //navTopTrigger = 127;
    //scrollNav();
    //sideNav();
    calculators();
    tabs();
//    scheduleNow();
//    help();
    validate();
    $(document).on('click', '#pricing-table a', function (e) {
        e.preventDefault();
    });
    flags();
    videoTabs();
    //browseFile();
    centerTextVertically(); //2015
    $('img').load(function(){centerTextVertically()}); // bugfix
    transitionOnShow(); //2015
    offsetAnchor(); //2015
    scrollTo();
    $('[data-href]').click(function(){
        window.location.href = $(this).attr('data-href');
    });

    $(document).on('click', '[data-anal]', function(){
        trackGaEvent($(this).attr('data-anal'));
    });
    $('form[data-anal]').submit(function(){
        trackGaEvent($(this).attr('data-anal'));
    });
    footer();
    validateVisibleBindings();
});
//function hsBtnClasses(){
//    var btn = $('.hs-button');
//    btn.attr('class', 'btn btn-primary');
//}
//
///** OLD NAV **/
// function refreshNav() {
//    var w = $('body').outerWidth();
//    var scroll = $(document).scrollTop();
//    if ((scroll > navTopTrigger || w <= 950 ) && !navShrunk) {
//        smallNav();
//    }
//    if ((scroll < navTopTrigger  && w >= 950 ) && navShrunk) {
//        bigNav();
//    }
//}
// function scrollNav() {
//    $(document).scroll(function () {
//        refreshNav();
//    });
//    $(window).resize(function () {
//        refreshNav();
//    });
//
//    $(window).resize();
//    $(document).scroll();
//    $(document).on('click', '#hamburger', function () {
//        var clicked = $(this).hasClass('clicked');
//        var size = $('body').outerWidth();
//        if (clicked) {
//            hideTuckedNav();
//            hideSideNav();
//        } else {
//            if (size <= 950) {
//                showSideNav();
//            } else {
//                showTuckedNav();
//            }
//        }
//    });
//    $(document).on('click', '#sn-overlay', function(){
//        hideSideNav();
//    });
//}
// function showTuckedNav() {
//    $('#hamburger').addClass('clicked');
//    $('#company-nav').animate({'top': '50px'}, 200);
//}
// function hideTuckedNav() {
//    $('#hamburger').removeClass('clicked').css({
//        'background-color' :'transparent'
//    });
//    $('#company-nav').animate({'top': '-17px'}, 200);
//}
// function showSideNav() {
//    $('#hamburger').addClass('clicked');
//    $('#hamburger').css({'background':'#fff'});
//    $('#logo-small').css({'display': 'none'});
//    $('#sn-overlay').css({'display': 'block'});
//    $('#product-nav').css('left',0);
//    $('#sn-overlay').animate({
//        'opacity': 0.7
//    }, 200);
//    $('body').animate({
//        'padding-left': '270px',
//        'overflow': 'hidden'
//    }, 200);
//    $('#side-nav').css({'display': 'block', 'left': '-300px'});
//    $('#side-nav').animate({
//        'left': '0'
//    }, 200);
//}
// function hideSideNav() {
//    $('#hamburger').removeClass('clicked').css({
//        'background-color' :'transparent'
//    });
//    $('#side-nav').animate({
//        'left': '-300px'
//    }, 100, function () {
//        $('#side-nav').css({'display': 'none'});
//    });
//    $('#logo-small').css({'display': 'block'});
//    $('#sn-overlay').animate({'opacity': '0'}, 100, function () {
//        $('#sn-overlay').css({'display': 'none'});
//    });
//    $('body').animate({
//        'padding-left': '0',
//        overflow:'auto'
//    }, 100);
//}
// function smallNav() {
//    navShrunk = true;
//    $('body').addClass('small-nav');
//    $('#header').css('overflow', 'visible');//chrome bugfix
//    $('#header').addClass('scroll-nav');
//    $('#company-nav').addClass('tucked-nav');
//    $('#company-nav').removeClass('untucked-nav');
//    $('#product-links').animate({
//        'right': '6.75%',
//        'width': '59%',
//        'font-size': '12px'
//    }, navAniDur);
//    setTimeout(function () {
//        $('#logo-small').animate({'top': '0'}, navAniDur, function () {
//            $('#product-nav').css('overflow', 'visible');//bug-fix
//        });
//        $('#hamburger').animate({'width': '60px'}, navAniDur, function () {
//            $('#product-nav').css('overflow', 'visible');//bug-fix
//        });
//    }, 75);
//    $('#nav_fmi').html('Freight<br/>Mgmt. <span></span>');
//    $('#nav_parcel').html('Bill<br/>Audit <span></span>');
//}
// function bigNav() {
//    navShrunk = false;
//    $('body').removeClass('small-nav');
//    $('#header').css('overflow', 'visible');//chrome bugfix
//    $('#header').removeClass('scroll-nav');
//    $('#company-nav').removeClass('tucked-nav');
//    $('#company-nav').addClass('untucked-nav');
//    $('#product-links').animate({
//        'width': '100%',
//        'right': '0',
//        'font-size': '14px'
//    }, navAniDur);
//    $('#hamburger').animate({'width': '0'}, navAniDur, function () {
//        $('#product-nav').css('overflow', 'hidden');//bug-fix
//    });
////                $('#logo-small').animate({'width' : '0'}, navAniDur);
//    $('#logo-small').animate({'top': '-100px'}, navAniDur);
//    $('#nav_fmi').html('Freight<br/>Management <span></span>');
//    $('#nav_parcel').html('Parcel &amp;<br/>Freight Audit <span></span>');
//}
//
//
// function sideNav() {
//    $(document).on('click', '#side-nav div div:nth-child(1) ', function () {
//        var menu = $(this).parent('div').find('.sn-links');
//        if ($(this).hasClass('open')) {
//            $(this).removeClass('open');
//            menu.animate({
//                'height': 0
//            }, 200);
//        } else {
//            $('.open').trigger('click');
//            $(this).addClass('open');
//            var h = 0;
//            menu.find('a').each(function () {
//                h = h + $(this).outerHeight();
//            });
//            menu.animate({
//                'height': h + 'px'
//            }, 200);
//        }
//    });
//}
//
//
///** clears hubspot labels **/
//function clearLabels() {
//    $('#convert label').each(function () {
//        var txt = $(this).text();
//        var target = $(this).attr('for');
//        $('#' + target).attr('placeholder', txt);
//        $(this).hide();
//        clearInterval(labels);
//        var btn = $('#convert form input[type=submit]');
//        if (btn.val() == '') {
//            btn.val("SUBMIT");
//        }
//    });
//    $('#convert input[name=company]').parents('.form-columns-1').hide();
//    $('textarea[name=web_comments]').attr('placeholder', 'How Can We Help?');
//}
//
//
///**
// * old help function
// */
//function help() {
//    $(document).on('click', '.help a', function (e) {
//        $('.dialog-content').html($('#help-content').html());
//        $('.dialog, .dialog-content').attr('style', '');
//        $('.dialog').show();
//        var top = $(document).scrollTop();
//        $('#modal-contentLayer1').css('top', (top + 55) + 'px');
//        e.preventDefault();
//        return false;
//    });
//    $(document).on('click', '.dialog-close', function (e) {
//        $('.dialog').hide();
//    });
//    $(document).on('click', '.sample', function (e) {
//        $('.dialog-content').html('<img alt="Rates Calculator Sample Output" src="/images/calculator-samples/rates-calculator.jpg">');
//        $('.dialog-content').css({
//            height: '592px'
//        });
//        $('.dialog').css({
//            height: '590px',
//            width: '720px',
//            'margin-left': '-384px',
//            top: '40px',
//            display: 'block'
//        });
//        e.preventDefault();
//        return false;
//    });
//}
//function jstore(key){
//    localStorage.setItem(key, 0);
//}
//function jused(key){
//    var val =  parseInt(localStorage.getItem(key));
//    val++;
//    localStorage.setItem(key, val);
//}
function abTrack(key, value, overwrite){
    if(abGet(key) == null || overwrite){
        localStorage.setItem(key, value);
    }
}
function abGet(key){
    return localStorage.getItem(key);
}

/*
 *  audit calc
 */
AuditCalc = {
    min: 1/100,
    max: 7/100,
    spend: 0,
    recovery: 0,
    getRange: function() {
        return (this.max - this.min) * this.spend;
    },
    /*
     *  Each input accounts for some % of the estimated recovery
     *  range inputs are converted to percent values and applied to their Max val
     *  total percent is then used as the "left" value of the "#ac-you" marker
     */
    updateAuditCalculator: function(){
        this.spend = number($('#audit-spend').val());
        this.recovery = this.calculateAuditRecoveryPercentage();
        if(isNaN(parseInt(this.spend))){
            $('#audit-spend').val('');
            alert('Please Enter A Dollar Amount');
            return false;
        }
        $('#audit-calc').removeClass('pending').removeClass('hidden-xs');
        this.moveACYouMarker();
        this.updateACLabels();
    },
    moveACYouMarker: function (){
        left = this.recovery * .9;
        $('#ac-you').css('left', left + '%');
        $('#ac-you div:nth-child(2)').css('height', ( $('#ac-chart img').height() - 35 )+ 'px')
    },
    updateACLabels: function (){
        est = ((this.recovery / 100) * this.getRange()) + (this.spend * this.min);
        $('#ac-min-percent').text(floatToMoney( this.spend * this.min ));
        $('#ac-max-percent').text(floatToMoney( this.spend * this.max ));
        $('#ac-est-recovery').text('$' + (Math.floor((est)/1000)) + 'K');
        $('#ac-start-saving').show();
    },
    calculateAuditRecoveryPercentage : function (){
        var freightMultiplyer = valAsPercent('#freight');

        // recovery is a % of the estimated amount OF the 11 percent possible. so recovery 50% yeilds 5.5% of spend
        var gsrMax      = 10 + (49 * freightMultiplyer);
        var groundMax   = 4 + (9 * freightMultiplyer);
        var domesticMax = 14;
        var resiMax     = 4 + (9 * freightMultiplyer);
        var gsr         = ( $('#gsr').is(':checked') ? 1 : 0) * gsrMax;
        var ground      = valAsPercent('#ground') * groundMax;
        var domestic    = valAsPercent('#domestic') * domesticMax;
        var resi        = valAsPercent('#resi') * resiMax;
        return  gsr + ground + domestic + resi + 1; // min value: 1; max value: 100
    }
};
if($('#audit-spend').length > 0) {
    /*
     *  bind audit calc to events
     */
    $(document).ready(function () {
        $('#audit-spend').inputmask(); // format annual spend as dollar amount
    });
    $(document).on('submit', '#annual-spend-form', function (e) {
        e.preventDefault();
        //TODO: log activity in hubspot
        _gaq.push(['_trackEvent', 'Interaction', 'Calculator', 'Audit Calculator']);
        AuditCalc.updateAuditCalculator();
    });
    $(document).on({
        change: function () {
            AuditCalc.updateAuditCalculator();
        },
        slidestop: function () {
            AuditCalc.updateAuditCalculator();
        }
    });
}
//END AUDIT CALC


//START RATE AND COMPARISON CALCS
$(document).ready(function(){

    //We can click any element and have it toggle a section defined in the clicked element(s) section-toggle attribute
    $('[data-section-toggle]').click(function(e){
        if($(this).prop('tagName') == 'a'){
            e.preventDefault();
            e.stopPropagation();
        }
        var toggleElement = $(this).attr('data-section-toggle');
        $(toggleElement).slideToggle();
    });

    $('#shipping-comparison-form').submit(function(e){
        e.preventDefault();
        prepareForResults($(this),compareRates);
        return false;
    });

    $('#shipping-calculator-form').submit(function(e){
        e.preventDefault();
        prepareForResults($(this),getRates);
        return false;
    });

    //Change the label when it gets input
    $("select[name*='[carrier]']").change(loadRateGuides);
    $("select[name*='[year]']").change(loadServices);
    $('select[name=carrier]').change(loadRateGuides);
    $('#rate-year').change(loadServices);

    //remove inputmask on submit
    $("#phone").inputmask('remove');

    //Bind pre-result animation
    //$('.prepareForResults').click(prepareForResults);

    //Setup Input masks
    $('.dollars').inputmask('Regex', { regex: "^[0-9]*\\.[0-9]{1,2}", rightAlign: true});
    $('.percentage').inputmask({ mask: "9{1,2}[\\.9{1,2}]", greedy:false, placeholder: "", rightAlign: true});

    //Initialize our tooltips
    $('[data-toggle="tooltip"]').tooltip({
        template: '<div class="tooltip" role="tooltip">' +
        '<div class="tooltip-inner" style="font-size: 14px;"></div>' +
        '<div class="tooltip-arrow-down"><i class="fa fa-arrow-down"></i></div>' +
        '</div>'
    });

    $('input[id*=advanced-discounts]')
        .change(useAdvancedDiscountOptions);

    $('select[id*=type]').change(updateDiscountLabels);
});

//Send data for rate comparison
function compareRates() {
    var phone = $('input[name=hs\\[phone\\]]');
    var url = '/ajax/rate-comparison';
    phone.inputmask('remove');
    var data = $('#shipping-comparison-form').serialize();
    phone.inputmask('(999) 999-9999');
    $.post(url,
        data,
        function (table) {
            $('#calc-results').html(table);
        });

}
function getRates(output) {
    var phone = $('input[name=hs\\[phone\\]]');
    var url = '/ajax/rates-calculator';
    phone.inputmask('remove');
    var data = $('#shipping-calculator-form').serialize();
    phone.inputmask("(999) 999-9999");

    $.post(url, data, function (table) {

        $('#calc-results').html(table);
        $(document).ready(function(){

        });
    });
}

//Change Discount Label
function updateDiscountLabels(){
    updateDiscountLabel("A");
    updateDiscountLabel("B");
}
function updateDiscountLabel(which){
    var discName = 'Earned Discount';
    var carrier = $('#'+which+'-carrier').val();
    if(carrier == 'UPS'){
        discName = 'Tier Incentive';
    }
    // " FedEx 2015 - Ground Earned Discount "
    $('#'+which+'-rate-discount-label').text(
        carrier +' '+
        decodeURI($('#'+which+'-year').val()) +' '+
        $('#'+which+'-type').val() +' '+
        discName
    );
}
//Enable and disable Carrier Discount(s) input
function useAdvancedDiscountOptions() {
    var input = $('#' + $(this).attr('id').replace('advanced-discounts', 'general'));
    var label = $("label[for="+input.attr('id')+"]");
    var inputAddon = input.next('.input-group-addon');
    var formGroup = input.closest('.form-group');

    label.animate({height:'toggle'});
    inputAddon.animate({'height':'toggle'});
    input.animate({height:'toggle'});


    if($(this).prop("checked"))
    {
        formGroup.addClass('form-group-tab');
    } else {
        formGroup.removeClass('form-group-tab');
    }
}

//Enable and Disable labesl for carriers
function changeCarrierLabel(){
    var dynamicSelects = $('select[name=year], select[name=type]');

    if($(this).val() != '0'){
        dynamicSelects.attr('disabled',false).prev('label').removeClass('disabled');
    } else {
        dynamicSelects.attr('disabled',true).prev('label').addClass('disabled');
        $.each(dynamicSelects, function(){
            $(this).children().remove();
        });
    }
}

//Dynamically load the data for our rate guide year
function loadRateGuides(){
    var target = $(this).attr('data-target');
    var targetLabel = $(target).prevUntil('label').prev();
    var advancedDiscounts = $('#' + $(this).attr('id').replace('carrier','advanced-discounts'));
    var discountLabel = $('label[for='+$(this).attr('id').replace('carrier','general')+']');

    if($(this).val() != '0') {
        discountLabel.text($(this).val()+ ' Discount');
        advancedDiscounts.attr('disabled', false);
        targetLabel.removeClass('disabled');

        $(target).load('/files/'+$(this).val()+'/rate-years.txt', function() {
            loadServices(target);
        }).attr('disabled',false);

    } else {
        discountLabel.text('Carrier Discount');
        advancedDiscounts
            .attr('disabled', true)
            .prop('checked',false)
            .closest('.form-group')
            .removeClass('form-group-tab');
        $(advancedDiscounts.attr('data-section-toggle')).slideUp();
        $('#'+advancedDiscounts.attr('id').replace('advanced-discounts', 'general'))
            .show()
            .next('.input-group-addon')
            .show();
        $('label[for='+advancedDiscounts.attr('id').replace('advanced-discounts', 'general')+']').show();

        targetLabel.addClass('disabled');
        $(target).attr('disabled',true).children().remove();
        loadServices(target);
    }
}

//Dynamically load the data for our service types
function loadServices(parentId){
    if($.type(parentId)!= 'string'){

        var services = $(this).attr('data-target');
        var carrier = $(this).attr('id').replace('-year','-carrier');

        if($('#'+carrier).val() != '0'){
            $(services).removeClass('disabled');
            $(services).attr('disabled',false).load('/files/'+$('#'+carrier).val()+'/'+$(this).val()+'.txt', updateDiscountLabels);
        } else {
            $(services).attr('disabled',true).children().remove();
            $(services).prevUntil('label').prev().addClass('disabled');
        }

    } else {

        var services = $(parentId).attr('data-target');

        if($('select[data-target='+parentId+']').val() != '0'){
            $(services).prevUntil('label').prev().removeClass('disabled');
            $(services)
                .attr('disabled',false)
                .load('/files/'+$('select[data-target='+parentId+']').val()+'/'+$(parentId).val()+'.txt', updateDiscountLabels);
        } else {
            $(services).attr('disabled',true).children().remove();
            $(services).prevUntil('label').prev().addClass('disabled');
        }
    }
}

//Validate the input is all there and scroll to where we can display the table
function prepareForResults(form,callback){

    var isValid = true;
    //var requiredFields = $(this).closest('form').find('.required');
    var requiredFields = form.find('.required');

    $.each(requiredFields, function (){
        if(isValid){
            isValid = $(this).val() != '' && $(this).val() != null && $(this).val() != 0;
        }
    });

    if(isValid){
        var html = '<img src="/images/lojistic-logo.png" width="120px" class="animated flip infinite"><br/><br/>';
        var target = $.type($(this).attr('data-target'))!= 'string' ? '#submit-scroll-stop' : $(this).attr('data-target');
        var pos = $(target).offset().top - 40;

        $('#calc-results').html(html);

        if ($('html').scrollTop() < pos) {
            $('html, body').animate({
                scrollTop: pos
            }, 700);
        }
        callback();
    }
}

//Expand and decrease table mask around table to show and hide rows
function toggleHiddenRows(e){
    e.preventDefault();
    e.stopPropagation();
    var expanded = $('.table-mask').hasClass('expanded');
    var height = expanded ? '410px' : '5200px';
    var label = expanded ? 'Show All Rows' : 'Hide Rows';
    var labelIcon = expanded ? '<i class="fa fa-chevron-up"></i>' : '<i class="fa fa-chevron-down"></i>';
    expanded ? $('#show-all-rows').html('+ Show All Rows') : $('#show-all-rows').html('- Hide Rows');

    $('.pulldown-label')
        .html(label+labelIcon)
        .find('i.fa')
        .toggleClass('fa-rotate-180')
        .promise()
        .done(function(){
            $('.table-mask').animate({'max-height':height}, 1000, function(){
                $(this).toggleClass('expanded');
            });
        });

    if(expanded) {
        var target = $(this).attr('data-target');
        var pos = $(target).offset().top - 40;
        $('html, body').animate({
            scrollTop: pos
        }, 700);
    }
}
//END RATE COMPARISON CALC

function blogInit(){
    $(window).on('scroll', animatedHeroTitle);
    //$(window).on('scroll', blogScrollBar);
}

/**
 * @method animatedHeroTitle
 * this method adds animation effects to the Hero Image Title
 */
function animatedHeroTitle(){
    var scrollTop = $(window).scrollTop();
    var heroTitleSize = 1 +  scrollTop/8000;
    if (scrollTop <= 550 ){
        $('.hero-image').css({
            'transition': 'all ease-in-out',
            'transform' : 'scale(' + heroTitleSize + ')'
        });
    }
    if (scrollTop <= 183) {
        $('.hero-title').css({
            'opacity' : 1 - scrollTop/183,
            'transition': 'all ease-in-out',
            'transform' : 'scale(' + heroTitleSize/2 + ')',
            'transform': 'translate(0, ' + scrollTop/2 + 'px)'
        });
    }
}

/**
 * @method blogScrollBar
 * this method adds the animation and computes the opacity of the fixed footer
 */
function blogScrollBar(){
    var scrollTop = $(this).scrollTop();
    var marker = {
        top:(document.body.clientHeight/ 10),
        bottom:document.getElementById('footer').offsetTop -1250
    };
    var stickyFooterOpacity = 0;
    if(scrollTop > marker.top){ stickyFooterOpacity = (scrollTop - marker.top) /100;}
    if(scrollTop > marker.bottom){stickyFooterOpacity = 1; stickyFooterOpacity -= (scrollTop - marker.bottom) / 100;}
    $('.scroll-footer').css({'opacity' : stickyFooterOpacity, 'transition': 'all ease-in-out'});
}




function calculators() {
    $(document).on('click', '.getBtn', function () {
        $(this).parents('form').trigger('submit');
    });

    function addOption(target, label, value) {
        if (!value) {
            value = label;
        }
        $('<option/>')
            .appendTo(target)
            .attr('value', value)
            .html(label);
    }

    $(document).on('click', '.view-individual a, .view-all a', function (e) {
        $(this).parents('.carrier-discounts ').find('#rategeneral, #comparegeneral').toggle();
        $(this).parents('.carrier-discounts ').find('.individual').toggle();
        e.preventDefault();
        return false;
    });
    $(document).on('click', '.reset a', function (e) {
        $('input[type=text]').val('');
        $('select').attr('data-default', '');
        selectDefaults('body');
        e.preventDefault();
        return false;
    });
}
/**
 * makes all ajax requests pass anti spam token
 */
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function defaultValue(target, value) {
    var i = setInterval(function () {
        if (jQuery(target).length > 0) {
            jQuery(target).val(value);
            clearInterval(i);
        }
    }, 1000);
}
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




function download() {
    $('a.download').each(function () {
        window.open($(this).attr('href'));
    });
}
function flags() {
    $(document).on('click', '.flag-link', function () {
        var href = $(this).find('a').attr('href');
        if (href.length > 0) {
            window.location = href;
        }
    });
}
function footer(){
    $(document).on("click", '#footer_content div b', function(){
        var parent = $(this).parent('div');
        if(parent.hasClass('active')){
            parent.removeClass('active');
        }else{
            parent.addClass('active');
        }
    });
}
function trackGaEvent(attr){
    var data = attr.split('|');
    if(typeof data[1] === 'undefined') {
        _gaq.push(['_trackEvent', 'Interaction', data[0]]);
    } else {
        _gaq.push(['_trackEvent', 'Interaction', data[0], data[1]]);
    }
    return false;
}
google.load("visualization", "1", {packages: ["corechart"]});
function donutChart(jsonData, title, targetId) { //pie chart
    var data = google.visualization.arrayToDataTable(jsonData);
    var options = {
        title: title,
        pieHole: 0.4,
        legend: 'none',
        colors: ['#00C853', '#164260', '#FFF000', '#00ACED'],
        slices: {  1: {offset: 0.2},
                    2: {offset: 0.2},
                    3: {offset: 0.2},
                    4: {offset: 0.2}
                }
    };
    var chart = new google.visualization.PieChart(document.getElementById(targetId));
    chart.draw(data, options);
}
function hubspotForm(){
    $('.hp-hidden').css('display', 'none');
}
$(document).ready(function(){
    hubspotForm();
});
/**
 * detect IE
 * returns version of IE or false, if browser is not Internet Explorer
 */
function internetExplorerIsMessingThingsUp() {
    var ua = window.navigator.userAgent;

    var msie = ua.indexOf('MSIE ');
    if (msie > 0) {
        // IE 10 or older => return version number
        return parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);
    }

    var trident = ua.indexOf('Trident/');
    if (trident > 0) {
        // IE 11 => return version number
        var rv = ua.indexOf('rv:');
        return parseInt(ua.substring(rv + 3, ua.indexOf('.', rv)), 10);
    }

    var edge = ua.indexOf('Edge/');
    if (edge > 0) {
        // IE 12 (aka Edge) => return version number
        return parseInt(ua.substring(edge + 5, ua.indexOf('.', edge)), 10);
    }

    // other browser
    return false;
}

function toFixIE(fn){
    if(internetExplorerIsMessingThingsUp()){
        //do the passed function
        fn();
    }
}
function resetSvg(){
    $('svg use').each(function () {  $(this).attr('xlink:href', $(this).attr('xlink:href')) });
}
ImageViewer = {
    init: function(){
        $('#image-viewer').addClass('animated');
        $(document).on('click', '.show-image-viewer', function(){
           ImageViewer.show();
        });
        $(document).on('click', '#image-viewer-close', function(){
           ImageViewer.close();
        });
        this.changeImage($('#image-list img:first-child'));
        $(document).on('click', '#image-list img', function(){
           ImageViewer.changeImage($(this));
        });
        this.bindArrowKeys();
    },
    changeImage: function(target){
        var list = $('#image-list');
        if(!target){
            target =  list.find('.current').next('img');
            if(target.length == 0){
                target = list.find('img:first-child');
            }
        }
        list.find('.current').removeClass('current');
        target.addClass('current');
        $('#image-stage img').attr('src', target.attr('src'));
    },
    close: function(){
        $('#image-viewer')
            .removeClass('fadeInDownBig')
            .addClass('fadeOutUpBig');
    },
    show: function(){
        $('#image-viewer')
            .css('display', 'block')
            .addClass('fadeInDownBig')
            .removeClass('fadeOutUpBig');
    },
    bindArrowKeys: function(){
        $(document).keydown(function(e) {
            var list    = $('#image-list');
            var current = list.find('.current');
            switch(e.which) {
                case 27: // escape
                    ImageViewer.close();
                    break;
                case 37: // left
                    var prev    = current.prev('img');
                    if(prev.length == 0){
                        prev = list.find('img:last-child()');
                    }
                    ImageViewer.changeImage(prev);
                    break;
                case 39: // right
                    var next    = current.next('img');
                    if(next.length == 0){
                        next = list.find('img:first-child()');
                    }
                    ImageViewer.changeImage(prev);
                    break;
                default:
                    break;
            }
        });
    }
};

function insurance() {
    var value = Math.ceil(number($('#dec_val').val()) / 100);
    var num = number($('#num').val());
    var min = number($('#min').val());
    var carrier_rate = number($('#carrier_rate').val());
    var source_rate = 0.4;
    var old_price = 0;
    var new_price = 0;

    if (value * carrier_rate < min) {
        old_price = min;
    } else {
        old_price = value * carrier_rate;
    }

    new_price = value * source_rate;

    old_price = old_price * num;
    new_price = new_price * num;
    if (old_price <= new_price) {
        $('#results').addClass('hidden');
        $('#dang').removeClass('hidden');
    }else{
        if (isNaN(old_price) || isNaN(new_price)) {
            alert('Please complete the fields with numbers only');
        } else {
            $('#old .price b').text(floatToMoney(old_price));
            $('#new .price b').text(floatToMoney(new_price));
            $('#results').removeClass('hidden');
            $('#dang').addClass('hidden');
            drawInsChart(old_price, new_price);
        }
    }
}

$(document).on('click', '.calculate', function() {
    insurance();
});
$(document).on('click', '.edit', function() {
    $(this).prev('b').hide();
    $(this).prev('b').prev('input').show();
    $(this).hide();
    $('.rates .calculate').show();
});
//$(document).ready(function() {
//    $('#calc input').each(function() {
//        var value = $(this).attr('data-default');
//        $(this).val(value);
//    });
//});

google.load("visualization", "1", {packages: ["corechart"]});
function drawInsChart(old_price, new_price) {
    var op = 0,
        np = 0,
        savings = 0;
    var months = [  'Jan', 'Feb', 'Mar',
                    'Apr', 'May', 'Jun',
                    'Jul', 'Aug', 'Sep',
                    'Oct', 'Nov', 'Dec'];
    var month = new Date().getMonth();
    var cols  = [['Month', 'Carrier Price', 'Our Price', 'Savings']];
    var n     = 0;

    while (n < 12) {
        op = (old_price * (n + 1));//.toFixed(2);
        np = (new_price * (n + 1));//.toFixed(2);
        savings = op - np;
        cols.push([months[month], op, np, savings]);
        ++month;
        if (month > 11) {
            month = 0;
        }
        n++;
    }
    $('#chart_total').text(floatToMoney(savings));
    var data = google.visualization.arrayToDataTable(cols);

    var options = {
        title: 'Cumulative Insurance Spending',
        hAxis: {title: 'Month', prefix: "$"}, //, titleTextStyle: {color: 'red'}}
        colors: ['#EB1C24', '#6096c3', '#00c651']
    };
    var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
    chart.draw(data, options);
    $(window).trigger('resize');
}

Interview = {
    init: function (show) {
        if (show) {
            Interview.nextStep();
            Interview.nextTitle();
        }
        $(document).on('click', '.next-step', function () {
            var valid = validateVisible();
            if (!valid) {
                return false;
            }
            Interview.nextStep();
        });
        $(document).on('click', '.prev-step', function () {
            Interview.prevStep();
        });
        $(document).on('click', '.show-step', function () {
            Interview.showStep($(this).data('step-target'));
        });
    },
    nextTitle: function () {
        var showing = $('.step-title:visible');
        showing.hide();
        showing.next('.step-title').css('display', 'block').addClass('slideInLeft');
    },
    nextStep: function () {
        var showing = $('.step:visible');
        showing.hide();
        showing.next('.step').css('display', 'block').addClass('slideInLeft');
    },
    prevStep: function () {
        var showing = $('.step:visible');
        showing.hide();
        showing.prev('.step').css('display', 'block').addClass('slideInLeft');
    },
    showStep: function (index) {
        var showing = $('.step:visible');
        showing.hide();
        $('.step:eq(' + index + ')').css('display', 'block').addClass('slideInLeft');
    }
};
/**
 * prevents scrolling on maps because we use big ass maps
 * and maps zoom on scroll
 */
$(document).on('click', '.map', function(){
    $(this).find('iframe').css('pointer-events', 'auto'); //events are disabled (via css, which is weird) - clicking re-enables events on map iframes.
});


function bindModals(){
    $(document).on('click', '.modal-btn', function(){
        var title = $(this).attr('data-modal-title');
        var body = $($(this).attr('data-modal-body')).html();
        var footer = $($(this).attr('data-modal-footer')).html();
        modal(title, body, footer, true);
    });
}
function modal(title, body, footer, show){
    var modal = $('#empty-modal');
    modal.find('.modal-title').html(title);
    modal.find('.modal-body').html(body);
    modal.find('.modal-footer').html(footer);
    if(show){
        modal.modal();
    }
    return modal;
}
/**
 * Done in JS so it can be cached
 * Created by Mike on 11/16/15.
 */

Sidenav = new Vue({ // requires Nav
    el: '#side-nav',
    data: {
        state: 'closed',
        groups:[
            { // sign in
                name: 'SIGN IN',
                state: '',
                links: [
                    {
                        name: 'Intelliship<br/> Shipping Software',
                        url: 'https://shipping.lojistic.com/'
                    },
                    {
                        name: 'DATADOT<br/>Audit Reporting',
                        url: 'https://data.lojistic.com/'
                    }
                ]
            },//end sign in
            {// solutions
                name: 'SOLUTIONS',
                state: '',
                links: [
                    {
                        name: ' Parcel &amp; Freight Audit',
                        url: '/parcel-freight-bill-audit'
                    },
                    {
                        name: ' Carrier Negotiation',
                        url: '/carrier-contract-negotiation'
                    },
                    {
                        name: ' Wholesale LTL Rates',
                        url: '/wholesale-ltl-rate-marketplace'
                    },
                    {
                        name: ' Freight Management',
                        url: '/freight-management'
                    },
                    {
                        name: 'Shipping Insurance',
                        url: '/shipping-insurance'
                    },
                    {
                        name: 'Shipping Software',
                        url: '/shipping-software'
                    },
                    {
                        name: 'Tracking Software',
                        url: '/halo'
                    },
                    {
                        name: 'Savings Checklist',
                        url: '/savings-checklist'
                    }
                ]
            },// end solutions
            {
                name: 'FREE CALCULATORS',
                state: '',
                links: [
                    {
                        name: 'Audisee, Instant Audit',
                        url: '/audisee/instant-parcel-audit'
                    },
                    {
                        name: 'Insurance Cost Calculator',
                        url: '/shipping-insurance#insurance-calculator'
                    },
                    {
                        name: 'FedEx &amp; UPS Rates Calculator',
                        url: '/shipping-costs-calculators/fedex-ups-rates-calculator'
                    },
                    {
                        name: 'FedEx & UPS Rates Comparison Tool',
                        url: '/shipping-costs-calculators/fedex-ups-rate-comparison-tool'
                    },
                    {
                        name: 'All Shipping Cost Calculators',
                        url: '/shipping-costs-calculators'
                    }
                ]
            },
            { // resources
                name: 'SHIPPING RESOURCES',
                state: '',
                links: [
                    {
                        name: '5 Secrets White Paper',
                        url: '/white-papers/5-secrets-ups-and-fedex-dont-want-you-to-know'
                    },
                    {
                        name: 'General Price Increase White Paper',
                        url: '/white-papers/general-price-increase'
                    },
                    {
                        name: 'Fuel Surcharge White Paper',
                        url: '/white-papers/fuel-surcharge'
                    },
                    {
                        name: 'All White Papers',
                        url: '/white-papers'
                    },
                    {
                        name: 'Shipping Resource Guide',
                        url: '/shipping-resource-guide'
                    }
                ]
            },// end resources
            { // about
                name: 'ABOUT LOJISTIC',
                state: '',
                links: [
                    {
                        name: 'Our Story',
                        url: '/lojistic'
                    },
                    {
                        name: 'About Lojistic',
                        url: '/about-lojistic'
                    },
                    {
                        name: 'Cost Reduction Services',
                        url: '/reduce-shipping-costs'
                    },
                    {
                        name: 'Pricing',
                        url: '/lojistic-pricing'
                    },
                    {
                        name: 'Referral Partner Program',
                        url: '/lojistic-referral-program'
                    },
                    {
                        name: 'News &amp; Events',
                        url: '/freight-news-events'
                    },
                    {
                        name: 'Careers',
                        url: '/lojistic-careers'
                    }
                ]
            },// end about
            { // contact
                name: 'CONTACT US',
                state: '',
                links: [
                    {
                        name: '(800) 783-5753',
                        url: 'tel:8007835753'
                    },
                    {
                        name: 'Email Us',
                        url: 'mailto:info@lojistic.com'
                    },
                    {
                        name: 'Contact Info',
                        url: '/contact-lojistic'
                    },
                ]
            },
            {
                name: 'SOCIAL',
                state: '',
                links: [
                    {
                        name: 'Google+',
                        url: 'https://plus.google.com/+Lojistic'
                    },
                    {
                        name: 'LinkedIn',
                        url: 'http://www.linkedin.com/company/lojistic'
                    },
                    {
                        name: 'Twitter',
                        url: 'https://www.twitter.com/LojisticUSA'
                    },
                    {
                        name: 'Facebook',
                        url: 'https://www.facebook.com/LojisticUSA'
                    },
                    {
                        name: 'Blog',
                        url: '/blog'
                    }
                ]
            },
        ]
    },
    methods:{
        close: function(){
            Nav.toggleMenu();
        },
        menuIs: function(state){
          return this.state == state;
        },
        target: function(url){
          return (url.indexOf('http') == -1 ? '' : '_blank');
        },
        toggleGroupState: function($index){
            var group = this.groups[$index];
            group.state == 'open' ? group.state = 'closed' : group.state = 'open';
        }
    }
})
/**
 * Created by Mike on 11/5/15.
 */
Nav = new Vue({
    el: '#headernav',
    data: {
        scrollTopAfter: 84, // triggers scrolltop style nav after the window scrolls past this point
        scrollNavTriggerWidth: 997, // uses scrollnav when the width is tablet sized
        sideNavMax: 997, // up to this point, the hamburger menu will reveal the side navigation menu (nav-sidenav.js)
        headerState: 'fullnav', // options: [fullnav, scrollnav]
        menuMode: 'top', // options: [top, side]
        menuState: 'closed' //options [closed, open]
    },
    created: function () {
        this.setListeners();
    },
    methods: {
        /**
         * gets the width of the window
         * @returns {Number}
         */
        viewWidth: function () {
            return window.innerWidth;
        },
        /**
         * gets the top scroll position of the window
         * @returns {Number}
         */
        scrollTop: function () {
            return document.body.scrollTop + document.documentElement.scrollTop;
        },
        /**
         * binds window events to Nav methods
         */
        setListeners: function () {
            window.onscroll = function () {
                Nav.refresh();
            };
            window.onresize = function () {
                Nav.refresh();
            };
            setTimeout(function () {
                Nav.refresh();
            }, 300);

            toFixIE(resetSvg);
        },
        /**
         * flips whatever the current state of the menu is
         */
        toggleMenu: function () {
            this.menuState == 'open' ? this.setMenuState('closed') : this.setMenuState('open');
        },
        /**
         * applies the default / largest state of the nav
         */
        fullNav: function () {
            if (this.$data.headerState != 'fullnav') {
                this.setMenuState('closed');
            }
            this.$data.headerState = 'fullnav';
        },
        /**
         *
         * @param state
         */
        setMenuState: function (state) {
            this.$data.menuState = state; //close the menu just for cleanup
            Sidenav.state = state;
        },
        /**
         * applies scrollnav state
         */
        scrollNav: function () {
            if (this.$data.headerState != 'scrollnav') {
                //only close the sub menu when the type of header has changed
                this.setMenuState('closed');
            }
            this.$data.headerState = 'scrollnav';
        },
        /**
         * decides which nav to show when the window changes
         */
        refresh: function () {
            if (this.scrollTop() < this.scrollTopAfter) {
                // up top
                if (this.scrollNavTriggerWidth <= this.viewWidth()) {
                    //full size
                    this.fullNav();
                } else {
                    //tablet size
                    this.scrollNav();
                }
            } else {
                //scrolled
                this.scrollNav();
            }
        }
    }
});
function floatToMoney(num) {
    num = num.toFixed(2).replace(/./g, function (c, i, a) {
        return i && c !== "." && !((a.length - i) % 3) ? "," + c : c;
    });
    return '$' + num;
}
function number(num) {
    if(num) {
        while (num.indexOf(',') != -1) {
            num = num.replace(',', '');
        }
        num = num.replace(/[A-Za-z$-]/g, "");
        return parseFloat(num).toFixed(2);
    }else{
        return 0;
    }
}
function valAsPercent(target){
    return parseInt($(target).val()) / 100;
}
/**
 * Scrolls to anchor provided by URL
 */
function offsetAnchor() {
    setTimeout(function(){
        if(location.hash.length !== 0) {
            var target = $(location.hash);
            var pos = $(target).offset().top - 100;
            $('html, body').animate({
                scrollTop: pos
            }, 300);
        }
    }, 500)
}
Number.prototype.formatMoney = function(c) {
    var n = this,
        c = 2,
        d = ".",
        t = ",",
        s = n < 0 ? "-" : "",
        i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "",
        j = (j = i.length) > 3 ? j % 3 : 0;
    return '$'+s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
};
function queue(start) {
    var rest = [].splice.call(arguments, 1),
        promise = $.Deferred();

    if (start) {
        $.when(start()).then(function () {
            queue.apply(window, rest);
        });
    } else {
        promise.resolve();
    }
    return promise;
}
/**
 * Finds all child elements .same-height in parent .same-height.parent
 * and on page load, resize, it sets the child heights to be the same
 * size (using the tallest child's height)
 */

$(window).resize(function () {
    sameHeight();
});
$(document).ready(function(){
    sameHeight();
});
function sameHeight() {
    $('.same-height').each(function(){
        if($(this).parents('.same-height-parent').length == 0 ){
            $('.same-height').parent().addClass('same-height-parent'); // prep work
        }
    });
    $('.same-height-parent').each(function () {
        // this lets us group these guys together
        var tallest = 0; //reset for this group
        var children = $(this).find('.same-height');
        children.css('min-height', 'unset');
        children.each(function () {
            var height = $(this).outerHeight();
            if (height > tallest) {
                tallest = height;
            }
        });
        $(this).find('.same-height').css('min-height', tallest + 'px');
    });
}
jQuery(document).on('click', '#schedule_btn', function () {
    var iframe = "<iframe width='100%;' height='685px' frameborder='0' src='https://www.timetrade.com/book/G16JM'></iframe>";
    jQuery('#schedule_iframe iframe').remove();
    jQuery(iframe).prependTo('#schedule_iframe');
    jQuery('#schedule_contact').css('padding-bottom', '0');
    jQuery('#schedule_iframe').show();
});
jQuery(document).ready(function () {
    $("#schedule_iframe").css('display', 'none');//load the iframe, just dont show it
});
function scrollTo() {
    $(document).on('click', '.scrollTo', function () {
        var target = $(this).attr('data-target');
        var pos = $(target).offset().top - 120;
        //if ($('html').scrollTop() < pos) {
        $('html, body').animate({
            scrollTop: pos
        }, 700);
        //}
    });
}
function selectDefaults(selector) {
    //dropdowns
    var value = -1;
    $(selector).find('select').each(function () {
        value = parseInt($(this).attr('data-default'));
        if (isNaN(value)) {
            value = $(this).attr('data-default');
        }
        if (value) {
            $(this).children('option').each(function () {
                if ($(this).val() == value) {
                    $(this).attr('selected', 'selected');
                }
            });
        }
    });
}
function slackBtns(){
    $(document).on('click', '.slack', function(){
        slack($(this).attr('data-message'));
    });
}
function slack(message, fireLocal){
    if(window.location.href.indexOf('.com') != -1 || fireLocal){
        $.post('/slack', {message: message});
    }
}

function buildSocialMediaLinks(){
    var socialMediaLinkData = {
         page: encodeURIComponent(window.location.protocol + "//" + window.location.host + window.location.pathname),
         title: encodeURIComponent(document.getElementsByTagName("title")[0].innerHTML),
         description: encodeURIComponent("Check out this awesome blog post!")
    }
    var linkedin = "https://www.linkedin.com/shareArticle?mini=true&url=" + socialMediaLinkData.page + "&title=" + socialMediaLinkData.title + "&summary=" + socialMediaLinkData.description;
    var facebook = "https://www.facebook.com/sharer/sharer.php?u=" + socialMediaLinkData.page;
    var twitter = "https://twitter.com/home?status=" + socialMediaLinkData.description + socialMediaLinkData.title + socialMediaLinkData.page;
    //linkedin
    $("a[href='https://www.linkedin.com/shareArticle?mini=true&url=http%3A%2F%2Flojistic.com']").attr('href', linkedin);
    //facebook
    $("a[href='https://www.facebook.com/sharer/sharer.php?u=http%3A//lojistic.com']").attr('href', facebook);
    //twitter
    $("a[href='https://twitter.com/home?status=Check%20out%3A%20http%3A//lojistic.com/']").attr('href', twitter);

}

function tabs() {
    $(document).on('click', '.tab-nav li a', function (e) {
        var c = 'current';
        var li = $(this).parent('li');
        var i = li.index();
        $('.' + c).removeClass(c);
        li.addClass(c);
        $('.tab-content > li:eq(' + i + ')').addClass(c);
        e.preventDefault();
        return false;
    });
    $('.tab-nav > li:nth-child(1) a').click();
}
function centerTextVertically(){
    $('.text-vc').each(function(){
        var parent = $(this).parent().height();
        var self   = $(this).height();
        $(this).css({
            position : 'relative',
            top: ((parent - self) / 2) + 'px',
            opacity: 1
        });
    });
}
$(window).resize(function () {
    centerTextVertically();
});

(function() {
  var ALPHA_COUNT, ALPHA_MAX, ALPHA_MIN, COUNT_FRAMERATE, COUNT_MS_PER_FRAME, DIGIT_FORMAT, DIGIT_HTML, DIGIT_SPEEDBOOST, DURATION, FORMAT_MARK_HTML, FORMAT_PARSER, FRAMERATE, FRAMES_PER_VALUE, MS_PER_FRAME, MutationObserver, RIBBON_HTML, TRANSITION_END_EVENTS, TRANSITION_SUPPORT, TextRoller, VALUE_HTML, createFromHTML, fractionalPart, now, requestAnimationFrame, round, transitionCheckStyles, wrapJQuery, _jQueryWrapped, _old, _ref, _ref1,
    __slice = [].slice;

  VALUE_HTML = '<span class="odometer-value"></span>';

  RIBBON_HTML = '<span class="odometer-ribbon"><span class="odometer-ribbon-inner">' + VALUE_HTML + '</span></span>';

  DIGIT_HTML = '<span class="odometer-digit"><span class="odometer-digit-spacer">8</span><span class="odometer-digit-inner">' + RIBBON_HTML + '</span></span>';

  FORMAT_MARK_HTML = '<span class="odometer-formatting-mark"></span>';

  ALPHA_MIN = 32;

  ALPHA_MAX = 123;

  ALPHA_COUNT = ALPHA_MAX - ALPHA_MIN;

  DIGIT_FORMAT = 'd';

  FORMAT_PARSER = /^\(?([^)]*)\)?(?:(.)(d+))?$/;

  FRAMERATE = 30;

  DURATION = 2000;

  COUNT_FRAMERATE = 20;

  FRAMES_PER_VALUE = 2;

  DIGIT_SPEEDBOOST = .5;

  MS_PER_FRAME = 1000 / FRAMERATE;

  COUNT_MS_PER_FRAME = 1000 / COUNT_FRAMERATE;

  TRANSITION_END_EVENTS = 'transitionend webkitTransitionEnd oTransitionEnd otransitionend MSTransitionEnd';

  transitionCheckStyles = document.createElement('div').style;

  TRANSITION_SUPPORT = (transitionCheckStyles.transition != null) || (transitionCheckStyles.webkitTransition != null) || (transitionCheckStyles.mozTransition != null) || (transitionCheckStyles.oTransition != null);

  requestAnimationFrame = window.requestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;

  MutationObserver = window.MutationObserver || window.WebKitMutationObserver || window.MozMutationObserver;

  createFromHTML = function(html) {
    var el;
    el = document.createElement('div');
    el.innerHTML = html;
    return el.children[0];
  };

  now = function() {
    var _ref, _ref1;
    return (_ref = (_ref1 = window.performance) != null ? typeof _ref1.now === "function" ? _ref1.now() : void 0 : void 0) != null ? _ref : +(new Date);
  };

  round = function(val, precision) {
    if (precision == null) {
      precision = 0;
    }
    return val;
  };

  fractionalPart = function(val) {};

  _jQueryWrapped = false;

  (wrapJQuery = function() {
    var property, _i, _len, _ref, _results;
    if (_jQueryWrapped) {
      return;
    }
    if (window.jQuery != null) {
      _jQueryWrapped = true;
      _ref = ['html', 'text'];
      _results = [];
      for (_i = 0, _len = _ref.length; _i < _len; _i++) {
        property = _ref[_i];
        _results.push((function(property) {
          var old;
          old = window.jQuery.fn[property];
          return window.jQuery.fn[property] = function(val) {
            var _ref1;
            if ((val == null) || (((_ref1 = this[0]) != null ? _ref1.odometer : void 0) == null)) {
              return old.apply(this, arguments);
            }
            return this[0].odometer.update(val);
          };
        })(property));
      }
      return _results;
    }
  })();

  setTimeout(wrapJQuery, 0);

  TextRoller = (function() {
    function TextRoller(options) {
      var e, k, property, v, _base, _fn, _i, _j, _len, _len1, _ref, _ref1, _ref2, _ref3,
        _this = this;
      this.options = options;
      try {
        this.el = this.options.el;
        if (this.el.odometer != null) {
          return this.el.odometer;
        }
        this.el.odometer = this;
        _ref = TextRoller.options;
        for (v = _i = 0, _len = _ref.length; _i < _len; v = ++_i) {
          k = _ref[v];
          if (this.options[k] == null) {
            this.options[k] = v;
          }
        }
        if ((_base = this.options).duration == null) {
          _base.duration = DURATION;
        }
        this.options.valuesIndex = 0;
        this.options.values = this.cleanArray();
        this.MAX_VALUES = ((this.options.duration / MS_PER_FRAME) / FRAMES_PER_VALUE) | 0;
        this.resetFormat();
        this.value = this.cleanValue((_ref1 = this.options.values[0]) != null ? _ref1 : '');
        this.renderInside();
        this.render();
        try {
          _ref2 = ['HTML', 'Text'];
          _fn = function(property) {
            return Object.defineProperty(_this.el, "inner" + property, {
              get: function() {
                return _this.inside["outer" + property];
              },
              set: function(val) {
                return _this.update(val);
              }
            });
          };
          for (_j = 0, _len1 = _ref2.length; _j < _len1; _j++) {
            property = _ref2[_j];
            _fn(property);
          }
        } catch (_error) {
          e = _error;
          this.watchForMutations();
        }
        setInterval(function() {
          var newVal, _ref3;
          try {
            if ((_ref3 = _this.options.loop) != null ? _ref3 : true) {
              if (_this.options.valuesIndex >= _this.options.values.length - 1) {
                _this.options.valuesIndex = 0;
              } else {
                _this.options.valuesIndex++;
              }
              newVal = _this.options.values[_this.options.valuesIndex];
              return $(_this.el).html(newVal);
            } else {
              if (_this.options.valuesIndex < _this.options.values.length - 1) {
                _this.options.valuesIndex++;
                newVal = _this.options.values[_this.options.valuesIndex];
                return $(_this.el).html(newVal);
              }
            }
          } catch (_error) {
            e = _error;
            return e;
          }
        }, (_ref3 = this.options.delay) != null ? _ref3 : 3000);
      } catch (_error) {}
      this;
    }

    TextRoller.prototype.cleanArray = function() {
      var diff, elt, h, maxLength, str, u, _i, _j, _len, _ref, _ref1;
      maxLength = this.maxLength(this.options.values);
      _ref = this.options.values;
      for (h = _i = 0, _len = _ref.length; _i < _len; h = ++_i) {
        elt = _ref[h];
        str = elt.split("");
        diff = (_ref1 = (maxLength - elt.length) / 2) != null ? _ref1 : 0;
        if (diff > 0) {
          for (u = _j = 1; 1 <= diff ? _j <= diff : _j >= diff; u = 1 <= diff ? ++_j : --_j) {
            if (this.options.align === "left") {
              str.push("  ");
            } else if (this.options.align === "right") {
              str.unshift("  ");
            } else {
              str.push(" ");
              str.unshift(" ");
            }
          }
        }
        this.options.values[h] = str.join('');
      }
      return this.options.values;
    };

    TextRoller.prototype.maxLength = function(arr) {
      var elt, max, _i, _len;
      max = 0;
      for (_i = 0, _len = arr.length; _i < _len; _i++) {
        elt = arr[_i];
        if (elt.length > max) {
          max = elt.length;
        }
      }
      return max;
    };

    TextRoller.prototype.renderInside = function() {
      this.inside = document.createElement('div');
      this.inside.className = 'odometer-inside';
      this.el.innerHTML = '';
      return this.el.appendChild(this.inside);
    };

    TextRoller.prototype.watchForMutations = function() {
      var e,
        _this = this;
      if (MutationObserver == null) {
        return;
      }
      try {
        if (this.observer == null) {
          this.observer = new MutationObserver(function(mutations) {
            var newVal;
            newVal = _this.el.innerText;
            _this.renderInside();
            _this.render(_this.value);
            return _this.update(newVal);
          });
        }
        this.watchMutations = true;
        return this.startWatchingMutations();
      } catch (_error) {
        e = _error;
      }
    };

    TextRoller.prototype.startWatchingMutations = function() {
      if (this.watchMutations) {
        return this.observer.observe(this.el, {
          childList: true
        });
      }
    };

    TextRoller.prototype.stopWatchingMutations = function() {
      var _ref;
      return (_ref = this.observer) != null ? _ref.disconnect() : void 0;
    };

    TextRoller.prototype.intToChar = function(val) {
      val = String.fromCharCode(val + ALPHA_MIN);
      return val;
    };

    TextRoller.prototype.cleanValue = function(val) {
      var char;
      if (typeof val === 'string') {
        val = val.split('');
        val = (function() {
          var _i, _len, _results;
          _results = [];
          for (_i = 0, _len = val.length; _i < _len; _i++) {
            char = val[_i];
            _results.push(char.charCodeAt(0) - ALPHA_MIN);
          }
          return _results;
        })();
      } else if (typeof val === 'object') {
        val = (function() {
          var _i, _len, _results;
          _results = [];
          for (_i = 0, _len = val.length; _i < _len; _i++) {
            char = val[_i];
            _results.push(char.charCodeAt(0) - ALPHA_MIN);
          }
          return _results;
        })();
      }
      return val;
    };

    TextRoller.prototype.bindTransitionEnd = function() {
      var event, renderEnqueued, _i, _len, _ref, _results,
        _this = this;
      if (this.transitionEndBound) {
        return;
      }
      this.transitionEndBound = true;
      renderEnqueued = false;
      _ref = TRANSITION_END_EVENTS.split(' ');
      _results = [];
      for (_i = 0, _len = _ref.length; _i < _len; _i++) {
        event = _ref[_i];
        _results.push(this.el.addEventListener(event, function() {
          if (renderEnqueued) {
            return true;
          }
          renderEnqueued = true;
          setTimeout(function() {
            _this.render();
            return renderEnqueued = false;
          }, 0);
          return true;
        }, false));
      }
      return _results;
    };

    TextRoller.prototype.resetFormat = function() {
      var format, fractional, parsed, precision, radix, repeating, _ref, _ref1;
      format = (_ref = this.options.format) != null ? _ref : DIGIT_FORMAT;
      format || (format = 'd');
      parsed = FORMAT_PARSER.exec(format);
      if (!parsed) {
        throw new Error("TextRoller: Unparsable digit format");
      }
      _ref1 = parsed.slice(1, 4), repeating = _ref1[0], radix = _ref1[1], fractional = _ref1[2];
      precision = (fractional != null ? fractional.length : void 0) || 0;
      return this.format = {
        repeating: repeating,
        radix: radix,
        precision: precision
      };
    };

    TextRoller.prototype.render = function(value) {
      var classes, cls, digit, match, newClasses, theme, wholePart, _i, _j, _len, _len1, _ref;
      if (value == null) {
        value = this.value;
      }
      this.stopWatchingMutations();
      this.resetFormat();
      this.inside.innerHTML = '';
      theme = this.options.theme;
      classes = this.el.className.split(' ');
      newClasses = [];
      for (_i = 0, _len = classes.length; _i < _len; _i++) {
        cls = classes[_i];
        if (!cls.length) {
          continue;
        }
        if (match = /^odometer-theme-(.+)$/.exec(cls)) {
          theme = match[1];
          continue;
        }
        if (/^odometer(-|$)/.test(cls)) {
          continue;
        }
        newClasses.push(cls);
      }
      newClasses.push('odometer');
      if (!TRANSITION_SUPPORT) {
        newClasses.push('odometer-no-transitions');
      }
      if (theme) {
        newClasses.push("odometer-theme-" + theme);
      } else {
        newClasses.push("odometer-auto-theme");
      }
      this.el.className = newClasses.join(' ');
      this.ribbons = {};
      this.digits = [];
      wholePart = !this.format.precision || !fractionalPart(value) || false;
      _ref = value.reverse();
      for (_j = 0, _len1 = _ref.length; _j < _len1; _j++) {
        digit = _ref[_j];
        if (this.intToChar(digit === this.format.radix)) {
          wholePart = true;
        }
        this.addDigit(digit, wholePart);
      }
      return this.startWatchingMutations();
    };

    TextRoller.prototype.update = function(newValue) {
      var _this = this;
      newValue = this.cleanValue(newValue);
      if (newValue === this.value) {
        return;
      }
      if (newValue > this.value) {
        this.el.className += ' odometer-animating-up';
      } else {
        this.el.className += ' odometer-animating-down';
      }
      this.stopWatchingMutations();
      this.animate(newValue);
      this.startWatchingMutations();
      setTimeout(function() {
        _this.el.offsetHeight;
        return _this.el.className += ' odometer-animating';
      }, 0);
      return this.value = newValue;
    };

    TextRoller.prototype.renderDigit = function() {
      return createFromHTML(DIGIT_HTML);
    };

    TextRoller.prototype.insertDigit = function(digit, before) {
      if (before != null) {
        return this.inside.insertBefore(digit, before);
      } else if (!this.inside.children.length) {
        return this.inside.appendChild(digit);
      } else {
        return this.inside.insertBefore(digit, this.inside.children[0]);
      }
    };

    TextRoller.prototype.addSpacer = function(char, before, extraClasses) {
      var spacer;
      spacer = createFromHTML(FORMAT_MARK_HTML);
      spacer.innerHTML = char;
      if (extraClasses) {
        spacer.className += " " + extraClasses;
      }
      return this.insertDigit(spacer, before);
    };

    TextRoller.prototype.addDigit = function(value, repeating) {
      var char, digit, resetted;
      if (repeating == null) {
        repeating = true;
      }
      if (value === '-') {
        return this.addSpacer(value, null, 'odometer-negation-mark');
      }
      if (value === this.format.radix) {
        return this.addSpacer(value, null, 'odometer-radix-mark');
      }
      if (repeating) {
        resetted = false;
        while (true) {
          if (!this.format.repeating.length) {
            if (resetted) {
              throw new Error("Bad odometer format without digits");
            }
            this.resetFormat();
            resetted = true;
          }
          char = this.format.repeating[this.format.repeating.length - 1];
          this.format.repeating = this.format.repeating.substring(0, this.format.repeating.length - 1);
          if (char === 'd') {
            break;
          }
          this.addSpacer(char);
        }
      }
      digit = this.renderDigit();
      digit.querySelector('.odometer-value').innerHTML = this.intToChar(value);
      this.digits.push(digit);
      return this.insertDigit(digit);
    };

    TextRoller.prototype.animate = function(newValue) {
      if (!TRANSITION_SUPPORT || this.options.animation === 'count') {
        return this.animateCount(newValue);
      } else {
        return this.animateSlide(newValue);
      }
    };

    TextRoller.prototype.valDiff = function(newValue, oldValue) {
      var diffTab, finalSize, i, _i, _ref;
      diffTab = [];
      finalSize = Math.max(oldValue.length, newValue.length);
      for (i = _i = 0, _ref = finalSize - 1; 0 <= _ref ? _i <= _ref : _i >= _ref; i = 0 <= _ref ? ++_i : --_i) {
        diffTab[i] = (oldValue[i] || 0) - (newValue[i] || 0);
      }
      return diffTab;
    };

    TextRoller.prototype.noChanges = function(diff) {
      var i, _i, _len;
      for (_i = 0, _len = diff.length; _i < _len; _i++) {
        i = diff[_i];
        if (i !== false) {
          return true;
        }
      }
      return false;
    };

    TextRoller.prototype.animateCount = function(newValue) {
      var cur, diff, last, start, tick,
        _this = this;
      if (!(diff = +newValue - this.value)) {
        return;
      }
      start = last = now();
      cur = this.value;
      return (tick = function() {
        var delta, dist, fraction;
        if ((now() - start) > _this.options.duration) {
          _this.value = newValue;
          _this.render();
          return;
        }
        delta = now() - last;
        if (delta > COUNT_MS_PER_FRAME) {
          last = now();
          fraction = delta / _this.options.duration;
          dist = diff * fraction;
          cur += dist;
          _this.render(Math.round(cur));
        }
        if (requestAnimationFrame != null) {
          return requestAnimationFrame(tick);
        } else {
          return setTimeout(tick, COUNT_MS_PER_FRAME);
        }
      })();
    };

    TextRoller.prototype.getDigitCount = function() {
      var finalSize, i, max, value, values, _i, _len;
      values = 1 <= arguments.length ? __slice.call(arguments, 0) : [];
      finalSize = 0;
      for (i = _i = 0, _len = values.length; _i < _len; i = ++_i) {
        value = values[i];
        if (value.length > finalSize) {
          finalSize = value.length;
        }
        values[i] = Math.abs(value);
      }
      max = Math.max.apply(Math, values);
      Math.ceil(Math.log(max + 1) / Math.log(10));
      return finalSize;
    };

    TextRoller.prototype.getFractionalDigitCount = function() {
      var i, parser, parts, value, values, _i, _len;
      values = 1 <= arguments.length ? __slice.call(arguments, 0) : [];
      parser = /^\d*\.(\d*?)0*$/;
      for (i = _i = 0, _len = values.length; _i < _len; i = ++_i) {
        value = values[i];
        values[i] = value.toString();
        parts = parser.exec(values[i]);
        if (parts == null) {
          values[i] = 0;
        } else {
          values[i] = parts[1].length;
        }
      }
      return Math.max.apply(Math, values);
    };

    TextRoller.prototype.resetDigits = function() {
      this.digits = [];
      this.ribbons = [];
      this.inside.innerHTML = '';
      return this.resetFormat();
    };

    TextRoller.prototype.animateSlide = function(newValue) {
      var boosted, cur, diff, digitCount, digits, dist, end, fractionalCount, frame, frames, i, incr, j, mark, nullArray, numEl, oldValue, start, tr, _base, _i, _j, _k, _l, _len, _len1, _len2, _m, _n, _ref, _ref1, _ref2, _results;
      oldValue = this.value;
      fractionalCount = 0;
      if (fractionalCount) {
        newValue = newValue * Math.pow(10, fractionalCount);
        oldValue = oldValue * Math.pow(10, fractionalCount);
      }
      diff = this.valDiff(newValue, this.value);
      if (!this.noChanges(diff)) {
        return;
      }
      this.bindTransitionEnd();
      digitCount = this.getDigitCount(oldValue, newValue);
      digits = [];
      boosted = 0;
      for (i = _i = _ref = digitCount - 1; _ref <= 0 ? _i <= 0 : _i >= 0; i = _ref <= 0 ? ++_i : --_i) {
        start = Math.floor(oldValue[i]);
        end = Math.floor(newValue[(digitCount - 1) - i]);
        dist = end - start;
        if (Math.abs(dist) > this.MAX_VALUES) {
          frames = [];
          incr = dist / (this.MAX_VALUES + this.MAX_VALUES * boosted * DIGIT_SPEEDBOOST);
          cur = start;
          while ((dist > 0 && cur < end) || (dist < 0 && cur > end)) {
            frames.push(Math.round(cur));
            cur += incr;
          }
          if (frames[frames.length - 1] !== end) {
            frames.push(end);
          }
          boosted++;
        } else {
          frames = (function() {
            _results = [];
            for (var _j = start; start <= end ? _j <= end : _j >= end; start <= end ? _j++ : _j--){ _results.push(_j); }
            return _results;
          }).apply(this);
        }
        for (i = _k = 0, _len = frames.length; _k < _len; i = ++_k) {
          frame = frames[i];
          frames[i] = Math.abs(frame % ALPHA_COUNT);
        }
        digits.push(frames);
      }
      this.resetDigits();
      _ref1 = digits.reverse();
      for (i = _l = 0, _len1 = _ref1.length; _l < _len1; i = ++_l) {
        frames = _ref1[i];
        if (!this.digits[i]) {
          this.addDigit(' ', false);
        }
        if ((_base = this.ribbons)[i] == null) {
          _base[i] = this.digits[i].querySelector('.odometer-ribbon-inner');
        }
        this.ribbons[i].innerHTML = '';
        nullArray = [];
        for (tr = _m = 0, _ref2 = digitCount - 1; 0 <= _ref2 ? _m <= _ref2 : _m >= _ref2; tr = 0 <= _ref2 ? ++_m : --_m) {
          nullArray[tr] = 0;
        }
        if (diff > nullArray) {
          frames = frames.reverse();
        }
        for (j = _n = 0, _len2 = frames.length; _n < _len2; j = ++_n) {
          frame = frames[j];
          numEl = document.createElement('div');
          numEl.className = 'odometer-value';
          numEl.innerHTML = this.intToChar(frame);
          this.ribbons[i].appendChild(numEl);
          if (j === frames.length - 1) {
            numEl.className += ' odometer-last-value';
          }
          if (j === 0) {
            numEl.className += ' odometer-first-value';
          }
        }
      }
      mark = this.inside.querySelector('.odometer-radix-mark');
      if (mark != null) {
        mark.parent.removeChild(mark);
      }
      if (fractionalCount) {
        return this.addSpacer(this.format.radix, this.digits[fractionalCount - 1], 'odometer-radix-mark');
      }
    };

    return TextRoller;

  })();

  TextRoller.options = (_ref = window.odometerOptions) != null ? _ref : {};

  setTimeout(function() {
    var k, v, _base, _ref1, _results;
    if (window.odometerOptions) {
      _ref1 = window.odometerOptions;
      _results = [];
      for (k in _ref1) {
        v = _ref1[k];
        _results.push((_base = TextRoller.options)[k] != null ? (_base = TextRoller.options)[k] : _base[k] = v);
      }
      return _results;
    }
  }, 0);

  TextRoller.init = function() {
    var el, elements, _i, _len, _results;
    if (document.querySelectorAll == null) {
      return;
    }
    elements = document.querySelectorAll(TextRoller.options.selector || '.odometer');
    _results = [];
    for (_i = 0, _len = elements.length; _i < _len; _i++) {
      el = elements[_i];
      _results.push(el.odometer = new TextRoller({
        el: el,
        values: [el.innerText, "coucou", "bonjour", "salut"]
      }));
    }
    return _results;
  };

  if ((((_ref1 = document.documentElement) != null ? _ref1.doScroll : void 0) != null) && (document.createEventObject != null)) {
    _old = document.onreadystatechange;
    document.onreadystatechange = function() {
      if (document.readyState === 'complete' && TextRoller.options.auto !== false) {
        TextRoller.init();
      }
      return _old != null ? _old.apply(this, arguments) : void 0;
    };
  } else {
    document.addEventListener('DOMContentLoaded', function() {
      if (TextRoller.options.auto !== false) {
        return TextRoller.init();
      }
    }, false);
  }

  window.TextRoller = TextRoller;

}).call(this);

$(document).on('click', '.toggle', function(){
    $($(this).attr('data-target')).toggleClass('hidden')
})
function track(key, val)
{
    $.post('/track/'+key+'/'+val);//easy peasy
}
$(document).on('click', '.track', function(){
    var key = $(this).attr('data-track-key');
    var val = $(this).attr('data-track-val');
    track(key, val);
});
/**
 * triggers transition once when element has scrolled on to the viewport
 */
function transitionOnShow(){
    if( $('.transition-on-show').length ){
        $(window).scroll(function(){
            $('.transition-on-show').each(function(){
                var trigger = $(this).position().top;
                var view = $(window).scrollTop() + ($(window).height() *.8);
                if( trigger < view && !$('#logos').hasClass('transitioned')){
                    $(this).addClass('transitioned');
                    $(this).removeClass('transition-on-show');
                    $(this).attr('style', $(this).attr('data-transition-to'));
                }
            });
        });
    }
}

function validateVisible(){
    var valid = true;
    $('.bug-required').removeClass('bug-required');
    $('.required').filter(':visible').each(function () {
        if ($(this).val() == '' ){
            $(this).addClass('bug-required');
            if(valid) {
                valid = false;
                $(this).tooltip('show');
                $(this).focus();
            }
        }
    });
    $('input[type=checkbox].must-check:visible').each(function () {
        //required checkboxes
        if(valid && !$(this).is(':checked')) {
            valid = false;
            if(!$(this).is(':checked')){
                $(this).tooltip('show');
            }
        }
    });
    if($('input.bug-required:visible').length != 0){
        valid = false;
    }
    return valid;
}
function validateVisibleBindings(){
    $(document).on('keyup, change', '.bug-required', function(){
        if($(this).val() != ''){
            $(this).removeClass('bug-required');
        }
    });
    $(document).on('keyup','.password-a', function(){
        if($(this).val().length >= 6){
            reqGood(this);
        }else{
            reqBad(this);
        }
        var partner =  $(this).parents('form').find('.password-b');
        if(partner.val().length > 0){
            partner.trigger('keyup');
        }
    });
    $(document).on('keyup', '.password-b', function(){
        if($(this).val() == $(this).parents('form').find('.password-a').val() && $(this).val().length > 6){
            reqGood(this);
        }else{
            reqBad(this);
        }
    });
    $(document).on('click', '.validate-visible', function(){
        validateVisible();
    });
}

function reqGood(target){
    $(target).addClass('confirm-required');
    $(target).removeClass('bug-required');
}
function reqBad(target){
    $(target).addClass('bug-required');
    $(target).removeClass('confirm-required');
}



function validate() {
    $(document).on('click', '.hs-button, .getBtn', function () {
        $(this).parents('form').find('*:input[required=required], .required').each(function () {
            checkInput(this);
        });
        $(this).parents('form').find('.invalid').focus();
    });
    $(document).on('change', '.bug-required', function(){
        checkInput(this);
    });
    $(document).on('keyup, change', '.invalid', function () {
        var input = this;
        setTimeout(function () {
            checkInput(input);
        }, 100);
    });
    //$(document).on('keyup', '.validate', function () {
    //    var input = this;
    //    setTimeout(function () {
    //        checkInput(input);
    //    }, 100);
    //});
}

function checkInput(input) {
    var val = $(input).val();
    if (val == '') {
        $(input).addClass('incomplete');
        //$(input).removeClass('valid');
    } else if ($(input).attr('type') == 'email') {
        if (val.indexOf('@') < 1 && val.indexOf('.') < 1) {
            $(input).addClass('incomplete');
            //$(input).removeClass('valid');
        }
    } else {
        $(input).removeClass('incomplete');
        //$(input).addClass('valid');
    }
}
function videoTabs(){
    $(document).on('click', '.video-tab', function(){
        $('.video-tab.selected').removeClass('selected');
        $(this).addClass('selected');
        $('.video-content').removeClass('selected');
        $('.video-content').filter(':eq(' + $(this).index() + ')').addClass('selected');
    });
}
/**
 * @class youtubeAPI
 *  This script will pull all of the lojistic videos and add them to the page dynamically
 *  @author @jppope | jonpaul@lojistic.com
 *  @dependencies fancybox
 *
 *
 *  #globals
 *  variables / contstants / references
 */
var url = "/videos/index"


/**
 * @method init
 * This function initializes all of the scripts and keeps functions out of the global scope
 */
function initVideos(){
    $(document).ready(function() {
        fancybox();
        apiCall();
        odometerInstance();
    });
}

/**
 * @method fancybox
 * fancybox lightbox ... keeping it out of the global scope
 */
function fancybox() {
    $(".fancybox").fancybox({
        loop : false,
        afterLoad: function() {
            $('#youtube_player')[0].contentWindow.postMessage(
                '{"event":"command","func":"' + 'stopVideo' + '","args":""}', '*'
            );
        }
    });
}

/**
 * @method apiCall
 * function wrapper for getting call that gets json
 */
function apiCall(){
    $.getJSON(url, function( data ) {
        //note: path to videos data.items[i].snippet.resourceId.videoId;
        var videoItems = data.items;
        var videoAndDesc = [];
        _.each(videoItems, function(item){
            var vid =  {};
            vid.video = "https://www.youtube.com/embed/"
            vid.video += item.snippet.resourceId.videoId;
            vid.video += "?enablejsapi=1&version=3&playerapiid=ytplayer&rel=0&showinfo=0";
            vid.text = item.snippet.title;
            vid.img = item.snippet.thumbnails.medium.url;
            videoAndDesc.push(vid);
        });
        var fourVideos = _.sample(videoAndDesc,5);
        vueVideos(fourVideos);
        videoGallery(videoAndDesc);
    });
}

/**
 * @method vueSidebarVideos
 * this method constructs the initial main video on the lojistic.com/videos page using vuejs
 * @params arr
 */
function vueVideos(arr){
    var main = arr[0];
    arr.shift();
    var three = arr;
    var videoSample = new Vue({
        el: '#logistic-video',
        data: {
            main: {},
            first: main,
            videos: three,
            images: three
        },
        methods: {
            setMainVideo: function ($index){
                this.$data.first = this.$data.videos[$index];
                }
            }
        }
    )
}

/**
 * @method videoGallery
 * this method constructs the gallery of videos using vuejs
 * @params vidsArr
 */
function videoGallery(vidsArr){
    var videoSample = new Vue({
            el: '#videoGallery',
            data: {
                main: {},
                items: vidsArr,
                images: vidsArr
            }
        }
    )
}

/**
 *  @method odometerInstance
 *  this method initiates an instance of odometer js
 */
function odometerInstance() {
    var elt = document.getElementById("roller");
    var texts = ["#whereInTheWorldIsParcel","#LateShipmentsSuck"];
    elt.textroller  = new TextRoller({
        el: elt,
        values: texts,    // an array of texts.     default : [el.innerHtml]
        align: "left",    // right, left or middle. default : middle
        delay: 1500,      // in milliseconds,       default : 5000
        loop: false       // at the end, restart.   default : true
    });
}








//# sourceMappingURL=all.js.map
