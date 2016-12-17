function footer(){
    $(document).on("click", '#footer_content div b', function(){
        var parent = $(this).parent('div');
        if(parent.hasClass('active')){
            parent.removeClass('active');
        }else{
            parent.addClass('active');
        }
    });
}