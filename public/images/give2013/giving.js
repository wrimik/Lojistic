$(document).ready(function(){
   $('h2').each(function(){
      $('<span></span>').appendTo(this); 
      $('<span></span>').prependTo(this); 
   });
});
$(document).on('click' ,'#cc', function(){
   $('.bank').hide();
   $('.card').show();
   $('#form').css('background', '#444444');
   $('#toggle .selected').removeClass('selected');
   $(this).addClass('.selected');
   $('#p_method').val('credit card');
});
$(document).on('click' ,'#account', function(){
   $('.bank').show();
   $('.card').hide();
   $('#form').css('background', '#999999');
   $('#toggle .selected').removeClass('selected');
   $(this).addClass('.selected');
   $('#p_method').val('bank account');
});

$(document).on('submit', 'form', function(e){
    $('.required').each(function(){
       if($(this).is(':visible') && $(this).val() == ''){
           alert('It looks like you left something blank');
           $(this).focus();
           e.preventDefault();
           return false;
       } 
    });
});
$(document).on('click', '#give_now', function(){
    $(document).scrollTo(2300, 700);
});


// set the date we're counting down to
var target_date = new Date("Dec 16, 2013 5:00 pm").getTime();
 
// variables for time units
var days, hours, minutes, seconds;
 
// get tag element
var countdown = document.getElementById("countdown");
 
// update the tag with id "countdown" every 1 second
setInterval(function () {
 
    // find the amount of "seconds" between now and target
    var current_date = new Date().getTime();
    var seconds_left = (target_date - current_date) / 1000;
 
    // do some time calculations
    days = parseInt(seconds_left / 86400);
    seconds_left = seconds_left % 86400;
     
    hours = parseInt(seconds_left / 3600);
    seconds_left = seconds_left % 3600;
     
    minutes = parseInt(seconds_left / 60);
    seconds = parseInt(seconds_left % 60);
     
     if(hours < 10){
         hours = '0'+hours;
     }
     if(minutes < 10){
         minutes = '0'+minutes;
     }
     if(seconds < 10){
         seconds = '0'+seconds;
     }
    // format countdown string + set tag value
    $('#time').text(hours + ":"+ minutes + ":" + seconds);
}, 1000);