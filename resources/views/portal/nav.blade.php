<?php
include 'process/session.php';
$app = $_GET['app'];
$selected = array(
    'halo' => '',
    'ad_hoc' => '',
    'fmi' => ''
);
$selected[$app] = 'selected';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" ></script>
        <script type="text/javascript">
            $(document).on('click', '.submit_btn', function() {
                if(!$(this).hasClass('selected')){
                    $(this).parents('form').trigger('submit');
                }
            });
            
            $(document).on('click', '.inactive', function() {
                var url = 'http://www.lojistic.com/'+$(this).parent('form').attr('data-learnmore');
                alert("Your subscription does not include this feature. Please contact Lojistic to upgrade. \n\n Call: (800) 783-5753 \n\n Email: info@lojistic.com \n\n Learn More: "+url);
            });
            
        </script>
        <link rel="stylesheet" type="text/css" href="/portal-login-resources/css/navigation.css"/>
    </head>
    <body>
        <div>
            <form data-learnmore="halo" action="https://halo.engagetechnology.com/index.cgi" method="post" target="_parent" id="halo">
<!--                <input type="hidden" value="<?php echo $_SESSION['launch_nav'][1]['pl_username']; ?>" name="username"/>
                <input type="hidden" value="<?php echo $_SESSION['launch_nav'][1]['pl_password']; ?>" name="password"/>
                <input type="hidden" value="" name="sourceonlyuser"/>
                <input type="hidden" value="login" name="screen"/>
                <input type="hidden" value="835007" name="randomnumber"/>
                <input type="hidden" value="" name="nextscreen"/>
                <input type="hidden" value="" name="halo_contactid"/>
                <input type="hidden" value="Login" name="action"/>-->
                <b class="<?php echo $selected['halo']; ?> inactive" >
                    <img src="/portal-login-resources/images/halo_icon.png"/>
                    HALO
                </b>
            </form>
            <form data-learnmore="intelliship" method="post" target="_parent" id="intelliship">
                <b class="inactive">
                    <img src="/portal-login-resources/images/intelliship_icon.png"/>
                    Intelliship
                </b>
            </form>
            <form method="post" data-learnmore="shipping-insurance"  target="_parent" id="insurance">
                <b class="inactive">
                    <img src="/portal-login-resources/images/insurance_icon.png"/>
                    Shipping Insurance
                </b>
            </form>
            <form target="_parent" method="get" action="http://jaguar.freightmgmt.com/JaguarTMSWeb/FMI_SSO.aspx" id="invoices">
                <input type="hidden" value="<?php echo $_SESSION['launch_nav'][4]['pl_username']; ?>" name="cUsername"/>
                <input type="hidden" value="<?php echo $_SESSION['launch_nav'][4]['pl_password']; ?>" name="cPassword"/>
                <b class="<?php echo $selected['fmi']; ?> submit_btn">
                    <img src="/portal-login-resources/images/carrier_payment_icon.png"/>
                    Carrier Invoices
                </b>
            </form>
            <form action="https://halo.engagetechnology.com/index.cgi" method="post" target="_parent" id="adhoc">
                <input type="hidden" value="<?php echo $_SESSION['launch_nav'][1]['pl_username']; ?>" name="username"/>
                <input type="hidden" value="<?php echo $_SESSION['launch_nav'][1]['pl_password']; ?>" name="password"/>
                <input type="hidden" value="27Lb8Zt2i" name="sourceonlyuser"/>
                <input type="hidden" value="login" name="screen"/>
                <input type="hidden" value="835007" name="randomnumber"/>
                <input type="hidden" value="" name="nextscreen"/>
                <input type="hidden" value="" name="halo_contactid"/>
                <input type="hidden" value="Login" name="action"/>
                <b style="border-left: 1px solid #aaa;" class="<?php echo $selected['ad_hoc']; ?> submit_btn">
                    <img src="/portal-login-resources/images/ad_hoc_icon.png"/>
                    Ad Hoc Reporting
                </b>
            </form>
            <span>
                <img src="/portal-login-resources/images/sourcecloud_icon_small_white.png"/>
            </span>
        </div>
    </body>
</html>