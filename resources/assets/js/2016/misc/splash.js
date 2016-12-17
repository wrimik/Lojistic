////http://blog.teamtreehouse.com/building-custom-controls-for-html5-videos
//// max-height
$(window).resize(function(){
    services();
    mobOnStage();
});
$(function(){
    $(window).resize();
});
//
///*
//    fires hover event for mobile users when the
//    div appears on stage
// */
function mobOnStage(){
    $(window).scroll(function(){
        if($(window).width() < 648){
            var t = $(window).scrollTop() + ($(window).height() *.6);
            $(window);
            $('.mob-on-stage').each(function(){
                if($(this).position().top < t){
                    $(this).addClass('on-stage');
                }else{
                    $(this).removeClass('on-stage');
                }
            });
        }
    });
}
function services(){
    var w = $('.service > div').width();
    if(w > 480){
        w = 480;
    }
    $('.service > div').css('height', w);
}
//
//$(document).ready(function () {
//    // Video
//    var video = document.getElementById("video");
//
//    // Buttons
//    var playButton = document.getElementById("play-pause");
//    var muteButton = document.getElementById("mute");
//    var fullScreenButton = document.getElementById("full-screen");
//
//    // Sliders
//    var seekBar  = document.getElementById("seek-bar");
////    var volumeBar = document.getElementById("volume-bar");
//
//    video.play();
//    video.muted = true;
//
//    $(window).resize();
//
//    setTimeout(function(){
//        video.play();
//    }, 1000);
//
//// Event listener for the play/pause button
////    playButton.addEventListener("click", function () {
////        if (video.paused == true) {
////            // Play the video
////            video.play();
////
////            // Update the button text to 'Pause'
////            playButton.innerHTML = "Pause";
////        } else {
////            // Pause the video
////            video.pause();
////
////            // Update the button text to 'Play'
////            playButton.innerHTML = "Play";
////        }
////    });
//// Event listener for the volume bar
////    volumeBar.addEventListener("change", function () {
////        // Update the video volume
////        video.volume = volumeBar.value;
////    });
//
//// Event listener for the mute button
//    muteButton.addEventListener("click", function () {
//        if (video.muted == false) {
//            // Mute the video
//            video.muted = true;
//            // Update the button text
//            $(muteButton).addClass('muted');
//        } else {
//            // Unmute the video
//            video.muted = false;
//            $(muteButton).removeClass('muted');
//            // Update the button text
//        }
//
//    });
//    // Event listener for the full-screen button
//    fullScreenButton.addEventListener("click", function() {
//      if (video.requestFullscreen) {
//        video.requestFullscreen();
//      } else if (video.mozRequestFullScreen) {
//        video.mozRequestFullScreen(); // Firefox
//      } else if (video.webkitRequestFullscreen) {
//        video.webkitRequestFullscreen(); // Chrome and Safari
//      }
//    });
//});
//$(document).on('click', '#toggle-caption', function(){
//    $('#video-caption').hide();
//});
//
//
////sliders
//$(document).ready(function () {
////    slideHint();
////    $('.s-a').resizable({
////        'handles': 'e'
////    });
//    setTimeout(function () {
//        addHandles();
//        sliderSize();
//    }, 1500);
//    $(window).resize(function (e) {
//        if(typeof(e.originalEvent) != 'undefined'){
//            if(typeof(e.originalEvent.target) != 'undefined'){
//                if(e.originalEvent.target == window){
//                    sliderSize();
//                }
//            }
//        }
//    });
//
//    $(window).resize();
//});
//
////function slideHint(){
////    $(window).scroll(function(){
////        var t = $(window).scrollTop();
////        var l = $('#logos').position().top - 100;
////
////        if( t > l && !$('#logos').hasClass('hinted')){
////            $('#logos').addClass('hinted');
////            slideHintAnimate('95%');
////            setTimeout(function(){
////                slideHintAnimate('5%');
////            }, 600);
////            setTimeout(function(){
////                slideHintAnimate('50%');
////            },1200);
////        }
////    });
////}
//function slideHint(){
//    $(window).scroll(function(){
//        var t = $(window).scrollTop();
//        var l = $('#logos').position().top - 300;
//
//        if( t > l && !$('#logos').hasClass('hinted')){
//            $('#logos').addClass('hinted');
//            slideHintAnimate('95%');
//            setTimeout(function(){
//                slideHintAnimate('5%');
//            }, 1100);
//            setTimeout(function(){
//                slideHintAnimate('50%');
//            },2500);
//        }
//    });
//}
//function slideHintAnimate(percent){
//    $('.s-a').animate({'width':percent}, 300);
//}
//
//
//function addHandles() {
//    var html = $('#slider-handle-proto').html();
//    $('.slider .ui-resizable-e').each(function () {
//        $(html).appendTo(this);
//    });
//}
//
//function sliderSize() {
//    $('.slider').each(function () {
//        var w = $(this).width();
//        var ratio = 2.05;
//        if($(this).attr('id') != 'logos'){
//            ratio = 1.45;
//        }
//        var h = w / ratio; // force 1:2.05 ratio because designers...
//        $(this).css('height', h + 'px');
//
//        $(this).find('.s-a, .s-b').each(function () {
//            $(this).css({
//                'background-size': w,
//                'height' : h + 'px'
//            });
//        });
//
//
////        $(this).find('.slider-handle').each(function () {
////            $(this).css('margin-top', ((h / 2) - 42) + 'px');  // make handle vertically centered
////        });
//
//    });
//
//    $('.s-a').css('width', '50%');
//}
//
///*!
// * jQuery UI Touch Punch 0.2.3
// *
// * Copyright 2011–2014, Dave Furfero
// * Dual licensed under the MIT or GPL Version 2 licenses.
// *
// * Depends:
// *  jquery.ui.widget.js
// *  jquery.ui.mouse.js
// */
//!function(a){function f(a,b){if(!(a.originalEvent.touches.length>1)){a.preventDefault();var c=a.originalEvent.changedTouches[0],d=document.createEvent("MouseEvents");d.initMouseEvent(b,!0,!0,window,1,c.screenX,c.screenY,c.clientX,c.clientY,!1,!1,!1,!1,0,null),a.target.dispatchEvent(d)}}if(a.support.touch="ontouchend"in document,a.support.touch){var e,b=a.ui.mouse.prototype,c=b._mouseInit,d=b._mouseDestroy;b._touchStart=function(a){var b=this;!e&&b._mouseCapture(a.originalEvent.changedTouches[0])&&(e=!0,b._touchMoved=!1,f(a,"mouseover"),f(a,"mousemove"),f(a,"mousedown"))},b._touchMove=function(a){e&&(this._touchMoved=!0,f(a,"mousemove"))},b._touchEnd=function(a){e&&(f(a,"mouseup"),f(a,"mouseout"),this._touchMoved||f(a,"click"),e=!1)},b._mouseInit=function(){var b=this;b.element.bind({touchstart:a.proxy(b,"_touchStart"),touchmove:a.proxy(b,"_touchMove"),touchend:a.proxy(b,"_touchEnd")}),c.call(b)},b._mouseDestroy=function(){var b=this;b.element.unbind({touchstart:a.proxy(b,"_touchStart"),touchmove:a.proxy(b,"_touchMove"),touchend:a.proxy(b,"_touchEnd")}),d.call(b)}}}(jQuery);