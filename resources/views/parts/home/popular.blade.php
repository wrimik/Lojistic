<!-- popular stuff -->
<section>
    <div class="container">
        <h2 class="text-center">Tools &rsquo;n Reports &rsquo;n Stuff</h2>
        <div class="row same-height-parent">
            <div class="col-sm-4">
                @include('parts.home.panel', [
                    'title' => 'UPS &amp; FedEx<br/>Rates Calculator',
                    'url' => '/shipping-costs-calculators/fedex-ups-rates-calculator/',
                    'eloji' => 'eloji-calc',
                    'btnText' => 'CREATE A CUSTOM RATE SHEET'
                ])
            </div>
            <div class="col-sm-4">
                @include('parts.home.panel', [
                    'title' => 'UPS &amp; FedEx <br>Rate Comparison',
                    'url' => '/shipping-costs-calculators/fedex-ups-rate-comparison-tool/',
                    'eloji' => 'eloji-calc-compare',
                    'btnText' => 'COMPARE CARRIER RATES'
                ])
            </div>
            <div class="col-sm-4">
                @include('parts.home.panel', [
                    'title' => 'Dimensional <br>Weight Calculator',
                    'url' => '/shipping-costs-calculators/fedex-ups-ground-dim-calculator/',
                    'eloji' => 'eloji-dim',
                    'btnText' => 'SEE THE IMPACT OF DIM CHARGES'
                ])
            </div>
        </div>
        <div class="row same-height-parent">
            <div class="col-sm-4">
                @include('parts.home.panel', [
                    'title' => '5 Secrets UPS &amp; FedEx <br>Don\'t Want You To Know',
                    'url' => '/white-papers/5-secrets-ups-and-fedex-dont-want-you-to-know',
                    'imgSrc' => '/images/UPS-FedEx-5Secrets.png',
                    'btnText' => 'GET THE 5 SECRETS'
                ])
            </div>
            <div class="col-sm-4">
                @include('parts.home.panel', [
                    'title' => 'UPS &amp; FedEx <br> General Price Increases',
                    'url' => '/white-papers/general-price-increase',
                    'imgSrc' => '/images/GPI.png',
                    'btnText' => 'SEE THE GPI HISTORY'
                ])
            </div>
            <div class="col-sm-4">
                @include('parts.home.panel', [
                    'title' => 'UPS &amp; FedEx <br>Fuel Surcharges Report',
                    'url' => '/white-papers/fuel-surcharge',
                        'imgSrc' => '/images/Fuel_Surcharge.png',
                    'btnText' => 'FUEL SURCHARGE HISTORY'
                ])
            </div>
        </div>
    </div>
</section>
<!-- popular stuff end-->
