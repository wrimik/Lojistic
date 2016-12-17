$(document).ready(function () {

    //Input Masks For
    initDollarAndPercentInputMasks();

    //Section Toggles
    initDataSectionToggle();

    //.ajax For ajax forms
    initAjaxForms();

    //Toggle elements based on this elements state
    initDataDisableToggle();

    //Advanced Discounts
    $('input[id*=advanced-discounts]')
        .change(useAdvancedDiscountOptions);

    $('select[id*=carrier]')
        .change(updateDiscountLabels);

    //Dynamic dropdowns
    $('.dynamic-selector').change(updateSelectors);
});

function initDataDisableToggle() {
    $('[data-disable-toggle]').change(function () {
        //Can pipe multiple dependencies
        var val = $(this).attr('data-disable-toggle');
        var inputs = val.indexOf('|') != -1 ? val.split('|') : [val];
        //Make sure we have a blank input
        if ($(this).val() != null && $(this).val() != 'undefined' && $(this).val() != '' && $(this).val() != 0) {
            for (var i in inputs) {
                $(inputs[i]).attr('disabled', false);
            }
        } else {
            for (var i in inputs) {
                $(inputs[i]).attr('disabled', true);
            }
        }
    });
}

//If we have .dollars or .percentage it will init input masks
function initDollarAndPercentInputMasks() {
    if($('.dollars').length > 0 || $('.percentage').length > 0) {
        $('.dollars').inputmask('Regex', {regex: "^[0-9]*\\.[0-9]{1,2}", rightAlign: true});
        $('.percentage').inputmask({mask: "9{1,2}[\\.9{1,2}]", greedy: false, placeholder: "", rightAlign: true});
    }
}

//Allows us to slidetoggle a section based on the change of input
function initDataSectionToggle() {
    $('[data-section-toggle]').change(function (e) {
        e.preventDefault();
        e.stopPropagation();
        var toggleElement = $(this).attr('data-section-toggle');
        $(toggleElement).slideToggle();
    });
}

//double check for required on top of browser reqs
function verifyRequiredFields(form) {
    var fieldsAreValid = true;
    $.each(form.find('[required]'), function () {
        var val = $(this).val();
        if (fieldsAreValid == true) {
            if (val == '' || val == null || val == 'undefined' || val == 0) {
                fieldsAreValid = false;
            }
        }
    });
    return fieldsAreValid;
}

// Allows us to add .ajax to a form and update html area with data-success-html tag
// Can scroll if data-scroll-target is added
function initAjaxForms() {
    $('form.ajax').submit(function (e) {
        e.preventDefault();
        //See if we have all fields that are required
        var post = verifyRequiredFields($(this));
        //See if we are scrolling anywhere
        if (typeof $(this).attr('data-scroll-target') != null) {
            if (post) {
                var target = $(this).attr('data-scroll-target');
                $('html, body').animate({
                    scrollTop: $(target).offset().top
                }, 1000);
            }
        }
        //If we have all fields submit
        if (post) {
            var url = $(this).attr('action');
            var successHtml = $(this).attr('data-success-html');
            $.ajax({
                method: "POST",
                url: url,
                data: $(this).serializeArray(),
                success: function (data) {
                    $(successHtml).html(data);
                }
            });
        } else {
            alert('please fill in all required fields');
        }
    });
}


function updateSelectors(e) {
    var target = $(this).attr('data-target');
    var parent = $(this).attr('data-parent');
    var dir = '/files/';
    var file;

    //Make sure we actually have a value
    if ($(this).val() != 0 && $(this).val() != "" && $(this).val() != null) {

        if (typeof parent != 'undefined') {
            //If we have a parent it will show us the directory
            file = dir + $(parent).val() + '/' + $(this).val() + '.txt';
        } else {
            //If we dont have a parent we are the parent and will show directory
            file = dir + $(this).val() + '/' + $(target).attr('data-load');
        }

        $(target).load(file, function(){
            $(target).trigger('change');
        }).attr('disabled', false);

    } else {
        //Remove Options
        $(target).attr('disabled', true).children().remove();
        //Trigger another change in case we have grandchildren
        $(target).trigger('change');
    }
}

function useAdvancedDiscountOptions() {
    var input = $('#' + $(this).attr('id').replace('advanced-discounts', 'general'));
    var label = $("label[for=" + input.attr('id') + "]");
    var inputAddon = input.next('.input-group-addon');
    var formGroup = input.closest('.form-group');

    label.animate({height: 'toggle'});
    inputAddon.animate({'height': 'toggle'});
    input.animate({height: 'toggle'});


    if ($(this).prop("checked")) {
        formGroup.addClass('form-group-tab');
    } else {
        formGroup.removeClass('form-group-tab');
    }
}

//Change Discount Label
function updateDiscountLabels() {

    $.each($('[id*=discount-label]'), function () {
        var prefix = '#' + $(this).attr('id').replace('discount-label', '');
        var carrier = $(prefix + 'carrier option:selected').text();
        var year = $(prefix + 'year option:selected').text().indexOf('-') > -1 ? $(prefix + 'year option:selected').text() : $(prefix + 'year option:selected').text() + ' - ';
        var type = $(prefix + 'type option:selected').text();
        var discountName = carrier == 'UPS' ? ' Tier Incentive' : ' Earned Discount';
        $(this).text(carrier + ' ' + year + ' ' + type + discountName);
        $('#' + $(this).attr('id').replace('discount', 'weight-break')).text(carrier + ' ' + type);
    });
}
