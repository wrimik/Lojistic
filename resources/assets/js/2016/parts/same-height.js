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