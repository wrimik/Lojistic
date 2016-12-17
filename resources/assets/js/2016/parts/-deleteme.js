//function hsBtnClasses(){
//    var btn = $('.hs-button');
//    btn.attr('class', 'btn btn-primary');
//}
//
///** OLD NAV **/
// function refreshNav() {
//    var w = $('body').outerWidth();
//    var scroll = $(document).scrollTop();
//    if ((scroll > navTopTrigger || w <= 950 ) && !navShrunk) {
//        smallNav();
//    }
//    if ((scroll < navTopTrigger  && w >= 950 ) && navShrunk) {
//        bigNav();
//    }
//}
// function scrollNav() {
//    $(document).scroll(function () {
//        refreshNav();
//    });
//    $(window).resize(function () {
//        refreshNav();
//    });
//
//    $(window).resize();
//    $(document).scroll();
//    $(document).on('click', '#hamburger', function () {
//        var clicked = $(this).hasClass('clicked');
//        var size = $('body').outerWidth();
//        if (clicked) {
//            hideTuckedNav();
//            hideSideNav();
//        } else {
//            if (size <= 950) {
//                showSideNav();
//            } else {
//                showTuckedNav();
//            }
//        }
//    });
//    $(document).on('click', '#sn-overlay', function(){
//        hideSideNav();
//    });
//}
// function showTuckedNav() {
//    $('#hamburger').addClass('clicked');
//    $('#company-nav').animate({'top': '50px'}, 200);
//}
// function hideTuckedNav() {
//    $('#hamburger').removeClass('clicked').css({
//        'background-color' :'transparent'
//    });
//    $('#company-nav').animate({'top': '-17px'}, 200);
//}
// function showSideNav() {
//    $('#hamburger').addClass('clicked');
//    $('#hamburger').css({'background':'#fff'});
//    $('#logo-small').css({'display': 'none'});
//    $('#sn-overlay').css({'display': 'block'});
//    $('#product-nav').css('left',0);
//    $('#sn-overlay').animate({
//        'opacity': 0.7
//    }, 200);
//    $('body').animate({
//        'padding-left': '270px',
//        'overflow': 'hidden'
//    }, 200);
//    $('#side-nav').css({'display': 'block', 'left': '-300px'});
//    $('#side-nav').animate({
//        'left': '0'
//    }, 200);
//}
// function hideSideNav() {
//    $('#hamburger').removeClass('clicked').css({
//        'background-color' :'transparent'
//    });
//    $('#side-nav').animate({
//        'left': '-300px'
//    }, 100, function () {
//        $('#side-nav').css({'display': 'none'});
//    });
//    $('#logo-small').css({'display': 'block'});
//    $('#sn-overlay').animate({'opacity': '0'}, 100, function () {
//        $('#sn-overlay').css({'display': 'none'});
//    });
//    $('body').animate({
//        'padding-left': '0',
//        overflow:'auto'
//    }, 100);
//}
// function smallNav() {
//    navShrunk = true;
//    $('body').addClass('small-nav');
//    $('#header').css('overflow', 'visible');//chrome bugfix
//    $('#header').addClass('scroll-nav');
//    $('#company-nav').addClass('tucked-nav');
//    $('#company-nav').removeClass('untucked-nav');
//    $('#product-links').animate({
//        'right': '6.75%',
//        'width': '59%',
//        'font-size': '12px'
//    }, navAniDur);
//    setTimeout(function () {
//        $('#logo-small').animate({'top': '0'}, navAniDur, function () {
//            $('#product-nav').css('overflow', 'visible');//bug-fix
//        });
//        $('#hamburger').animate({'width': '60px'}, navAniDur, function () {
//            $('#product-nav').css('overflow', 'visible');//bug-fix
//        });
//    }, 75);
//    $('#nav_fmi').html('Freight<br/>Mgmt. <span></span>');
//    $('#nav_parcel').html('Bill<br/>Audit <span></span>');
//}
// function bigNav() {
//    navShrunk = false;
//    $('body').removeClass('small-nav');
//    $('#header').css('overflow', 'visible');//chrome bugfix
//    $('#header').removeClass('scroll-nav');
//    $('#company-nav').removeClass('tucked-nav');
//    $('#company-nav').addClass('untucked-nav');
//    $('#product-links').animate({
//        'width': '100%',
//        'right': '0',
//        'font-size': '14px'
//    }, navAniDur);
//    $('#hamburger').animate({'width': '0'}, navAniDur, function () {
//        $('#product-nav').css('overflow', 'hidden');//bug-fix
//    });
////                $('#logo-small').animate({'width' : '0'}, navAniDur);
//    $('#logo-small').animate({'top': '-100px'}, navAniDur);
//    $('#nav_fmi').html('Freight<br/>Management <span></span>');
//    $('#nav_parcel').html('Parcel &amp;<br/>Freight Audit <span></span>');
//}
//
//
// function sideNav() {
//    $(document).on('click', '#side-nav div div:nth-child(1) ', function () {
//        var menu = $(this).parent('div').find('.sn-links');
//        if ($(this).hasClass('open')) {
//            $(this).removeClass('open');
//            menu.animate({
//                'height': 0
//            }, 200);
//        } else {
//            $('.open').trigger('click');
//            $(this).addClass('open');
//            var h = 0;
//            menu.find('a').each(function () {
//                h = h + $(this).outerHeight();
//            });
//            menu.animate({
//                'height': h + 'px'
//            }, 200);
//        }
//    });
//}
//
//
///** clears hubspot labels **/
//function clearLabels() {
//    $('#convert label').each(function () {
//        var txt = $(this).text();
//        var target = $(this).attr('for');
//        $('#' + target).attr('placeholder', txt);
//        $(this).hide();
//        clearInterval(labels);
//        var btn = $('#convert form input[type=submit]');
//        if (btn.val() == '') {
//            btn.val("SUBMIT");
//        }
//    });
//    $('#convert input[name=company]').parents('.form-columns-1').hide();
//    $('textarea[name=web_comments]').attr('placeholder', 'How Can We Help?');
//}
//
//
///**
// * old help function
// */
//function help() {
//    $(document).on('click', '.help a', function (e) {
//        $('.dialog-content').html($('#help-content').html());
//        $('.dialog, .dialog-content').attr('style', '');
//        $('.dialog').show();
//        var top = $(document).scrollTop();
//        $('#modal-contentLayer1').css('top', (top + 55) + 'px');
//        e.preventDefault();
//        return false;
//    });
//    $(document).on('click', '.dialog-close', function (e) {
//        $('.dialog').hide();
//    });
//    $(document).on('click', '.sample', function (e) {
//        $('.dialog-content').html('<img alt="Rates Calculator Sample Output" src="/images/calculator-samples/rates-calculator.jpg">');
//        $('.dialog-content').css({
//            height: '592px'
//        });
//        $('.dialog').css({
//            height: '590px',
//            width: '720px',
//            'margin-left': '-384px',
//            top: '40px',
//            display: 'block'
//        });
//        e.preventDefault();
//        return false;
//    });
//}