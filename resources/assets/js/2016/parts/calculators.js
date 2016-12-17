
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