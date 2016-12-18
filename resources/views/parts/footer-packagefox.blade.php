
<!-- global footer begin -->
<section id="footer">
    <div class="container" id="footer_content">
        <div class="col-sm-3 col-xs-12">
            <b>About Lojistic</b>
            <a rel="nofollow" href="/lojistic">Our Story</a>
            <a rel="nofollow" href="/about-lojistic">Meet Lojistic</a>
            <a rel="nofollow" href="/reduce-shipping-costs">Cost Reduction Services</a>
            <a rel="nofollow" href="/lojistic-pricing">Pricing</a>
            <a rel="nofollow" href="/lojistic-referral-program">Referral Partners</a>
            <a rel="nofollow" href="/freight-news-events">News &amp; Events</a>
            <a rel="nofollow" href="/lojistic-careers">Careers</a>
            <a rel="nofollow" href="/customer-testimonials">Testimonials</a>
        </div>
        <div class="col-sm-3 col-xs-12">
            <b>Solutions</b>
            <a rel="nofollow" href="/parcel-freight-bill-audit">Parcel &amp; Freight Audit</a>
            <a rel="nofollow" href="/carrier-contract-negotiation">Carrier Rate Negotiation</a>
            <a rel="nofollow" href="/freight-management/">Freight Management</a>
            <a rel="nofollow" href="/shipping-insurance">Shipping Insurance</a>
            <a rel="nofollow" href="/shipping-software//">Shipping Software</a>
            <a rel="nofollow" href="/halo/">Tracking Software</a>
            <a rel="nofollow" href="/savings-checklist">Savings Checklist</a>
        </div>
        <div class="col-sm-3 col-xs-12">
            <b>Resources</b>
            <a rel="nofollow" href="/audisee/instant-parcel-audit">Audisee, Instant Audit</a>
            <a rel="nofollow" href="/shipping-costs-calculators">Calculators</a>
            <a rel="nofollow" href="/reduce-shipping-costs">Cost Reduction Services</a>
            <a rel="nofollow" href="/white-papers">White Papers</a>
            <a rel="nofollow" href="/blog/">Blog</a>
            <a rel="nofollow" href="/freight-shipping-faqs">FAQ</a>
            <a rel="nofollow" href="/sitemap">Articles</a>
        </div>
        <div class="col-sm-3 col-xs-12 active" id="footer_form">
            <br class="visible-xs-inline"/>
            <b>Talk to Us</b>
            @include(
                'parts.hubspot-form',
                array(
                    'thankyouPage' => '/thank-you',
                    'intent' => 'Contact',
                    'btnTxt' => 'SEND',
                    'formID' => '8063c6d0-b148-401c-8b8a-2b29b186737a'
                )
            )
        </div>
    </div>
    <div id="copyright">
        &copy; {{ date('Y') }} Lojistic
        <span class="hidden-xs">&bull;</span><br class="visible-xs-inline"/>
        Call Us: 800-783-5753<br><br class="visible-xs-inline"/>
        3200 Park Center Drive <span class="hidden-xs">&bull;</span><br class="visible-xs-inline"/>
        Suite 500 <span class="hidden-xs">&bull;</span><br class="visible-xs-inline"/>
        Costa Mesa, CA 92626<br class="visible-xs-inline"/>
        <br>
        <img src="/images/inc500_footer.png" alt="Inc 500"/>
        <br>
        <a rel="nofollow" href="/privacy-policy">Privacy Policy</a> |
        <a rel="nofollow" href="/sitemap">Site Map</a>
    </div>
</section>

{!! Html::script('/js/2016/libraries.js?'.v())  !!}
<script src="//www.google.com/jsapi"></script> <!-- used in charts -->
{!! Html::script('/js/all.js?'.v())  !!}

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
<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-6928743-1']);
//    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
    if(typeof console != "undefined") {
        console.log('Pssst. Hey. You... we\'re hiring web developers. Send your portfolio to careers@lojistic.com');
    }
</script>
</body>
</html>