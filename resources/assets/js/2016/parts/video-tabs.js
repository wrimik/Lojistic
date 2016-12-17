function videoTabs(){
    $(document).on('click', '.video-tab', function(){
        $('.video-tab.selected').removeClass('selected');
        $(this).addClass('selected');
        $('.video-content').removeClass('selected');
        $('.video-content').filter(':eq(' + $(this).index() + ')').addClass('selected');
    });
}