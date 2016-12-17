jQuery(document).ready(function () {
    //Mask the inputs
    $('input.phone').inputmask("(999) 999-9999");
    bindModals();
    slackBtns();
    //navShrunk = false;
    //navAniDur = 200;
    //navTopTrigger = 127;
    //scrollNav();
    //sideNav();
    calculators();
    tabs();
//    scheduleNow();
//    help();
    validate();
    $(document).on('click', '#pricing-table a', function (e) {
        e.preventDefault();
    });
    flags();
    videoTabs();
    //browseFile();
    centerTextVertically(); //2015
    $('img').load(function(){centerTextVertically()}); // bugfix
    transitionOnShow(); //2015
    offsetAnchor(); //2015
    scrollTo();
    $('[data-href]').click(function(){
        window.location.href = $(this).attr('data-href');
    });

    $(document).on('click', '[data-anal]', function(){
        trackGaEvent($(this).attr('data-anal'));
    });
    $('form[data-anal]').submit(function(){
        trackGaEvent($(this).attr('data-anal'));
    });
    footer();
    validateVisibleBindings();
});