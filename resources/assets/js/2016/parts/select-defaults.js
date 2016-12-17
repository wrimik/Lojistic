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