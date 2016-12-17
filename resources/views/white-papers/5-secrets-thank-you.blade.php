@include('layouts.thank-you', array(
    'heading' => 'Enjoy your free 5 Secrets Report!',
    'message' => ' Thank you for requesting our report The 5 Secrets UPS
                    &amp; FedEx Don\'t Want You to Know. We hope the
                    information will be useful to you and your company.
                    An email with a link to the report has been sent
                    to the email address you provided.</b> If you
                    don\'t see the email within 2 minutes, please check
                    your junk mail folder.  You may also download the
                    report immediately by clicking the following download
                    button:',
    'btnType' => 'btn btn-success',
    'btnUrl' => '/pdf/5-Secrets-UPS-&-FedEx-Dont-Want-You-to-Know.pdf',
    'btnAttr'=> 'download',
    'btnFaIconClass' => 'fa-download',
    'btnTxt' => 'Download The 5 Secrets Report',
    'rel' => $related
))