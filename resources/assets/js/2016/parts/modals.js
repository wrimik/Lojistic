

function bindModals(){
    $(document).on('click', '.modal-btn', function(){
        var title = $(this).attr('data-modal-title');
        var body = $($(this).attr('data-modal-body')).html();
        var footer = $($(this).attr('data-modal-footer')).html();
        modal(title, body, footer, true);
    });
}
function modal(title, body, footer, show){
    var modal = $('#empty-modal');
    modal.find('.modal-title').html(title);
    modal.find('.modal-body').html(body);
    modal.find('.modal-footer').html(footer);
    if(show){
        modal.modal();
    }
    return modal;
}