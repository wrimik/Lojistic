
<!-- global footer begin -->
<section id="footer">
    <div class="container" id="footer_content">
        <div class="col-sm-3 col-xs-12">
            <b>About Lojistic</b>
            <a href="/lojistic">Our Story</a>
            <a href="/about-lojistic">Meet Lojistic</a>
            <a href="/reduce-shipping-costs">Cost Reduction Services</a>
            <a href="/lojistic-pricing">Pricing</a>
            <a href="/lojistic-referral-program">Referral Partners</a>
            <a href="/freight-news-events">News &amp; Events</a>
            <a href="/lojistic-careers">Careers</a>
            <a href="/customer-testimonials">Testimonials</a>
        </div>
        <div class="col-sm-3 col-xs-12">
            <b>Solutions</b>
            <a href="/parcel-freight-bill-audit">Parcel &amp; Freight Audit</a>
            <a href="/carrier-contract-negotiation">Carrier Rate Negotiation</a>
            <a href="/freight-management">Freight Management</a>
            <a href="/shipping-insurance">Shipping Insurance</a>
            <a href="/shipping-software">Shipping Software</a>
            <a href="/wholesale-ltl-rate-marketplace">Wholesale Freight Rates</a>
            <a href="/savings-checklist">Savings Checklist</a>
        </div>
        <div class="col-sm-3 col-xs-12">
            <b>Resources</b>
            <a href="/audisee/instant-parcel-audit">Audisee, Instant Audit</a>
            <a href="/shipping-costs-calculators">Calculators</a>
            <a href="/reduce-shipping-costs">Cost Reduction Services</a>
            <a href="/white-papers">White Papers</a>
            <a href="/blog/">Blog</a>
            <a href="/freight-shipping-faqs">FAQ</a>
            <a href="/sitemap">Site Map</a>
            <a href="/privacy-policy">Privacy Policy</a>
        </div>
        <div class="col-sm-3 col-xs-12 active" id="footer_form">
            <br class="visible-xs-inline"/>
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
        &copy; {{ date('Y') }} Lojistic
        <span class="hidden-xs">&bull;</span><br class="visible-xs-inline"/>
        Call Us: 800-783-5753<br><br class="visible-xs-inline"/>
        3200 Park Center Drive <span class="hidden-xs">&bull;</span><br class="visible-xs-inline"/>
        Suite 500 <span class="hidden-xs">&bull;</span><br class="visible-xs-inline"/>
        Costa Mesa, CA 92626<br class="visible-xs-inline"/>
        <br>
        <img src="/images/inc500_footer.png" alt="Inc 500"/>
    </div>
</section>



<div id="side-nav" :class="state" v-cloak>
    <div class="menu">
        <!-- logo -->
        <a href="https://www.lojistic.com/">
            @include('parts.snippets.logo-svg', ["width" => '210'])
        </a>
        <div v-for="group in groups" :class="group.state">
            <div class="sn-toggle" v-on:click="toggleGroupState($index)">
                <span></span>
                @{{ group.name }}
            </div>
            <div v-for="link in group.links" class="sn-links">
                <a :href="link.url" :target="target(link.url)" v-html="link.name">
                </a>
            </div>
        </div>
    </div>
    <div :class="menuMode, menuState" v-on:click="close()" id="sn-overlay"></div>
</div>

{!! Html::script('/js/2016/libraries.js?'.v()) !!}
{!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.1/vue.js') !!}
{!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.1.2/parsley.min.js') !!}

<script src="//www.google.com/jsapi"></script> <!-- used in charts -->
{!! Html::script('/js/all.js?'.v()) !!}

@yield('scripts')
@include('google.tag-manager')
{{--@if ( Config::get('app.debug') )--}}
  {{--<script type="text/javascript">--}}
    {{--document.write('<script src="//localhost:35729/livereload.js?snipver=1" type="text/javascript"><\/script>')--}}
  {{--</script>--}}
{{--@endif--}}

</body>
</html>