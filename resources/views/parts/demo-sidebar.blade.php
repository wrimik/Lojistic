<div id="sidebar" class="sidebar">
    <ul class="panels ul">
        <li class="demo-form">
            <div class="header">
                <h4>Online Savings Demo</h4>
                <h6>Quick. Simple. Effective.</h6>
            </div>

            <p>Our Savings Demo is quick and will demonstrate how to significantly reduce your shipping costs.</p>
            @include(
            'parts.hubspot-form',  
                array( 
                    'thankyouPage' => '/thank-you', 
                    'intent' => 'Savings Demo',
                    'btnTxt' => 'Contact', 
                    'formID' => '719f157e-93c9-4b23-95a9-5d13d9ee23d7'
                )
            )
    </ul>
</div>    