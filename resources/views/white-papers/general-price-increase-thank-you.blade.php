@include('layouts.thank-you', array(
    'heading' => 'Enjoy your free General Price Increase Report!',
    'message' => ' Thank you for requesting our report UPS & FedEx General
                    Price Increase History. We hope the information will be
                    useful to you and your company. An email with a link to the report has been sent
                    to the email address you provided.</b> If you
                    don\'t see the email within 2 minutes, please check
                    your junk mail folder.  You may also download the
                    report immediately by clicking the following download
                    button:',
    'btnType' => 'btn-success',
    'btnUrl' => '/pdf/UPS-Fedex-General-Price-Increase-History.pdf',
    'btnAttr'=> 'download',
    'btnFaIconClass' => 'fa-download',
    'btnTxt' => 'Download The GPI Report',
    'rel' => $related
))
