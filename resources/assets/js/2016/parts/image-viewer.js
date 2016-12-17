ImageViewer = {
    init: function(){
        $('#image-viewer').addClass('animated');
        $(document).on('click', '.show-image-viewer', function(){
           ImageViewer.show();
        });
        $(document).on('click', '#image-viewer-close', function(){
           ImageViewer.close();
        });
        this.changeImage($('#image-list img:first-child'));
        $(document).on('click', '#image-list img', function(){
           ImageViewer.changeImage($(this));
        });
        this.bindArrowKeys();
    },
    changeImage: function(target){
        var list = $('#image-list');
        if(!target){
            target =  list.find('.current').next('img');
            if(target.length == 0){
                target = list.find('img:first-child');
            }
        }
        list.find('.current').removeClass('current');
        target.addClass('current');
        $('#image-stage img').attr('src', target.attr('src'));
    },
    close: function(){
        $('#image-viewer')
            .removeClass('fadeInDownBig')
            .addClass('fadeOutUpBig');
    },
    show: function(){
        $('#image-viewer')
            .css('display', 'block')
            .addClass('fadeInDownBig')
            .removeClass('fadeOutUpBig');
    },
    bindArrowKeys: function(){
        $(document).keydown(function(e) {
            var list    = $('#image-list');
            var current = list.find('.current');
            switch(e.which) {
                case 27: // escape
                    ImageViewer.close();
                    break;
                case 37: // left
                    var prev    = current.prev('img');
                    if(prev.length == 0){
                        prev = list.find('img:last-child()');
                    }
                    ImageViewer.changeImage(prev);
                    break;
                case 39: // right
                    var next    = current.next('img');
                    if(next.length == 0){
                        next = list.find('img:first-child()');
                    }
                    ImageViewer.changeImage(prev);
                    break;
                default:
                    break;
            }
        });
    }
};
