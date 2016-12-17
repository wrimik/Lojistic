
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
