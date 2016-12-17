function scrollTo() {
    $(document).on('click', '.scrollTo', function () {
        var target = $(this).attr('data-target');
        var pos = $(target).offset().top - 120;
        //if ($('html').scrollTop() < pos) {
        $('html, body').animate({
            scrollTop: pos
        }, 700);
        //}
    });
}