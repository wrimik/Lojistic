@extends('layouts.holiday')
@section('meta')
@include('layouts.inc.flat-meta', [
    'title'       => 'Giving Back for the Holidays',
    'description' => 'Help Lojistic Raise Money to Bring Extra Holiday Cheer.',
    'keywords'    => '',
])
@overwrite
@section('styles')
{!! Html::style('/holiday/holiday.css?v='.v()) !!}
@stop
@section('scripts')
{!! Html::script('js/2016/misc/give.js') !!}
@stop
@section('content')

<!--Its a christmas miracle!!! See all the inline styles!!! -->
<section class="Hark-the-Herald md-banner">
    <div class="container">
        <div class="col-md-7">
            <div class="col-xs-12 text-center np">
                <img class="img-responsive" src="/holiday/2015.png">
            </div>
            <h1 class="christmasRed christmas-title text-center" style="padding:20px 0px 10px 0px;">'Tis The Season To
                Give</h1>

            <div class="christmas-subtitle">
                <h4 class="text-center uppercase on-both-sides christmas-font cst">Help Us Sponsor The Holidays For A
                    Few Families </h4>
            </div>
        </div>
        <div class="col-md-5">
            <img src="/holiday/holiday-gift.png">
        </div>
    </div>
</section>

<section class="white">
    <div class="container">
        <div class="col-xs-12 np">
            <h2 class="uppercase text-center nm christmas-font">
                <span class="christmasRed hide-eleven-thirty">------------- </span>
                OUR 2015 goal, TO RAISE
                <br class="hidden-lg">
                <span class="christmasRed christmas-title">&nbsp;$15,000&nbsp;</span>
                <br class="hidden-lg">
                to sponsor 40+ families
                <span class="christmasRed hide-eleven-thirty">-------------</span>
            </h2>
            <br>
        </div>
    </div>
    <div class="container">
        {{--<div class="row np">--}}
        {{--<div class="col-md-12">--}}
        {{--<div class="hidden-md hidden-sm hidden-xs" style="display: block; height:70px; overflow: hidden;">--}}
        {{--@for ($i = 0; $i < 15001; $i += 1000)--}}
        {{--@if (  $i  < $total)--}}
        {{--@include('parts.families-happy')--}}
        {{--@else--}}
        {{--@include('parts.families')--}}
        {{--@endif--}}
        {{--@endfor--}}
        {{--</div>--}}
        {{--<div class="hidden-lg hidden-sm hidden-xs">--}}
        {{--@for ($i = 0; $i < 15001; $i += 3000)--}}
        {{--@if (  $i  < $total)--}}
        {{--<div class="col-md-2 text-center">--}}
        {{--@include('parts.families-happy')--}}
        {{--</div>--}}
        {{--@else--}}
        {{--<div class="col-md-2 text-center">--}}
        {{--@include('parts.families')--}}
        {{--</div>--}}
        {{--@endif--}}
        {{--@endfor--}}
        {{--</div>--}}
        {{--<div class="hidden-lg hidden-md hidden-xs">--}}
        {{--@for ($i = 0; $i < 15001; $i += 5000)--}}
        {{--@if (  $i  < $total)--}}
        {{--<div class="col-sm-3 text-center">--}}
        {{--@include('parts.families-happy')--}}
        {{--</div>--}}
        {{--@else--}}
        {{--<div class="col-sm-3 text-center">--}}
        {{--@include('parts.families')--}}
        {{--</div>--}}
        {{--@endif--}}
        {{--@endfor--}}
        {{--</div>--}}
        {{--<div class="hidden-lg hidden-md hidden-sm">--}}
        {{--@for ($i = 0; $i < 12001; $i += 5000)--}}
        {{--@if (  $i  < $total)--}}
        {{--<div class="col-xs-4 text-center">--}}
        {{--@include('parts.families-happy')--}}
        {{--</div>--}}
        {{--@else--}}
        {{--<div class="col-xs-4 text-center">--}}
        {{--@include('parts.families')--}}
        {{--</div>--}}
        {{--@endif--}}
        {{--@endfor--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}


        <div class="col-md-12">
            <div class="progress-meter flatGrey" style="height:60px; border-radius:100px;">
                <div class="progress-indicator transition-on-show"
                     data-transition-to="opacity:1; border-radius:100px; background-color:#fff; height:48px; width:{{ $percent }}%; background: repeating-linear-gradient(-55deg, #e7606c, #e7606c 10px, #fff 10px, #fff 20px);"
                     style=""
                        >
                </div>
            </div>
        </div>
        <div class="hidden-lg hidden-md hidden-sm">
            <span class="col-xs-3 text-center christmas-font">$0K</span>
            <span class="col-xs-3 text-center christmas-font">$5K</span>
            <span class="col-xs-3 text-center christmas-font">$10k</span>
            <span class="col-xs-3 text-center christmas-font">$15k</span>
        </div>
        <div class="hidden-lg hidden-md hidden-xs">
            @for ($i = 0; $i < 16; $i += 5)
                <span class="col-sm-3 text-center christmas-font">${{ $i }}K</span>
            @endfor
        </div>
        <div class="hidden-lg hidden-sm hidden-xs">
            @for ($i = 0; $i < 16; $i += 3)
                <div class="col-md-2 text-center christmas-font">${{ $i }}k</div>
            @endfor
        </div>
        <div class="hidden-md hidden-sm hidden-xs">
            @for ($i = 1; $i < 16; $i+=1.25)
                <div class="col-md-1 text-center christmas-font">${{ $i }}K</div>
            @endfor
        </div>
        <div class="same-height-parent">
            <div class="col-md-3">
                <div class="facts-box">
                    <h2 class="text-center"> $3000 </h2>
                    <hr class="holiday-rule">
                    <h4 class="uppercase text-center same-height"><br>lojistic seed gift</h4>
                </div>
            </div>
            <div class="col-md-3">
                <div class="facts-box">
                    <h2 class="text-center"> ${{ $donations }} </h2>
                    <hr class="holiday-rule">
                    <h4 class="uppercase text-center same-height"><br>total Donations</h4>
                </div>
            </div>
            <div class="col-md-3">
                <div class="facts-box ">
                    <h2 class="text-center"> ${{ $donations }} </h2>
                    <hr class="holiday-rule">
                    <h4 class="uppercase text-center same-height"><br>total lojistic match</h4>
                </div>
            </div>
            <div class="col-md-3">
                <div class="facts-box">
                    <h2 class="text-center christmasRed"> ${{ $total }} </h2>
                    <hr class="holiday-rule">
                    <h4 class="uppercase text-center christmasRed same-height"><br>total raised</h4>
                </div>
            </div>
        </div>
        <br>
    </div>
</section>

<section class="christmasRed">
    <div class="container">
        <h2>
                <span class="white christmas-font">
                    LAST YEAR (2014), We Raised $12,000 To Sponsor 40+ Families.<br>
                    Help Us Bring A Little Extra Cheer To EVEN MORE Families in 2015!
                </span>
        </h2>

        <div class="col-sm-6 col-sm-offset-3">
            <br>

            <div>
                <form action="https://www.paypal.com/cgi-bin/webscr"
                      method="post"
                      target="_target"
                      class="btn btn-ghost btn-thick uppercase text-center"
                      style="padding:0px">

                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="YVGGQNZJKGT42">
                    <input type="submit" name="submit" value="Donate Now" border="0" name="submit"
                           class="christmas-paypal"
                            >
                </form>
            </div>
        </div>
    </div>
</section>

<section class="Hark-the-Herald">
    <div class="container">
        <h3 class="christmasRed text-center christmas-font">KNOW ANYONE WHO WOULD LOVE TO DONATE TO HELP US REACH OUR
            GOAL?<br>
            <small>SHARE OUR CAMPAIGN WITH YOUR BEST FRIEND, NEIGHBOR, COWORKER...</small>
        </h3>
        <div class="col-sm-10 col-sm-offset-1">
            <br>

            <div class="col-lg-3 col-md-6 col-sm-12">
                <a rel="nofollow" href="https://www.facebook.com/sharer/sharer.php?u=http%3A//lojistic.com/give" target="_blank">
                    @include('parts.snippets.social-circles', array(
                      'circleSize'=>'circ-100',
                      'elojiSize' => 'fs-36',
                      'elojicolor'=> 'christmasTan',
                      'hover'=>'hover-color-opacity',
                      'eloji' => 'eloji-facebook',
                      'color' => 'christmasRed',
                     ))
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <a rel="nofollow" href="https://twitter.com/home?status='Tis%20The%20Season%20To%20Give!%20Pony%20up%20some%20%23holiday%20cheer.%20Lojistic%20is%20matching%20donations!%20goo.gl/1D9ag7" target="_blank">
                    @include('parts.snippets.social-circles', array(
                           'circleSize'=>'circ-100',
                           'elojiSize' => 'fs-36',
                           'elojicolor'=> 'christmasTan',
                           'hover'=>'hover-color-opacity',
                           'eloji' => 'eloji-twitter',
                           'color' => 'christmasRed',
                          ))
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <a rel="nofollow" href="https://www.linkedin.com/shareArticle?mini=true&url=https%3A//lojistic.com/give&title='Tis%20The%20Season%20To%20Give&summary=Tis%20The%20Season%20To%20Give!%20Pony%20up%20some%20%23holiday%20cheer.%20Lojistic%20is%20matching%20donations!&source=" target="_blank">
                    @include('parts.snippets.social-circles', array(
                          'circleSize'=>'circ-100',
                          'elojiSize' => 'fs-36',
                          'elojicolor'=> 'christmasTan',
                          'hover'=>'hover-color-opacity',
                          'eloji' => 'eloji-linkedin',
                          'color' => 'christmasRed',
                         ))
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <a rel="nofollow" href="mailto:ChangeMe%40gmail.com?subject=Check%20Out%20This%20Awesome%20Holiday%20Giving%20Campaign&body='Tis%20The%20Season%20To%20Give!%20Pony%20Up%20Some%20Holiday%20Cheer.%20Lojistic%20Is%20Matching%20Donations.%20Lojistic.com%2Fgive" target="_blank">
                    @include('parts.snippets.social-circles', array(
                          'circleSize'=>'circ-100',
                          'elojiSize' => 'fs-36',
                          'elojicolor'=> 'christmasTan',
                          'hover'=>'hover-color-opacity',
                          'eloji' => 'eloji-email',
                          'color' => 'christmasRed',
                         ))
                </a>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="col-xs-12">
            <div class="holiday-explaination">
                <h1 class="text-center explanation-title christmasRed np"><span
                            class="explaination-span">The Plan</span></h1>

                <h3 class="text-center christmas-font">To Bring Some Extra Holiday Cheer to A Few Financially
                    Disadvantaged Families</h3>
            </div>
        </div>
        <div class="col-xs-12">
            <div class="holiday-explaination">
                <h1 class="text-center explanation-title christmasRed"><span class="explaination-span">The Gift</span>
                </h1>

                <h3 class="text-center christmas-font">Each Family Will Receive: A Holiday Feast & Target Gift Card</h3>
            </div>
        </div>
        <div class="col-xs-12">
            <div class="holiday-explaination holiday-explaination-last">
                <h1 class="text-center explanation-title christmasRed"><span class="explaination-span">The Goal</span>
                </h1>

                <h3 class="text-center christmas-font">Raise $15,000 (or more) To Make This Season Extra Special For 40
                    (or more) Families</h3>
            </div>
        </div>
    </div>
</section>

<section class="christmasRed">
    <div class="container">
        <div class="col-xs-12 col-sm-10 col-sm-offset-1">
            <div class="the-bonus">
                <h1 class="the-bonus-title text-center">
                        <span class="white the-bonus-span">
                            The Bonus
                        </span>
                </h1>

                <div class="the-bonus-inner">
                    <h3 class="white uppercase text-center christmas-font">
                        Lojistic Will Match Your Donation Dollar-for-Dollar
                    </h3>

                    <div class="row">
                        <div class="col-sm-4">
                               <span class="white hidden-sm hidden-xs">
                                   <hr class="pull-right" style="width:150px; margin:50px 20px 50px 20px;">
                               </span>
                        </div>
                        <div class="col-sm-4">
                            <h1 class="white text-center christmas-font one-hundred-margin the-bonus-inner-title">
                                100%</h1>
                        </div>
                        <div class="col-sm-4">
                               <span class="white hidden-sm hidden-xs">
                                   <hr class="pull-left" style="width:150px; margin:50px 20px 50px 20px;">
                               </span>
                        </div>
                    </div>
                    <h3 class="white uppercase text-center christmas-font">Your Donation + 100% Match Will Go Directly
                        To The Families</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="white">
    <div class="container text-center">
        <!--include when there is a form for CC -->
        {{--<div class="pre-donation-form">--}}
        <p class="uppercase christmas-font flatGrey fs-24">
            Partner with Lojistic to bring a little extra holiday cheer to
            a few financially disadvantaged families this Holiday Season.
        </p>

        <p class="uppercase christmas-font flatGrey fs-24">
            Lojistic will match your donations dollar for dollar, up to $10,000!
            In order to ensure 100% of all donations (plus Match) go to the families,
            Lojistic will also put up the extra dollars necessary to cover
            merchant service fees when you donate by credit card.
        </p>

        <p class="uppercase christmas-font flatGrey fs-24">
            Donations can be made online using the form below or give us a call at (800) 783-5753.
        </p>
        {{--</div>--}}
        <br>

        <div class="col-xs-6 col-xs-offset-3 text-center np christmasTan np" style="background-color:#ece4c9;">
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_target"
                  style="border: #e7606c 2px solid;">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="YVGGQNZJKGT42">
                <input type="submit" name="submit"
                       value="Donate Now"
                       border="0"
                       name="submit"
                       class="christmas-paypal">
            </form>
        </div>


        {{--<div class="container np">--}}
        {{--<div class="col-xs-6 text-center np christmasRed cc-form-tab">--}}
        {{--<h2 class="text-vc christmas white">CreditCard </h2>--}}
        {{--</div>--}}
        {{--<!-- TODO: WTF!!! why wont christmasTan work here??? Remove the inline -->--}}
        {{--<div class="col-xs-6 text-center np christmasTan" style="background-color:#ece4c9;">--}}
        {{--<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">--}}
        {{--<input type="hidden" name="cmd" value="_s-xclick">--}}
        {{--<input type="hidden" name="hosted_button_id" value="YVGGQNZJKGT42">--}}
        {{--<input type="submit" name="submit" value="Donate with Paypal" border="0" name="submit" class="christmas-paypal" style="padding:14px; border:none; background-color: #ece4c9;">--}}
        {{--</form>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="container form-container">--}}
        {{--<form class="form-horizontal" method="POST" action="https://www.merchante-solutions.com/jsp/tpg/secure_checkout.jsp">--}}
        {{--<div class="col-sm-9 col-sm-offset-2">--}}
        {{--<!-- hidden inputs -->--}}
        {{--<input type="hidden" name="transaction_amount" value="xx.xx">--}}
        {{--<input type="hidden" name="profile_id" value="9410000xxxxx000000xx">--}}
        {{--<input type="hidden" name="logo_url" value="https://www.lojistic.com/images/lojistic.png">--}}
        {{--<input type="hidden" name="return_url" value="http://www.lojistic.com/thank-you.html">--}}
        {{--<input type="hidden" name="cancel_url" value="http://www.lojistic.com/">--}}
        {{--<input type="hidden" name="css_url" value="http://www.example.com/default.css">--}}
        {{--<input type="hidden" name="invoice_number" value="123456">--}}
        {{--<!-- end hiddens -->--}}
        {{--<div class="form-group">--}}
        {{--<label class="col-sm-3 white text-vc" for="donation">--}}
        {{--<span class="white uppercase christmas-font">My Donation</span>--}}
        {{--</label>--}}
        {{--<div class="col-sm-8">--}}
        {{--<input type="text" name="donation" class="form-control" id="donation" placeholder="$500">--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="form-group">--}}
        {{--<label class="col-sm-3 white text-vc" for="credit-card">--}}
        {{--<span class="white uppercase christmas-font">Credit Card</span>--}}
        {{--</label>--}}
        {{--<div class="col-sm-8">--}}
        {{--<input type="creditcard" class="form-control" id="creditcard" placeholder="XXXX-XXXX-XXXX-XXXX">--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="form-group">--}}
        {{--<label class="col-sm-2 white text-vc" for="credit-card">--}}
        {{--<span class="white uppercase christmas-font">Month</span>--}}
        {{--</label>--}}
        {{--<div class="col-sm-2 col-sm-offset-1">--}}
        {{--<input type="month" class="form-control" id="expiration" placeholder="month">--}}
        {{--</div>--}}
        {{--<label class="col-sm-1 white text-vc text-center" for="credit-card">--}}
        {{--<span class="white uppercase christmas-font">Year</span>--}}
        {{--</label>--}}
        {{--<div class="col-xs-2">--}}
        {{--<input type="password" class="form-control" id="exampleInputPassword1" placeholder="year">--}}
        {{--</div>--}}
        {{--<label class="col-sm-1 white text-vc text-center" for="credit-card">--}}
        {{--<span class="white uppercase christmas-font">CVV</span>--}}
        {{--</label>--}}
        {{--<div class="col-xs-2">--}}
        {{--<input type="CVV" class="form-control" id="cvv" placeholder="cvv">--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="form-group">--}}
        {{--<label class="col-sm-3 white text-vc" for="name">--}}
        {{--<span class="white uppercase christmas-font">First Name</span>--}}
        {{--</label>--}}
        {{--<div class="col-sm-8">--}}
        {{--<input type="firstname" class="form-control" id="firstname" placeholder="First Name">--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="form-group">--}}
        {{--<label class="col-sm-3 white text-vc" for="name">--}}
        {{--<span class="white uppercase christmas-font">Last Name</span>--}}
        {{--</label>--}}
        {{--<div class="col-sm-8">--}}
        {{--<input type="lastname" class="form-control" id="lastname" placeholder="Last Name">--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="form-group">--}}
        {{--<label class="col-sm-3 white text-vc" for="exampleInputEmail1"><span class="white uppercase christmas-font">Email Address</span></label>--}}
        {{--<div class="col-sm-8">--}}
        {{--<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="form-group">--}}
        {{--<label class="col-sm-3 white text-vc" for="phone"><span class="white uppercase christmas-font">Phone Number</span></label>--}}
        {{--<div class="col-sm-8">--}}
        {{--<input type="phone" class="form-control" id="phone" placeholder="949-867-5309">--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="form-group">--}}
        {{--<label class="col-sm-3 white text-vc" for="exampleInputEmail1">--}}
        {{--<span class="white uppercase christmas-font">Billing Address</span>--}}
        {{--</label>--}}
        {{--<div class="col-sm-8">--}}
        {{--<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="form-group">--}}
        {{--<label class="col-sm-3 white text-vc" for="exampleInputPassword1">--}}
        {{--<span class="white uppercase christmas-font">Address (optional)</span>--}}
        {{--</label>--}}
        {{--<div class="col-sm-8">--}}
        {{--<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="form-group">--}}
        {{--<label class="col-sm-3 white text-vc" for="exampleInputPassword1">--}}
        {{--<span class="white uppercase christmas-font">City</span>--}}
        {{--</label>--}}
        {{--<div class="col-sm-8">--}}
        {{--<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="form-group">--}}
        {{--<label class="col-sm-2 white text-vc" for="state">--}}
        {{--<span class="white uppercase christmas-font">State</span>--}}
        {{--</label>--}}
        {{--<div class="col-sm-3 col-sm-offset-1">--}}
        {{--<input type="state" class="form-control" id="State" placeholder="XX">--}}
        {{--</div>--}}
        {{--<label class="col-sm-2  white text-vc" for="Zip">--}}
        {{--<span class="white uppercase christmas-font">ZipCode</span>--}}
        {{--</label>--}}
        {{--<div class="col-sm-3">--}}
        {{--<input type="zip" class="form-control" id="zip" placeholder="11107">--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-md-4 col-md-offset-7 col-sm-6 col-sm-offset-5 col-xs-12 np">--}}
        {{--<div type="submit" class="btn btn-lg christmas-font" style="background-color:#ece4c9;">Submit</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</form>--}}
    </div>
    <br>
    <br>

    <div class="container">
        <p class="text-center flatGrey">
            <small>Lojistic is not a 501(c)(3) charity and your donation is not tax deductable.<br>
                Our holiday donation drive is an extension of our Greater Good Corporate Citizenship Program.<br>
                To learn more about the Greater Good, please visit:<br>
            </small>
        </p>
        <h3 class="text-center">
            <a class="christmas christmasRed" rel="nofollow" href="http://lojistic.com/lojistic-corporate-citizenship">
                www.lojistic.com/lojistic-corporate-citizenship
            </a>
        </h3>
    </div>
</section>
@stop