
function defaultValue(target, value) {
    var i = setInterval(function () {
        if (jQuery(target).length > 0) {
            jQuery(target).val(value);
            clearInterval(i);
        }
    }, 1000);
}