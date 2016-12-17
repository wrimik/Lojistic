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