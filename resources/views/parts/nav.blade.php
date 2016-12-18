<!-- #side-nav lives in the footer, bro -->
<nav id="headernav" :class="[headerState, menuState]" class="navbar">
    <div :class="[menuState, menuMode]" class="container-fluid white">
        <!-- logo -->
        <a rel="nofollow" href="https://www.lojistic.com/">
            @include('parts.snippets.logo-svg', ["width" => '210'])
        </a>
        <!-- white nav -->
        <ul id="nav-general" class="nav navbar-nav navbar-right">
            <li><span class="flatGrey">SEND COSTS PACKING</span></li>
            <li>
                <span class="flatGrey">
                    <i class="eloji eloji-phone-alt"></i>
                    (800) 783-5753
                </span>
            </li>
            <li> <!-- shipping cost calculators -->
                <ul class="nav-dropdown">
                    <li role="presentation" class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown"
                           rel="nofollow" href="#" role="button" aria-haspopup="true"
                           aria-expanded="false">
                            Shipping Cost Calculators <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a rel="nofollow" href="/audisee">Audisee, Instant Audit</a></li>
                            <li><a rel="nofollow" href="/shipping-costs-calculators/fedex-ups-ground-dim-calculator">Dimensional Weight Calculator</a></li>
                            <li><a rel="nofollow" href="/shipping-insurance#insurance-calculator">Insurance Cost Calculator</a></li>
                            <li><a rel="nofollow" href="/shipping-costs-calculators/fedex-ups-rates-calculator">FedEx &amp; UPS Rates Calculator</a></li>
                            <li><a rel="nofollow" href="/shipping-costs-calculators/fedex-ups-rate-comparison-tool">FedEx &amp; UPS Comparison Tool</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a class="nav-bright" rel="nofollow" href="/shipping-costs-calculators">Shipping Cost Calculators</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li> <!-- shipping resources -->
                <ul class="nav-dropdown">
                    <li role="presentation" class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown"
                           rel="nofollow" href="#" role="button" aria-haspopup="true"
                           aria-expanded="false">
                            Shipping Resources <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a rel="nofollow" href="/white-papers/5-secrets-ups-and-fedex-dont-want-you-to-know">5 Secrets Report</a></li>
                            <li><a rel="nofollow" href="/white-papers/general-price-increase">{{ date('Y') }} General Price Increase</a></li>
                            <li><a rel="nofollow" href="/white-papers/fuel-surcharge">Fuel Surcharge Report</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a rel="nofollow" href="/white-papers">All White Papers</a></li>
                            <li><a rel="nofollow" href="/shipping-resource-guide">Shipping Resource Guide</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li> <!-- about us -->
                <ul class="nav-dropdown">
                    <li role="presentation" class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" rel="nofollow" href="#" role="button" aria-haspopup="true"
                           aria-expanded="false">
                            About Us <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-header">Company:</li>
                            <li><a rel="nofollow" href="/lojistic">Our Story</a></li>
                            <li><a rel="nofollow" href="/about-lojistic">Meet Lojistic</a></li>
                            <li><a rel="nofollow" href="/lojistic-careers">Careers</a></li>
                            <li><a rel="nofollow" href="/contact-lojistic">Contact Lojistic</a></li>
                            <li role="separator" class="divider"></li>
                            <li class="dropdown-header">Media:</li>
                            <li><a rel="nofollow" href="/blog">Blog</a></li>
                            <li><a rel="nofollow" href="/videos">Videos</a></li>
                            <li role="separator" class="divider"></li>
                            <li class="dropdown-header">Other Stuff:</li>
                            <li><a rel="nofollow" href="/20-20">20-20 Campaign</a></li>
                            <li><a rel="nofollow" href="/reduce-shipping-costs">Cost Reduction Services</a></li>
                            <li><a rel="nofollow" href="/lojistic-pricing">Pricing</a></li>
                            <li><a rel="nofollow" href="/customer-testimonials">Testimonials</a></li>
                            <li><a rel="nofollow" href="/lojistic-referral-program">Referral Partner Program</a></li>
                            <li role="separator" class="divider"></li>
                            <li class="dropdown-header">Social:</li>
                            <li class="dropdown-social">
                                @include('parts.snippets.social-links')
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li> <!-- client login -->
                <ul class="nav-dropdown">
                    <li role="presentation" class="dropdown">
                        <a class="btn btn-default btn-sm flatGrey dropdown-toggle" data-toggle="dropdown" rel="nofollow" href="#"
                           role="button" aria-haspopup="true"
                           aria-expanded="false">
                            CLIENT LOGIN &nbsp;<span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a target="_blank" rel="nofollow" href="https://data.lojistic.com/">DATADOT Login</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a target="_blank" rel="nofollow" href="https://shipping.lojistic.com/">Intelliship Login</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- product nav -->
    <div class="silver">
        <div class="container-fluid">
            <div id="scroll-logo">
                <a rel="nofollow" href="https://www.lojistic.com/">
                    @include('parts.snippets.logo-svg', ["width" => '210'])
                </a>
                <span><img alt="Call Us" src="/images/phone-small.png"> (800) 783-5753</span>
            </div>
            <div id="product-nav">
                <ul class="nav navbar-nav">
                    <li><a class="nav-navy" rel="nofollow" href="/parcel-freight-bill-audit">Parcel &amp; <br>Freight Audit</a></li>
                    <li><a class="nav-grey" rel="nofollow" href="/carrier-contract-negotiation">Carrier <br> Negotiation</a></li>
                    <li><a class="nav-seafoam" rel="nofollow" href="/wholesale-ltl-rate-marketplace">Wholesale <br> LTL Rates</a></li>
                    <li><a class="nav-orange" rel="nofollow" href="/freight-management">Freight <br> Management</a></li>
                    <li><a class="nav-royal" rel="nofollow" href="/shipping-insurance">Shipping <br>Insurance</a></li>
                    <li><a class="nav-green" rel="nofollow" href="/shipping-software">Shipping <br>Software</a></li>
                    <li><a class="nav-bright" rel="nofollow" href="/audisee">Audisee <br>Instant Audit</a></li>
                </ul>
            </div>
            <div id="hamburger" v-on:click="toggleMenu()" :class="[menuState]">
                <div id="hamburger-stripes">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </div>
</nav>