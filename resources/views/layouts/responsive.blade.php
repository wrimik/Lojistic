<!DOCTYPE html>
<html>
    <head>
        <title>&#128230; {{ $title }}</title>
        <meta name="theme-color" content="#164260"/>
        <meta name="msapplication-navbutton-color" content="#164260" />
        <meta name="description" content="{{ $description }}" />
        <meta name="keywords" content="{{ $keywords }}" />
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <meta name="google-site-verification" content="eBYNXDV6ZHulQJJkGqz9w_aSKqu1zgBreW7OqiTGU9Y" />
        <meta name="msvalidate.01" content="151CF70A3ADC6AE6546B13B38C93FE5C" />
        <link rel="icon" type="image/png" href="{{ URL::asset('favicon.png') }}" />
        <link rel="shortcut icon" type="image/png" href="{{ URL::asset('favicon.png') }}" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        @if( $legacy == true )
            <link rel="stylesheet" type="text/css" href="/css/minify.css" />
        @endif
        {!! Html::style('/css/common.css?v='.v())  !!}
        <link href="https://plus.google.com/104242186661397386656" rel="publisher" />
        {{--<script src="//js.hsforms.net/forms/current.js"></script>--}}
        {!! Html::script('//www.google.com/jsapi')  !!}
        {!! Html::script('/js/2016/app.min.js')  !!}
        @yield('styles')
        <script type="text/javascript">var switchTo5x = true;</script>
    </head>
    <body id="top" class="{{ $bodyClass }}">
        <div id="side-nav">
            <img src="'/images/lojistic.png'"/>
            <div>
                <div><span></span> SOLUTIONS</div>
                <div class="sn-links">
                    <a href="/parcel-freight-bill-audit">
                        Parcel &amp; Freight Audit
                    </a>
                    <a href="/carrier-contract-negotiation">
                        Carrier  Negotiation
                    </a>
                    <a href="/freight-management">
                        Freight Management
                    </a>
                    <a href="/shipping-insurance">
                        Shipping Insurance
                    </a>
                    <a class='nav_r2' href="/shipping-software">
                        Shipping Software
                    </a>
                    <a class='nav_r2' href="/halo">
                        Tracking Software
                    </a>
                    <a class='nav_r2' href="/savings-checklist">
                        Savings Checklist
                    </a>
                </div>
            </div>
            <div>
                <div><span></span> ABOUT LOJISTIC</div>
                <div class="sn-links">
                    <a href="/about-lojistic">Meet Lojistic</a>
                    <a href="/reduce-shipping-costs">Cost Reduction Services</a>
                    <a href="/lojistic-pricing">Pricing</a>
                    <a href="/lojistic-referral-program">Referral Partner Program</a>
                    <a href="/freight-news-events">News &amp; Events</a>
                    <a href="/lojistic-careers">Careers</a>
                </div>
            </div>
            <div>
                <div><span></span> RESOURCES</div>
                <div class="sn-links">
                    <a href="/shipping-insurance">Insurance Cost Calculator</a>
                    <a href="/shipping-costs-calculators/fedex-ups-rates-calculator">FedEx &amp; UPS Rates Calculator</a>
                    <a href="/shipping-costs-calculators/fedex-ups-rate-comparison-tool">FedEx &amp; UPS Rates Comparison Tool</a>
                    <a href="/reduce-shipping-costs">Cost Reduction Services</a>
                    <a href="/white-papers">White Papers</a>
                    <a target="_blank" href='https://data.lojistic.com'>Data.Lojistic</a>
                </div>
            </div>
            <div>
                <div><span></span> CONTACT</div>
                <div class="sn-links">
                    <a href="tel:8007835753">(800) 783-5753</a>
                    <a href="mailto:info@lojistic.com">Email Us</a>
                    <a href="/contact-lojistic">Contact Info</a>
                </div>
            </div>
            <div>
                <div><span></span> SOCIAL</div>
                <div class="sn-links">
                    <a target="_blank" href="https://plus.google.com/104242186661397386656/posts">Google+</a>
                    <a target="_blank" href="http://www.linkedin.com/company/lojistic">LinkedIn</a>
                    <a target="_blank" href="https://www.twitter.com/LojisticUSA">Twitter</a>
                    <a target="_blank" href="https://www.facebook.com/LojisticUSA">Facebook</a>
                    <a target="_blank" href="https://www.lojistic.com/blog">Blog</a>
                </div>
            </div>
        </div>
        <div id="sn-overlay"></div>
            <div id="header">
                <div id="social-nav">
                    <div>
                        <span>Call Us: (800) 783-5753</span>
                        <div>
                            <a alt="Google+" id="google_plus" href="https://plus.google.com/104242186661397386656/posts" target="_blank"></a>
                            <a alt="LinkedIn" id="linked_in" href="http://www.linkedin.com/company/lojistic" target="_blank"></a>
                            <a alt="Twitter" id="twitter" href="https://www.twitter.com/LojisticUSA" target="_blank"></a>
                            <a alt="Facebok" id="facebook" href="https://www.facebook.com/LojisticUSA" target="_blank"></a>
                            <a alt="Blog" id="sc_blog" href="http://www.lojistic.com/blog" ></a>
                            <a alt="Data.Lojistic" id="source_reports" href="https://data.lojistic.com" target="_blank"></a>
                        </div>
                    </div>
                </div>
                <div id="company-nav">
                    <div>
                        <a id="lojistic-logo" href="http://www.lojistic.com">
                            <img src="{{ URL::asset('images/lojistic-logo.png') }}"/>
                        </a>
                        <div id='nav_expand_button'></div>
                        <div id="company-links">
                            <div class="nav_parent">
                                <a href="/about-lojistic">About Us</a>
                                <div class="nav_child">
                                    <a href="/about-lojistic">Meet Lojistic</a> <br/>
                                    <a href="/reduce-shipping-costs">Cost Reduction Services</a> <br/>
                                    <a href="/lojistic-pricing">Pricing</a> <br/>
                                    <a href="/lojistic-referral-program">Referral Partner Program</a> <br/>
                                    <a href="/freight-news-events">News &amp; Events</a> <br/>
                                    <a href="/lojistic-careers">Careers</a> <br/>
                                </div>
                            </div>
                            <div class="nav_parent">
                                <a href="/shipping-costs-calculators">Shipping Cost Calculators</a>
                                <div class="nav_child">
                                    <a href="{{ URL::route('dim-calculator') }}">Dimensional Weight Calculator</a> <br/>
                                    <a href="/shipping-insurance">Insurance Cost Calculator</a> <br/>
                                    <a href="/shipping-costs-calculators/fedex-ups-rates-calculator">FedEx &amp; UPS Rates Calculator</a> <br/>
                                    <a href="/shipping-costs-calculators/fedex-ups-rate-comparison-tool">FedEx &amp; UPS Rates Comparison Tool</a> <br/>
                                </div>
                            </div>
                            <div class="nav_parent">
                                <a href="/reduce-shipping-costs">Cost Reduction Services</a>
                            </div>
                            <div class="nav_parent">
                                <a href="/white-papers">White Papers</a>
                            </div>
                            <div class="nav_parent">
                                <a href="/contact-lojistic">Contact</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="product-nav">
                    <div>
                        <div>
                            <a href="http://www.lojistic.com" id="logo-small">
                                <img src="{{ URL::asset('images/lojistic-logo.png') }}"/>
                                <b>
                                    <img src="/images/phone-small.png" />
                                    (800) 783-5753
                                </b>
                            </a>
                            <div id="hamburger">
                                <img src="/images/menu.png"/>
                            </div>
                            <div id="product-links">
                                <a href="/parcel-freight-bill-audit" id="nav_parcel">
                                    Parcel &amp;<br/>Freight Audit
                                    <span></span>
                                </a>
                                <a href="/carrier-contract-negotiation" id="nav_neg">
                                    Carrier<br/> Negotiation
                                    <span></span>
                                </a>
                                <a href="/freight-management" id="nav_fmi">
                                    Freight<br/> Management
                                    <span></span>
                                </a>
                                <a href="/shipping-insurance" id="nav_ins">
                                    Shipping<br/> Insurance
                                    <span></span>
                                </a>
                                <a class='nav_r2' href="/shipping-software" id="nav_ship">
                                    Shipping<br/> Software
                                    <span></span>
                                </a>
                                <a class='nav_r2' href="/halo" id="nav_trac">
                                    Tracking<br/> Software
                                    <span></span>
                                </a>
                                <a class='nav_r2' href="/savings-checklist" id="nav_checklist">
                                    Savings<br/> Checklist
                                    <span></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="container">
                @yield('content')
            </div>
<div id="footer" class="stripe">
    <div id="footer_content">
        <div>
            <b>About Lojistic</b>
            <a href="/about-lojistic">Meet Lojistic</a>
            <a href="/reduce-shipping-costs">Cost Reduction Services</a>
            <a href="/lojistic-pricing">Pricing</a>
            <a href="/lojistic-referral-program">Referral Partners</a>
            <a href="/freight-news-events">News &amp; Events</a>
            <a href="/lojistic-careers">Careers</a>
            <a href="/customer-testimonials">Testimonials</a>
        </div>

        <div>
            <b>Solutions</b>
            <a href="/parcel-freight-bill-audit">Parcel &amp; Freight Audit</a>
            <a href="/carrier-contract-negotiation">Carrier Rate Negotiation</a>
            <a href="/freight-management">Freight Management</a>
            <a href="/shipping-insurance">Shipping Insurance</a>
            <a href="/shipping-software">Shipping Software</a>
            <a href="/halo/">Tracking Software</a>
            <a href="/savings-checklist">Savings Checklist</a>
        </div>
        <div>
            <b>Resources</b>
            <a href="/shipping-costs-calculators">Calculators</a>
            <a href="/reduce-shipping-costs">Cost Reduction Services</a>
            <a href="/white-papers">White Papers</a>
            <a href="/blog/">Blog</a>
            <a href="/freight-shipping-faqs">FAQ</a>
            <a href="/sitemap">Articles</a>
        </div>
        <div id="footer_form">
            <b>Talk to Us</b>
            @include(
                'parts.hubspot-form',
                array(
                    'thankyouPage' => '/thank-you',
                    'intent' => 'Footer Contact Form',
                    'btnTxt' => 'SEND',
                    'formID' => '8063c6d0-b148-401c-8b8a-2b29b186737a'
                )
            )
        </div>
    </div>
    <div id="copyright">
        &copy; <?php echo date('Y');?> Lojistic &bull; Call Us: 800-783-5753<br>
        3200 Park Center Drive &bull;
        Suite 500 &bull;
        Costa Mesa, CA 92626
        <br>
        <img src="/images/inc500_footer.png">
        <br>
        <a href="/privacy-policy">Privacy Policy</a>
        <a href="/sitemap">Site Map</a>
    </div>
</div>
</div>
@yield('scripts')
@if(strpos(url(),'lojistic.com'))
 <!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-NCWBGN"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NCWBGN');</script>
<!-- End Google Tag Manager -->
@endif
</body>
</html>