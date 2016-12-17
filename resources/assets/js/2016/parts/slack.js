function slackBtns(){
    $(document).on('click', '.slack', function(){
        slack($(this).attr('data-message'));
    });
}
function slack(message, fireLocal){
    if(window.location.href.indexOf('.com') != -1 || fireLocal){
        $.post('/slack', {message: message});
    }
}