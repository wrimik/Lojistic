function blogInit(){
    $(window).on('scroll', animatedHeroTitle);
    //$(window).on('scroll', blogScrollBar);
}

/**
 * @method animatedHeroTitle
 * this method adds animation effects to the Hero Image Title
 */
function animatedHeroTitle(){
    var scrollTop = $(window).scrollTop();
    var heroTitleSize = 1 +  scrollTop/8000;
    if (scrollTop <= 550 ){
        $('.hero-image').css({
            'transition': 'all ease-in-out',
            'transform' : 'scale(' + heroTitleSize + ')'
        });
    }
    if (scrollTop <= 183) {
        $('.hero-title').css({
            'opacity' : 1 - scrollTop/183,
            'transition': 'all ease-in-out',
            'transform' : 'scale(' + heroTitleSize/2 + ')',
            'transform': 'translate(0, ' + scrollTop/2 + 'px)'
        });
    }
}

/**
 * @method blogScrollBar
 * this method adds the animation and computes the opacity of the fixed footer
 */
function blogScrollBar(){
    var scrollTop = $(this).scrollTop();
    var marker = {
        top:(document.body.clientHeight/ 10),
        bottom:document.getElementById('footer').offsetTop -1250
    };
    var stickyFooterOpacity = 0;
    if(scrollTop > marker.top){ stickyFooterOpacity = (scrollTop - marker.top) /100;}
    if(scrollTop > marker.bottom){stickyFooterOpacity = 1; stickyFooterOpacity -= (scrollTop - marker.bottom) / 100;}
    $('.scroll-footer').css({'opacity' : stickyFooterOpacity, 'transition': 'all ease-in-out'});
}


