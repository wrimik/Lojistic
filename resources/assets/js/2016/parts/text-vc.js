function centerTextVertically(){
    $('.text-vc').each(function(){
        var parent = $(this).parent().height();
        var self   = $(this).height();
        $(this).css({
            position : 'relative',
            top: ((parent - self) / 2) + 'px',
            opacity: 1
        });
    });
}
$(window).resize(function () {
    centerTextVertically();
});
