function tabs() {
    $(document).on('click', '.tab-nav li a', function (e) {
        var c = 'current';
        var li = $(this).parent('li');
        var i = li.index();
        $('.' + c).removeClass(c);
        li.addClass(c);
        $('.tab-content > li:eq(' + i + ')').addClass(c);
        e.preventDefault();
        return false;
    });
    $('.tab-nav > li:nth-child(1) a').click();
}