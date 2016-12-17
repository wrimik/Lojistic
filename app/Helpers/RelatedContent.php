<?php
namespace App\Helpers;
/**
 * Created by PhpStorm.
 * User: Mike
 * Date: 4/10/15
 * Time: 11:14 AM
 *
 * Suggests related (hopefully) content based on current view
 */

class RelatedContent {
    public $links;

    /**
     * Sets all content available for suggesting
     */
    function __construct(){
        // white papers
        $this->links[] =  [
            'img' => '/images/UPS-FedEx-5Secrets.png',
            'desc'=> 'Minimize these five hidden UPS and FedEx shipping costs!',
            'url' => '/pdf/5-Secrets-UPS-&-FedEx-Dont-Want-You-to-Know.pdf',
            'linkAttr' => 'download',
            'title' => '5 Secrets White Paper',
            'btnClass' => 'btn-info',
            'btnTxt' => 'DOWNLOAD',
            'neverShowOn' => 'white-papers/5-secrets-thank-you'
        ];
        $this->links[] =  [
            'img' => '/images/GPI.png',
            'desc'=> 'UPS and FedEx rolled out another costly price increase to small-parcel shippers',
            'url' => '/pdf/UPS-Fedex-General-Price-Increase-History.pdf',
            'linkAttr' => 'download',
            'title' => 'General Price Increases',
            'btnClass' => 'btn-info',
            'btnTxt' => 'DOWNLOAD',
            'neverShowOn' => 'white-papers/general-price-increase-thank-you'
        ];
        $this->links[] =  [
            'img' => '/images/Fuel_Surcharge.png',
            'desc'=> 'Remember when the last air fuel surcharge for FedEx and UPS was 0%? ',
            'url' => '/pdf/UPS-Fedex-Fuel-Surcharge-History.pdf',
            'linkAttr' => 'download',
            'title' => 'UPS and FedEx Fuel Surcharges',
            'btnClass' => 'btn-info',
            'btnTxt' => 'DOWNLOAD',
            'neverShowOn' => 'white-papers/fuel-surcharge-thank-you'
        ];
        //calculators
        $this->links[] =  [
            'img' => '/images/thumb-insurance-calc.jpg',
            'desc'=> 'Stop Paying Twice As Much For Insurance',
            'url' => '/shipping-insurance',
            'linkAttr' => '',
            'title' => 'Shipping Insurance Calculator',
            'btnClass' => 'btn-info',
            'btnTxt' => 'CALCULATE',
            'neverShowOn' => ''
        ];
        $this->links[] =  [
            'img' => '/images/thumb-rates-comparison.jpg',
            'desc'=> 'Compare Carriers, Years, Services, Or Discounts',
            'url' => '/shipping-costs-calculators/fedex-ups-rate-comparison-tool',
            'linkAttr' => '',
            'title' => 'Rates Comparison Calculator',
            'btnClass' => 'btn-info',
            'btnTxt' => 'CALCULATE',
            'neverShowOn' => ''
        ];
    }

    public function suggest($category){
        // TODO: make related content stuff work
        if($category == 'whitepapers'){
            $suggestions = [
                $this->links[0],
                $this->links[1],
                $this->links[2],
                $this->links[rand(3, sizeof($this->links) - 1)]
            ];
        }
        $suggestions = $this->stripCurrent($suggestions);
        shuffle($suggestions);
        return $suggestions;
    }

    /**
     * Prevents the class from suggesting the content they were just looking at.
     * Because that would be silly.
     * @array $suggested
     */
    private function stripCurrent($suggestions){
        $currentPage = \Route::getCurrentRoute()->getPath();
        foreach($suggestions as $key => $suggestion){
            if($suggestion['neverShowOn'] == $currentPage){
                unset($suggestions[$key]);
            }
        }
        return $suggestions;
    }
}