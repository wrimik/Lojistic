jQuery(document).on('click', '#schedule_btn', function () {
    var iframe = "<iframe width='100%;' height='685px' frameborder='0' src='https://www.timetrade.com/book/G16JM'></iframe>";
    jQuery('#schedule_iframe iframe').remove();
    jQuery(iframe).prependTo('#schedule_iframe');
    jQuery('#schedule_contact').css('padding-bottom', '0');
    jQuery('#schedule_iframe').show();
});
jQuery(document).ready(function () {
    $("#schedule_iframe").css('display', 'none');//load the iframe, just dont show it
});