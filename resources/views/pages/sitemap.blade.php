@extends('layouts.flat')
@section('meta')
    @include('layouts.inc.flat-meta', [
        'title' => 'Sitemap - Lojistic',
        'description' => 'Sitemap',
        'keywords' => '',
    ])
@overwrite
@section('content')
    <section class="white">
        <div class="container">
            <h1 class="text-center">Site Map</h1>
            <div class="col-sm-4">
                <h3>Discover Lojistic</h3>
                <ul class="accessorial-charges checkmarks ul">
                    <li><a href="/about-lojistic">The Company</a></li>
                    <li><a href="/lojistic">Our Story</a></li>
                    <li><a href="/reduce-shipping-costs">Cost Reduction Services</a></li>
                    <li><a href="/1000-dollar-promo">$1,000 In Your Pocket Promo</a></li>
                    <li><a href="/lojistic-referral-program">Referral Program</a></li>
                    <li><a href="/lojistic-pricing">Pricing</a></li>
                    <li><a href="/lojistic-careers">Careers</a></li>
                    <li><a href="/lojistic-corporate-citizenship">Corporate Citizenship</a></li>
                    <li><a href="/freight-news-events">News & Events</a></li>
                    <li><a href="/blog">Blog</a></li>
                    <li><a href="/freight-shipping-faqs">FAQ</a></li>
                    <li><a href="/contact-lojistic">Contact Lojistic</a></li>
                    <li><a href="/customer-testimonials">Customer Testimonials</a></li>
                </ul>
            </div>
            <div class="col-sm-4">
                <h3>Transportation Solutions</h3>
                <ul class="accessorial-charges checkmarks ul">
                    <li><a href="/parcel-freight-bill-audit">Parcel &amp; Freight Auditing</a>
                        <br/>
                        <a class="fs-14 flatBlue" href="/parcel-audit">Parcel Audit</a> |
                        <a class="fs-14 flatBlue" href="/parcel-audit/ups-audit">UPS Audit</a> |
                        <a class="fs-14 flatBlue" href="/parcel-audit/fedex-audit">FedEx Audit</a>
                    </li>
                    <li><a href="/carrier-contract-negotiation">Carrier Negotiation</a></li>
                    <li><a href="/freight-management">Freight Management Services</a></li>
                    <li>
                        <a href="/shipping-software">Shipping &amp; Transportation Software</a>
                        <br>
                        <a class="fs-14 flatBlue" href="/shipping-software/sign-up">Sign Up</a> |
                        <a class="fs-14 flatBlue" href="https://shipping.lojistic.com/">Sign In</a>
                    </li>
                    <li><a href="/halo">Package Tracking &amp; Visibility</a></li>
                    <li><a href="/shipping-costs-calculators">Shipping Costs Calculators</a></li>
                    <li><a href="/carrier-rate-analysis">{{ date('Y') }} Rate Increase Analysis</a></li>
                    <li><a href="/savings-checklist">Savings Checklist</a></li>
                </ul>
            </div>
            <div class="col-sm-4">
                <h3>Resource Library</h3>
                <ul class="accessorial-charges checkmarks ul">
                    <li><a href="/white-papers">White Papers</a></li>
                    <li><a href="/white-papers/5-secrets-ups-and-fedex-dont-want-you-to-know">5 Secrets</a></li>
                    <li><a href="/white-papers/general-price-increase">General Price Increase</a></li>
                    <li><a href="/white-papers/fuel-surcharge">UPS &amp; Fedex Fuel Surcharge History</a></li>
                    <li><a href="/parcel-freight-audit-demo">View Savings Demo</a></li>
                    <li><a href="/shipping-costs-calculators">Shipping Cost Calculators</a></li>
                    <li><a href="{{ route('rate-calculator') }}">Carrier Rates Calculator</a>
                    </li>
                    <li><a href="{{ route('comparison-calculator') }}">UPS &amp; FedEx Rates
                            Comparison Calculator</a></li>
                    <li><a href="{{ route('dim-calculator') }}">Dimensional Weight Fee Cost
                            Calculator</a></li>
                </ul>
            </div>
        </div>
    </section>
    {{--<section class="silver">--}}
        {{--<div class="container">--}}
            {{--<h2>Great Articles</h2>--}}

            {{--<div class="col-sm-4">--}}
                {{--<ul class="accessorial-charges checkmarks">--}}
                    {{--<li><a href="/model-cargo-ships-and-more">Model Cargo Ships and More!</a></li>--}}
                    {{--<li><a href="/freight-trade-and-shipping-history">Freight & Shipping History of the Transcontinental--}}
                            {{--Railroad</a></li>--}}
                    {{--<li><a href="/parcels-packages-and-more-the-history-of-the-us-postal-service">USPS History</a></li>--}}
                    {{--<li><a href="/freight-trade-and-shipping-history">Freight Trade & Shipping History</a></li>--}}
                    {{--<li><a href="/from-land-to-sea-types-of-cargo">From Land To Sea; Types of Cargo</a></li>--}}
                    {{--<li><a href="/shipping-by-sea-a-look-at-bodies-of-water-around-the-world">Shipping By The Sea: A--}}
                            {{--Look At Bodies of Water</a></li>--}}
                    {{--</ul>--}}
            {{--</div>--}}
            {{--<div class="col-sm-4">--}}
                {{--<ul>--}}
                    {{--<li><a href="/history-of-shipping-and-trade-along-the-panama-canal">Histrory of Shipping and Trade--}}
                            {{--Along the Panama Canal</a></li>--}}
                    {{--<li><a href="/freight-audit-services-learning-about-standard-carrier-alpha-codes">Freight Audit--}}
                            {{--Services: Learning About Standard Carrier Alpha Codes</a></li>--}}
                    {{--<li><a href="/dollars-for-your-parcel-the-history-of-bartering">Dollars for Your Parcel - The--}}
                            {{--History of Bartering</a></li>--}}
                    {{--<li><a href="/10-ways-to-help-save-the-oceans">10 Ways To Help Save The Oceans</a></li>--}}
                    {{--<li><a href="/recycling-resources-for-freight-packaging-and-more">Recycling Resources for Freight--}}
                            {{--Packaging and More</a></li>--}}
                {{--</ul>--}}
            {{--</div>--}}
            {{--<div class="col-sm-4">--}}
                {{--<ul>--}}
                    {{--<li><a href="/history-of-freight-transportation">History of Freight Transportation</a></li>--}}
                    {{--<li><a href="/model-trains-and-more-freight-hobbies">Model Trains and More Freight Hobbies</a></li>--}}
                    {{--<li><a href="/shipping-to-north-america-leif-eriksons-place-in-history">Shipping to North America ---}}
                            {{--Leif Erikson's Place in History</a></li>--}}
                    {{--<li><a href="/famous-maritime-ships-and-their-freight-cargo">Famous Maritime Ships and Their Freight--}}
                            {{--Cargo</a></li>--}}
                    {{--<li><a href="/transportation-and-shipping-during-war">Transportation and Shipping During War</a>--}}
                    {{--</li>--}}
                    {{--<li><a href="/about-the-author-tyler-glassman">Author Bio</a></li>--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
@stop