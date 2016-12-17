function track(key, val)
{
    $.post('/track/'+key+'/'+val);//easy peasy
}
$(document).on('click', '.track', function(){
    var key = $(this).attr('data-track-key');
    var val = $(this).attr('data-track-val');
    track(key, val);
});