$(document).on('click', '.toggle', function(){
    $($(this).attr('data-target')).toggleClass('hidden')
})