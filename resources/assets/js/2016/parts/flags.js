function flags() {
    $(document).on('click', '.flag-link', function () {
        var href = $(this).find('a').attr('href');
        if (href.length > 0) {
            window.location = href;
        }
    });
}