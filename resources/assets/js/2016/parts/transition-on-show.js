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