<div class="col-sm-7">
    <h2 class="text-left">Holla At Us:</h2>
    <div class="row">
        <div class="col-sm-6">
            <b class="flatGrey">(800) 783-5753</b>
            <br/>
            <br/>
            <b class="navy">Lojistic Mailing Address</b>
            <br/>
            <br/>
            3200 Park Center Drive <br/>
            Suite 500 <br/>
            Costa Mesa, CA 92626
        </div>
        <div class="col-sm-6">
            <a href="mailto:info@lojistic.com">info@lojistic.com</a>
            <br/>
            <br/>
            <b class="navy">Lojistic's Digits</b>
            <br/>
            <br/>
            Local: (949) 398-6454 <br/>
            eFax: (714) 333-9356
            <br/>
            <br/>
        </div>
    </div>
</div>
<div class="col-sm-5">
    <h2 class="text-left">Request A Holla Back:</h2>
    @include('parts.hubspot-form', array(
            'thankyouPage' => '/thank-you',
            'intent' => 'contact',
            'howCanWeHelp' => array(
                   'Sales'=> 'I want to talk to someone who knows a lot of ship',
                   'Support'=> 'I need customer support',
                   'Billing'=> 'Send me to billing',
                   'Products & Services'=> 'I have a question about your products or services',
                   'selected "Lonely" from contact form'=> 'I just get lonely',
                   'Web'=> 'Your web team didn\'t anticipate my needs'
                ),
            'btnTxt' => 'SEND',
            'formID' => '719f157e-93c9-4b23-95a9-5d13d9ee23d7'
        )
    )
</div>