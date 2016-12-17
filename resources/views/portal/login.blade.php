<!DOCTYPE html>
<html>
    <head>
        <title>Lojistic Cloud</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" ></script>
        <script src="/portal-login-resources/js/login.js"></script>
        <link rel="icon" type="image/favicon" href="/favicon.png" />
        <link rel="icon" type="image/shortcut icon" href="/favicon.png" />
        <link rel="icon" type="image/vnd.microsoft.icon" href="/images/favicon.png" />
        <link rel="stylesheet" type="text/css" href="/portal-login-resources/css/login.css" />
        <link rel="stylesheet" type="text/css" href="/portal-login-resources/css/forms.css" />
        <link rel="stylesheet" type="text/css" href="/portal-login-resources/css/common.css" />
    </head>
    <body>
        @include('parts.tracking')
        <div id="header">
            <div id="header_content">
                <img src="/portal-login-resources/images/lojistic-cloud_small.png"/>WELCOME TO <b>LOJISTIC CLOUD</b>
                <a href="/portal/">Log Out</a>
            </div>
        </div>
        <div id="content">
            <div id="pageframe">
                <div id="login">
                    <img src="/portal-login-resources/images/lojistic-cloud.png"/>
                    <div id="response"></div>
                    <form method="post" action="/portal/check-credentials" class="block ajax_form" id="loginform">
                        <label>Username</label>
                        <input type="text" name="username" id="username" value="<?php echo @$_COOKIE['user'];?>"/>
                        <label>Password</label>
                        <input type="password" name="password" id="password" value=""/>
                        <button type="submit">Log In</button>
                    </form>
                </div>
            </div>
        </div>
        <div id="slideshow">
            <div id="slideshow_mask">
                <img src="/portal-login-resources/images/halo.png" id="halo_ad"/>
                <img src="/portal-login-resources/images/intelliship.png" id="intelliship_ad"/>
                <img src="/portal-login-resources/images/shipping_insurance.png" id="insurance_ad"/>
            </div>
        </div>
    </body>
</html>
