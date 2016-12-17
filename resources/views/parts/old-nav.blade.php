@include('parts.snippets.define-logo-svg')
<!-- side nav (small screens) -->
<div id="side-nav">
    <a href="http://www.lojistic.com">
        @include('parts.snippets.logo-svg', ["width" => '210'])
    </a>
    <div>
        <div class="sn-toggle">
            <span></span> SIGN IN
        </div>
        <div class="sn-links">
            <a href="https://shipping.lojistic.com/">
                Intelliship <br>Shipping Software
            </a>
            <a target="_blank" href="https://data.lojistic.com/">
                DATADOT <br>Audit Reporting
            </a>
    </div>
    </div>
    <div>
        <div class="sn-toggle">
            <span></span> SOLUTIONS
        </div>
        <div class="sn-links">
            <a href="/parcel-freight-bill-audit">
                Parcel &amp; Freight Audit
            </a>
            <a href="/carrier-contract-negotiation">
                Carrier Negotiation
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
        <div class="sn-toggle">
            <span></span> ABOUT LOJISTIC
        </div>
        <div class="sn-links">
            <a href="/lojistic">Our Story</a>
            <a href="/about-lojistic">About Lojistic</a>
            <a href="/reduce-shipping-costs">Cost Reduction Services</a>
            <a href="/lojistic-pricing">Pricing</a>
            <a href="/lojistic-referral-program">Referral Partner Program</a>
            <a href="/freight-news-events">News &amp; Events</a>
            <a href="/lojistic-careers">Careers</a>
        </div>
    </div>
    <div>
        <div class="sn-toggle">
            <span></span> RESOURCES
        </div>
        <div class="sn-links">
            <a href="/audisee/instant-parcel-audit">Audisee, Instant Audit</a>
            <a href="/shipping-insurance#insurance-calculator">Insurance Cost Calculator</a>
            <a href="/shipping-costs-calculators/fedex-ups-rates-calculator">FedEx &amp; UPS Rates Calculator</a>
            <a href="/shipping-costs-calculators/fedex-ups-rate-comparison-tool">FedEx &amp; UPS Rates Comparison
                Tool</a>
            <a href="/reduce-shipping-costs">Cost Reduction Services</a>
            <a href="/white-papers">White Papers</a>
        </div>
    </div>
    <div>
        <div class="sn-toggle">
            <span></span> CONTACT
        </div>
        <div class="sn-links">
            <a href="tel:8007835753">(800) 783-5753</a>
            <a href="mailto:info@lojistic.com">Email Us</a>
            <a href="/contact-lojistic">Contact Info</a>
        </div>
    </div>
    <div>
        <div class="sn-toggle">
            <span></span> SOCIAL
        </div>
        <div class="sn-links">
            <a target="_blank" href="https://plus.google.com/+Lojistic">Google+</a>
            <a target="_blank" href="http://www.linkedin.com/company/lojistic">LinkedIn</a>
            <a target="_blank" href="https://www.twitter.com/LojisticUSA">Twitter</a>
            <a target="_blank" href="https://www.facebook.com/LojisticUSA">Facebook</a>
            <a target="_blank" href="https://www.lojistic.com/blog">Blog</a>
        </div>
    </div>
</div>
<div id="sn-overlay"></div>
<!-- end side nav (small screens) -->

<!-- start primary nav -->
<div id="header">
    <div id="social-nav">
        <div>
            <span>Call Us: (800) 783-5753</span>

            <div>
                <a id="google_plus" href="https://plus.google.com/+Lojistic" target="_blank"></a>
                <a id="linked_in" href="http://www.linkedin.com/company/lojistic" target="_blank"></a>
                <a id="twitter" href="https://www.twitter.com/LojisticUSA" target="_blank"></a>
                <a id="facebook" href="https://www.facebook.com/LojisticUSA" target="_blank"></a>
                <a id="sc_blog" href="https://www.lojistic.com/blog"></a>
                <a id="intelliship_login" href="https://shipping.lojistic.com" target="_blank"></a>
                <a id="source_reports" href="https://data.lojistic.com" target="_blank"></a>
            </div>
        </div>
    </div>
    <div id="company-nav">
        <div>
            <a id="lojistic-logo" href="http://www.lojistic.com">
                @include('parts.snippets.logo-svg', ["width" => '248'])
            </a>

            <div id='nav_expand_button'></div>
            <div id="company-links">
                <div class="nav_parent">
                    <a href="/about-lojistic">About Us</a>

                    <div class="nav_child"> <!-- dropdown -->
                        <a href="/lojistic">Our Story</a> <br/>
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

                    <div class="nav_child"> <!-- dropdown -->
                        <a href="/audisee/instant-parcel-audit">Audisee, Instant Audit</a>
                        <a href="{{ URL::route('dim-calculator') }}">Dimensional Weight Calculator</a> <br/>
                        <a href="/shipping-insurance#insurance-calculator">Insurance Cost Calculator</a> <br/>
                        <a href="/shipping-costs-calculators/fedex-ups-rates-calculator">FedEx &amp; UPS Rates
                            Calculator</a> <br/>
                        <a href="/shipping-costs-calculators/fedex-ups-rate-comparison-tool">FedEx &amp; UPS Rates
                            Comparison Tool</a> <br/>
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
                <a href="http://www.lojistic.com" id="logo-small"> <!-- scroll/tablet logo -->
                    @include('parts.snippets.logo-svg', ["width" => 169])
                    <b>
                        <img src="/images/phone-small.png" alt="Call Us"/>
                        (800) 783-5753
                    </b>
                </a>

                <div id="hamburger">
                    <div id="hamburger-stripes">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
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
<!-- end nav -->
