function download() {
    $('a.download').each(function () {
        window.open($(this).attr('href'));
    });
}