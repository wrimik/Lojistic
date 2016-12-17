<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HubspotController;
use App\Helpers\RelatedContent;

class ThankYouController extends Controller {

    private $relatedContent;

    public function __construct(Request $request)
    {
        $this->relatedContent = new RelatedContent();
        $hub = new HubspotController();
        $hub->store($request);
    }

    public function showThankYou(array $data)
    {
        return view('layouts.thank-you', $data);
    }
    public function showGenericThankYou(array $data)
    {
        return view('pages.thank-you', $data);
    }

    public function generalPriceIncrease()
    {
        $data = [
            'related'        => $this->relatedContent->suggest('whitepapers'),
            'heading'        => 'Enjoy your free General Price Increase Report!',
            'btnUrl'         => url('/pdf/UPS-Fedex-General-Price-Increase-History.pdf'),
            'btnAttr'        => 'download',
            'btnFaIconClass' => 'fa-download',
            'btnTxt'         => 'Download The GPI Report',
            'title'          => 'Lojistic\'s Free Report About Shipping Prices Helps You Manage How Rate Increases Affect Your Bottom Line',
            'description'    => 'This report on shipping prices summarizes historical rate increases and can help
                                    you better anticipate and control rising shipping prices. Lojistic provides the
                                    shipping price report you need to understand your mailing costs.',
            'keywords'       => 'shipping prices, ups freight rates, fedex freight rates, shipping price, us postal service rate increase',
            'message'        => 'Thank you for requesting our report UPS & FedEx General
                                    Price Increase History. We hope the information will be useful to you and your company.
                                    An email with a link to the report has been sent
                                    to the email address you provided. If you don\'t see the email within 2 minutes, please check
                                    your junk mail folder.  You may also download the report immediately by clicking the following download
                                    button:'
        ];

        return $this->showThankYou($data);
    }

    public function fiveSecretsThankYou()
    {
        $data = [
            'related'        => $this->relatedContent->suggest('whitepapers'),
            'heading'        => 'Enjoy your free 5 Secrets Report!',
            'btnUrl'         => url('/pdf/5-Secrets-UPS-&-FedEx-Dont-Want-You-to-Know.pdf'),
            'btnAttr'        => 'download',
            'btnFaIconClass' => 'fa-download',
            'btnTxt'         => 'Download The 5 Secrets Report',
            'title'          => 'Lojistic\'s Free Report About Shipping Prices Helps You Manage How Rate Increases Affect Your Bottom Line',
            'description'    =>  'This report on shipping prices summarizes historical rate increases and can help
                                  you better anticipate and control rising shipping prices. Lojistic provides the
                                  shipping price report you need to understand your mailing costs.',
            'keywords'       => 'shipping prices, ups freight rates, fedex freight rates, shipping price, us postal service rate increase',
            'message'        => 'Thank you for requesting our report The 5 Secrets UP, &amp; FedEx Don\'t Want You to Know. We hope the
                                information will be useful to you and your company. An email with a link to the report has been sent
                                to the email address you provided. If you don\'t see the email within 2 minutes, please check
                                your junk mail folder.  You may also download the report immediately by clicking the following download
                                button:'
            ];

        return $this->showThankYou($data);
    }

    public function fuelSurcharge()
    {
        $data = [
        'related'        => $this->relatedContent->suggest('whitepapers'),
        'heading'        => 'Enjoy your free Fuel Surcharge History Report!',
        'btnType'        => 'btn-success',
        'btnUrl'         => url('/pdf/UPS-Fedex-Fuel-Surcharge-History.pdf'),
        'btnAttr'        => 'download',
        'btnFaIconClass' => 'fa-download',
        'btnTxt'         => 'Download The Fuel Surcharge Report',
        'title'          => 'Fuel Surcharge and Trucking Rates Impact Your Business: This Transportation Report Will Help',
        'description'    => 'Freight fuel surcharge rates have increased dramatically over the past few years.
                             See the history and current diesel and trucking surcharge rates so you can better estimate
                             where they might go with this report and save money in the process.',
        'keywords'       => 'fuel surcharge trucking, current fuel surcharge, diesel fuel surcharge, fuel surcharge rates, fuel surcharge history, freight fuel surcharge',
        'message'        => 'Thank you for requesting our report UPS & FedEx Fuel Surcharge History.
                                We hope the information will be useful to you and your company. An
                                email with a link to the report has been sent to the email address you
                                provided. If you don\'t see the email within 2 minutes, please check
                                your junk mail folder. You may also download the report immediately by clicking the following download button:'
        ];

        return $this->showThankYou($data);
    }
    public function shippingResourceGuide()
    {
        $desc = 'A collection of super useful (free) transportation and logistics tools, resources, and tips.  Get some!';
        $data = [
            'related'        => $this->relatedContent->suggest('whitepapers'),
            'heading'        => 'THE LOJISTIC SHIPPING RESOURCE GUIDE',
            'btnType'        => 'orange',
            'btnUrl'         => url('/pdf/Shipping-Resource-Guide.pdf'),
            'bigImage'       => url('images/shipping-resource-guide.png'),
            'btnAttr'        => 'download',
            'btnFaIconClass' => 'fa-download',
            'btnTxt'         => 'GIMME MY GUIDE',
            'title'          =>  'The Lojistic Shipping Resource Guide',
            'description'    => $desc,
            'keywords'       => '',
            'message'        => $desc
            ];
        return $this->showThankYou($data);
    }

    public function genericThankYou()
    {
        $desc = 'A collection of super useful (free) transportation and logistics tools, resources, and tips.  Get some!';
        $data = [
            'related'        => $this->relatedContent->suggest('whitepapers'),
        ];
        return $this->showGenericThankYou($data);
    }
}