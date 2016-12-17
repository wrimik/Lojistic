@extends('layouts.flat')
@section('meta')
    @include('layouts.inc.flat-meta', [
        'title'       => '20/20 Charity Water Campaign by Lojistic',
        'description' => 'Lojistic is donating $100,000 to help bring water to people who need it most with Charity Water.',
        'keywords'    => '20/20 campaign, lojistic, greater good, corporate citizenship',
    ])
@overwrite
@section('styles')
    {!!  Html::style('/css/pages/2020.css?v='.v())  !!}
@stop
@section('content')
    <section class="flatBlue">
        <div class="container">
            <div class="row">
                <img src="/images/20-20-lrg.png" alt="20-20 Campaign Logo"/>
            </div>
            <div class="row text-center fw-thin flatBlue">
                <div class="col-sm-5">
                    <span class="fs-64">20 Minutes</span><br/>
                    <span class="fs-32">on the phone with a new prospective client</span>
                </div>
                <div class="col-sm-2">
                    <span class="fs-84">=</span><br/>
                </div>
                <div class="col-sm-5">
                    <span class="fs-64">20 Dollars</span><br/>
                    <span class="fs-32">to bring clean water to those who need it most</span>
                </div>
            </div>
        </div>
    </section>

    <section class="np-sm np-md np-lg text-center flatCream">
        <div class="col-sm-3 col-xs-12 text-vc fw-thin">
            <span class="fs-48">2014</span><br/>
            <span class="fs-24">total:</span><br/><br/>
            <span class="fs-28">$14,740</span><span class="fs-20">.00</span><br/><br/>
            See The Donations: <br>
            <a href="https://my.charitywater.org/lojistic/20-20-q12014" class="fs-20 text-ul">One</a> |
            <a href="https://my.charitywater.org/lojistic/2020-campaign-q1-2014-extra" class="fs-20  text-ul">Two</a> |
            <a href="https://my.charitywater.org/lojistic/2020-campaign-q2-2014" class="fs-20  text-ul">Three</a> |
            <a href="https://my.charitywater.org/lojistic/2020-campaign-q3-2014" class="fs-20  text-ul">Four</a> |
            <a href="https://my.charitywater.org/lojistic/2020-campaign-q4-2014" class="fs-20  text-ul">Five</a>
            <br/>
            <a href="https://mycw.charitywater.org/p/myprojects?member_id=180362" class="fs-20 btn text-ul">See The
                Impact</a><br/>
            <br/>
        </div>
        <div class="col-sm-9 hidden-xs np">
            <img src="/images/2020/rwanda.jpg" class="pull-right" alt=""/>
        </div>
    </section>
    <section class="np visible-xs">
        <img src="/images/2020/rwanda.jpg" class="pull-right" alt=""/>
    </section>

    <section class="np-sm np-md np-lg text-center flatBlue">
        <div class="col-sm-9 hidden-xs np">
            <img src="/images/2020/ethiopia.jpg" class="pull-left" alt=""/>
        </div>
        <div class="col-sm-3 col-xs-12 np-md np-lg text-vc fw-thin">
            <span class="fs-48">2015</span><br/>
            <span class="fs-24">total:</span><br/><br/>
            <span class="fs-28">$2,720</span><span class="fs-20">.00</span><br/><br/>
            See The Donations: <br>
            <a target="_blank" href="https://my.charitywater.org/lojistic/2020-campaign-q1-2015" class="fs-20 text-ul">One</a>
            |
            <a target="_blank" href="https://my.charitywater.org/lojistic/2020-campaign-q2-2015" class="fs-20 text-ul">Two</a>
            |
            <a target="_blank" href="https://my.charitywater.org/lojistic/20-20-campaign-q3-2015" class="fs-20 text-ul">Three</a>
            <br>
            <a target="_blank" href="https://mycw.charitywater.org/p/myprojects?member_id=180362" class="fs-20 text-ul">See
                The Impact</a>
        </div>
    </section>
    <section class="np visible-xs">
        <img src="/images/2020/ethiopia.jpg" class="pull-left" alt=""/>
    </section>

    <section class="flatCream fw-thin">
        <div class="container text-center">
            <span class="flatCoral fs-40">
                THIS IS NOT A FUNDRAISER
            </span><br/>
            <span class="flatCoral fs-24">
                [ we&rsquo;re not asking you to donate ]
            </span><br/>
            <br/>
            <span class="flatGrey fs-40">
                THIS IS OUR GIVING PLAN
            </span>

            <div class="tri tri-30 flatGrey" style="border-top-color:#898989;"></div>
        </div>
    </section>

    <section class="flatGrey">
        <div class="container text-center fw-thin fs-40">
            <p>
                Our Goal:
            </p>

            <p>
                Reach <span class="grey">$</span>100,000<span class="fs-20">.00</span><br/>
            </p>

            <div class="progress-meter">
                <div class="progress-indicator transition-on-show"
                     data-transition-to="opacity:1; width:17.46%;"></div>
            </div>
            <p>
                <span>Our Progress Thus Far:</span>
            </p>

            <p>
                <a target="_blank" href="https://my.charitywater.org/lojistic" class="btn btn-info fs-36 fw-bold">
                    <span>$17,460</span><span>.00</span><br/>
                </a>
            </p>
        </div>
    </section>

    <section class="np-md np-lg flatBlue">
        <div class="col-xs-12 col-md-6 text-vc">
            <div class="col-lg-9 col-md-12 col-sm-12 col-sm-offset-1 col-xs-12 pull-right">
                <span class="fs-36 white  col-sm-11">How it works:</span>

                <p class="fs-16 col-sm-11">
                    Some companies &quot;ship a lot of stuff&quot;. We at Lojistic
                    help those companies reduce their shipping costs.
                    Every time one of these companies gives us
                    20 minutes to introduce ourselves, we will donate
                    20 dollars to fund clean water projects in developing
                    countries. We hope to donate $100,000.00
                </p>
            </div>
        </div>
        <img class="col-sm-6 np pull-right hidden-sm hidden-xs" src="/images/2020/2020-how-it-works.jpg" alt=""/>
    </section>

    <section class="flatGrey">
        <div class="container">
            <div class="col-sm-6">
                <div class="circ circ-200 white"></div>
                <div class="col-xs-offset-4">
                    <br/>
                    <label class="white">
                        <div class="square-15 white"></div>
                        clean water
                    </label> <br/>
                    <label class="black">
                        <div class="square-15 flatBlack"></div>
                        everything else
                    </label>
                </div>
            </div>
            <div class="col-sm-6 fw-thin">
                <p class="white">
                    <br/><br/>
                    <span class="fs-52">100%</span> <br/>
                    <span class="fs-24">
                        of every dollar donated will <br/>
                        fund clean water projects. <br/>
                    </span>
                </p>
                (see the pie chart on the left)
            </div>
        </div>
    </section>
    <section class="y2020">
        <div class="container">
            <p class="white text-center">
                This is possible through our partnership with
            </p>
            <img src="/images/2020/charity-water.png" alt=""/>
        </div>
    </section>
    <section class="white footer-2020">
        <div class="container">
            <div class="col-sm-6">
                <h2 class="flatGrey">watch the video</h2>
                <iframe src="https://player.vimeo.com/video/34963548" width="450" height="248" frameborder="0"
                        webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                <hr/>
                <div class="col-xs-12 white" id="form">
                    <br/>

                    <h2>Start Your 20 Minute Conversation</h2>
                    @include('parts.hubspot-form',
                        array(
                            'thankyouPage' => '/thank-you',
                            'intent' => '20 20 Campaign',
                            'btnTxt' => 'SEND',
                            'formID' => '719f157e-93c9-4b23-95a9-5d13d9ee23d7'
                        )
                    )
                </div>
            </div>
            <div id="share-2020" class="col-sm-6">
                <div class="col-sm-11 col-sm-offset-1">
                    <h2 class="flatGrey text-left">share the page</h2>

                    <div class="social-tiles">
                        @include('parts.snippets.social-links')
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop