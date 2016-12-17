@extends('layouts.responsive')
@section('styles')
    {!! Html::style('/css/splash.css?v='.v())  !!}
    {!! Html::style('/css/slider.css?v='.v())  !!}
    {!! Html::style('/css/lojistic.css?v='.v())  !!}
@stop
@section('scripts')
    {{--{{ HTML::script('js/controllers.js') }}--}}
    {!! Html::script('/js/splash.js') !!}
@stop

@section('content')
    <div id='video-container'>
        <video id='video' controls autoplay loop>
            <source src="http://cdn.lojistic.com/videos/box-low.mp4" type="video/mp4">
            <source src="http://cdn.lojistic.com/videos/box-low.ogv" type="video/ogg">
            <!--<source src="https://dev.lojistic.com/box2.mp4" type="video/mp4">-->
        </video>
        <div id="video-controls">
            <div id="mute" class='muted' title='Toggle Audio'></div>
            <div id="full-screen" title='Full-Screen'></div>
        </div>
        <div id='video-caption'>
            &quot;Yesterday I was clever,
            so I wanted to change the world.<br/>
            Today I am wise, so I am changing myself.&quot;<br/>
            <span>- Rumi -</span><br/>
            <span id='toggle-caption'>[x]</span>
        </div>
        <h2 id='becoming'>
            SOURCE CONSULTING HAS BECOME LOJISTIC
            <br/>
            <img class="downarrow" id='downarrow-white' src="/images/splash/down.png"/>
            <img class="downarrow" id='downarrow-blue' src="/images/splash/down-blue.png"/>
        </h2>
    </div>

    <div class='section' id="logo-slider-section">
        <div id="logos" class="slider">
            <div class="s-a"></div>
            <div class="s-b"></div>
        </div>
        <!--            <div id="march9">
                        COMING MARCH 9
                    </div>-->
    </div>


    <div class='section silver'>
        <div class='container'>
            <h2>First Things First</h2>
            <div class='col-sm-4 col-xs-12 card'>
                <div>
                    <div class='icon'>
                        <img id='nope' src='/images/splash/nope.png'/>
                    </div>
                    <div class='icon-content'>
                        We&rsquo;re not<br/>
                        being acquired
                    </div>
                </div>
            </div>
            <div class='col-sm-4 col-xs-12 card'>
                <div>
                    <div class='icon'>
                        <img id='same' src='/images/splash/same.png'/>
                    </div>
                    <div class='icon-content'>
                        Our federal identification<br/>
                        number hasn&rsquo;t changed
                    </div>
                </div>
            </div>
            <div class='col-sm-4 col-xs-12 card'>
                <div>
                    <div class='icon'>
                        <img id='greater' src='/images/splash/greater.png'/>
                    </div>
                    <div class='icon-content'>
                        Our solutions and services<br/>
                        will be better than ever
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class='section' id="ourjourney">
        <div id="timeline">
            <div>
                <div class="tldot"></div>
                <div class="tlline"></div>
                <div class="tldot"></div>
            </div>
            <span>2005</span>
            <span>2015</span>
        </div>

        <h3>
            Our Journey Started 10 Years Ago
        </h3>
        <p>
            This company was founded in February of 2005 <br/>
            with the idea that we could help companies reduce shipping costs.
        </p>
    </div>

    <div class='section slim'>
        <h4>
            Over The Past 10 Years We&rsquo;ve Learned A Lot About You, The Shipper.
        </h4>
        <p>
            That, in turn, has helped us grow our idea into a powerful vision.
        </p>
    </div>

    <div class="navy" id="investment">
        <img id="white-logo" class='scale-img hidden-sm hidden-md hidden-lg' src="/images/splash/logo-white.png"/>
        <img id="white-arrows" class='scale-img white-arrows hidden-xs' src="/images/splash/arrows.png"/>
        <h2>
            Lojistic is our investment in becoming<br/>
            your centralized resource for all things logistics.
        </h2>
    </div>

    <div class='section slim'>
        <h3>
            And Just In Case You Forgot, <br/>
            Here Are The Kick Ass Services We Are Known For:
        </h3>
    </div>
    <div>
        <div>
            <div class="col-sm-4 col-xs-12 service">
                <div style="background:#193d53; height: 413px;">
                    <div class="product-title">
                        Parcel &amp;<br/> Freight Audit<hr/>
                    </div>
                    <div class="product-icon">
                        <img src="/images/splash/icons/audit.png"><br/>
                        "Do my shipping invoices contain errors? Am I getting over-charged?"
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-xs-12 service">
                <div style="background: #767e81; height: 413px;">
                    <div class="product-title">
                        Carrier Rate<br/> Negotiation<hr/>
                    </div>
                    <div class="product-icon">
                        <img src="/images/splash/icons/negotiation.png"><br/>
                        "Can my shipping rates get better?"
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-xs-12 service">
                <div style="background:#f7901e; height: 413px;">
                    <div class="product-title">
                        Freight<br/> Management<hr/>

                    </div>
                    <div class="product-icon">
                        <img src="/images/splash/icons/freight.png"><br/>
                        "What tools, resources and services can help better manage my freight?"
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-xs-12 service">
                <div style="background:#00579b; height: 413px;">
                    <div class="product-title">
                        Parcel<br/> Shipping Insurance<hr/>
                    </div>
                    <div class="product-icon">
                        <img src="/images/splash/icons/insurance.png"><br/>
                        "Is there a better way to insure the contents of my parcel shipments?"
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-xs-12 service">
                <div style="background: #41b655; height: 413px;">
                    <div class="product-title">
                        Shipping<br/> Software<hr/>
                    </div>
                    <div class="product-icon">
                        <img src="/images/splash/icons/intelliship.png"><br/>
                        "I need a solution to automate my shipping processes and save money."
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-xs-12 service">
                <div style="background:#b8bcbd; height: 413px;">
                    <div class="product-title">
                        Tracking<br/> Software<hr/>
                    </div>
                    <div class="product-icon">
                        <img src="/images/splash/icons/halo.png"><br/>
                        "I need centralized visibility and a better way to manage my shipments."
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-xs-12 service">
                <div style="background:#01838f; height: 413px;">
                    <div class="product-title">
                        Custom<br/> Analytics<hr/>

                    </div>
                    <div class="product-icon">
                        <img src="/images/splash/icons/analytics.png"><br/>
                        "I need analysis help with a specific logistics project."
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-xs-12 service">
                <div style="background: #45a5d6; height: 413px;">
                    <div class="product-title">
                        ReadyPay<hr/>
                    </div>
                    <div class="product-icon">
                        <img src="/images/splash/icons/readypay.png"><br/>
                        "I need a service provider to audit and pay my shipping bills."
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-xs-12 service">
                <div style="background: #46d3ae; height: 413px;">
                    <div class="product-title">
                        Shipping<br/> Rates<hr/>
                    </div>
                    <div class="product-icon">
                        <img src="/images/splash/icons/shipping-rates.png"><br/>
                        "Eureka! Significantly discounted freight shipping rates ready to go."
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="free-tools" class="section">
        <h2>
            Our Free Tools &amp; Business Resources
        </h2>

        <div id="toolbelt">
            <div class="col-sm-offset-1 col-xs-offset-1 col-sm-2 col-xs-5 tool">
                <div>
                    <img src="/images/splash/t-rates.png"/>
                </div>
                <a oldhref="http://sourceconsulting.com/fedex-ups-ground-dim-calculator">
                    Generate a Custom<br/>
                    FedEx or UPS Rate Sheet
                </a>
            </div>
            <div class="col-sm-offset-0  col-sm-2 col-xs-5 tool">
                <div>
                    <img src="/images/splash/t-compare.png"/>
                </div>
                <a oldhref="http://sourceconsulting.com/shipping-costs-calculators/fedex-ups-rate-comparison-tool">
                    Compare UPS<br/>
                    vs FedEx Costs
                </a>
            </div>
            <div class="col-sm-offset-0 col-xs-offset-1 col-sm-2 col-xs-5 tool">
                <div>
                    <img src="/images/splash/t-dim.png"/>
                </div>
                <a oldhref="http://sourceconsulting.com/fedex-ups-ground-dim-calculator">
                    Dimensional Weight<br/>
                    Pricing (DIM) Calculator
                </a>
            </div>
            <div class="col-sm-offset-0  col-sm-2 col-xs-5 tool">
                <div>
                    <img src="/images/splash/t-ins.png"/>
                </div>
                <a oldhref="http://sourceconsulting.com/shipping-insurance">
                    Shipping Insurance<br/>
                    Savings Calculator
                </a>
            </div>
            <div class="col-sm-offset-0 col-xs-offset-2 col-sm-2 col-xs-5 tool">
                <div>
                    <img src="/images/splash/t-savings.png"/>
                </div>
                <a oldhref="http://sourceconsulting.com/savings-checklist">
                    Savings<br/>
                    Checklist
                </a>
            </div>
        </div>
    </div>

    <div class="section silver">
        <h2 style='padding-bottom:0;'>We&rsquo;ve Grown Up</h2>
        <table id='chicks'>
            <tr>
                <td class='tdi'>
                    <div class='icon'>
                        <img src='/images/splash/c-egg.png'/>
                    </div>
                </td>
                <td>
                    <hr/>
                </td>
                <td class='tdi'>
                    <div class='icon'>
                        <img src='/images/splash/c-chick.png'/>
                    </div>
                </td>
                <td>
                    <hr/>
                </td>
                <td class='tdi'>
                    <div class='icon'>
                        <img src='/images/splash/c-rooster.png'/>
                    </div>
                </td>
            </tr>
        </table>

        <article>
            <p>
                Now that we are all grown up, we couldn&rsquo;t be more excited about
                this new era for Lojistic and our clients. With the combination
                of services and focus on innovation, we&rsquo;re all poised for another
                great decade-and beyond.
            </p>
            <p>
                But we&rsquo;ll never forget the journey that brought us this far.
                Many successes to celebrate; many failures to learn from.
                We all have our awkward growth years, right?! In that spirit,
                we asked some of our team to give us a glimpse into an awkward
                phase of their growth.
            </p>
        </article>

        <h2>Here Are A Few Of Our Team's Most Dramatic Improvements</h2>
        <div id='team'>
            <div class='col-sm-6'>
                <div id="luke" class="slider">
                    <div class="s-a"></div>
                    <div class="s-b"></div>
                </div>
            </div>
            <div class='col-sm-6'>
                <div id="jared" class="slider">
                    <div class="s-a"></div>
                    <div class="s-b"></div>
                </div>
            </div>
            <div class='col-sm-6'>
                <div id="salik" class="slider">
                    <div class="s-a"></div>
                    <div class="s-b"></div>
                </div>
            </div>
            <div class='col-sm-6'>
                <div id="steve" class="slider">
                    <div class="s-a"></div>
                    <div class="s-b"></div>
                </div>
            </div>
            <div class='col-sm-6'>
                <div id="tan" class="slider">
                    <div class="s-a"></div>
                    <div class="s-b"></div>
                </div>
            </div>
            <div class='col-sm-6'>
                <div id="bryan" class="slider">
                    <div class="s-a"></div>
                    <div class="s-b"></div>
                </div>
            </div>
            <div class='col-sm-6'>
                <div id="laura" class="slider">
                    <div class="s-a"></div>
                    <div class="s-b"></div>
                </div>
            </div>
            <div class='col-sm-6'>
                <div id="rich" class="slider">
                    <div class="s-a"></div>
                    <div class="s-b"></div>
                </div>
            </div>
        </div>
    </div>

    <div class='section'>
        <h2>
            So Why The Name Change?
        </h2>
        <article>
            <p>
                When we started the company, we were in such a hurry to start
                saving you money that we just picked a name and stuck with it.
                Seriously - we were sitting in a coffee shop filling out an
                incorporation document and we said,
                &quot;Sure, Source Consulting. That&rsquo;ll work.&quot;
            </p>
            <p>
                Since then we&rsquo;ve built a lot of equity and great relationships
                under the Source Consulting flag, but as we arrive at a decade
                of service, we realize there is still room to grow. We decided to
                step back and really think about our vision for the next decade
                and beyond. With Lojistic, we have a brand identity that fully
                captures the spirit of this vision.
            </p>
        </article>
        <img id='logo-slogan' src='/images/splash/logo-slogan.png'/>
    </div>

    <div class='section silver'>
        <h2>
            What&rsquo;s In A Company Name?
        </h2>
        <article>
            <p>
                A name should be an inspiring representation of who you are
                and what you contribute to the world. No, it&rsquo;s not everything,
                but it&rsquo;s important. Entering our second decade as a company,
                we felt we could communicate our identity more clearly and
                powerfully.
            </p>
            <p>
                The name Lojistic speaks to what we think, type, talk, and
                dream about every day.
            </p>
            <p>
                Okay, and how about that fancy new tagline?
            </p>
            <p>
                So flattered that you noticed. Indeed, we&rsquo;re also debuting
                a tagline - Send Costs Packing - as our new motto to live by.
                Our company will always center on one core principle:
                reducing your shipping costs. No opportunity to save is
                too small.
            </p>
            <p>
                The new company name and tagline are a dynamic duo that
                represent our high-tech and effective ways to Send Costs
                Packing.
            </p>
        </article>
    </div>

    <div style="display:none">
        <div id="slider-handle-proto">
            <img class="slider-handle" src="/images/splash/slider-handle2.png"/>
        </div>
    </div>

@stop