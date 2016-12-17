/**
 * prevents scrolling on maps because we use big ass maps
 * and maps zoom on scroll
 */
$(document).on('click', '.map', function(){
    $(this).find('iframe').css('pointer-events', 'auto'); //events are disabled (via css, which is weird) - clicking re-enables events on map iframes.
});