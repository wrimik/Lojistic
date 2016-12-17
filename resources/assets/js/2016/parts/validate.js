
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