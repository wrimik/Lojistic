<!-- Carrier-Rate Forms -->
<!-- Section A -->
    <div class="comparison-section">
        <div class="comparison-label red">
            A
        </div>
        <div class="comparison-form">
            @include('parts.forms.parts.rates-comparison-chunk', ['which'=>'A'])
        </div>
    </div>
<!-- /Section A -->

<!-- Section B -->
    <div class="comparison-section">
        <div class="comparison-label flatBlue">
            B
        </div>
        <div class="comparison-form">
            @include('parts.forms.parts.rates-comparison-chunk', ['which'=>'B'])
        </div>
    </div>
<!-- /Section B -->
<!-- Contact Form -->
    <div class="contact-form">

        @include('parts.forms.contact-info',[
                    'howCanWeHelp'  =>  'Custom Rate Quote (This comment as been auto generated)',
                    'intent'        =>  'Rates Calculator Comparison'
                    ])
    </div>
<!-- /Contact Form -->

<!-- /Carrier-Rate Forms -->
<div class="row">
    <input class="col-md-6 col-md-offset-3 col-sm-offset-2 col-sm-8 col-xs-offset-1 col-xs-10 btn btn-primary"
           data-target="#submit-scroll-stop" type="submit" value="COMPARE RATES">
</div>
<!-- This is where we stop scrolling on submit -->
<div id="submit-scroll-stop"></div>


<!-- Peet Nochio!!! -->
<div class="peetnochio" style="display:none">
    <img src="/svgs/peetnochio-face.svg" alt="Never tell a lie">

    <div class="peetnochio-nose transition"></div>
</div>
<!-- /Peet Nochio!!! -->