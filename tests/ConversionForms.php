<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ConversionForms extends TestCase
{
/**
 * negotiation conversion page form
 *
 * @return void
 */
    public function negotiationForm(){
        $this->visit('/carrier-contract-negotiation/sign-up')
            ->see('CARRIER RATE NEGOTIATION')
            ->type('Tyler', 'hs[firstname]')
            ->type('Glassman', 'hs[lastname]')
            ->type('ACME', 'hs[company]')
            ->type('test@lojistic.com', 'hs[email]')
            ->type('2128675309', 'hs[phone]')
            ->press('button')
            ->seePageIs('/thank-you');
    }

/**
 * wholesale LTL rate marketplace conversion page form
 *
 * @return void
 */
    public function wholesaleForm(){
        $this->visit('/wholesale-ltl-rate-marketplace/sign-up')
            ->see('Carrier Contract Negotiation')
            ->type('Tyler', 'hs[firstname]')
            ->type('Glassman', 'hs[lastname]')
            ->type('ACME', 'hs[company]')
            ->type('test@lojistic.com', 'hs[email]')
            ->type('2128675309', 'hs[phone]')
            ->press('button')
            ->seePageIs('/thank-you');
    }

/**
 * freight management conversion page form
 *
 * @return void
 */
    public function freightForm(){
        $this->visit('/freight-management/sign-up')
            ->see('FREIGHT MANAGEMENT')
            ->type('Tyler', 'hs[firstname]')
            ->type('Glassman', 'hs[lastname]')
            ->type('ACME', 'hs[company]')
            ->type('test@lojistic.com', 'hs[email]')
            ->type('2128675309', 'hs[phone]')
            ->press('button')
            ->seePageIs('/thank-you');
    }
    /**
     * Whitepapers fiveSecrets form
     *
     * @return void
     */

    public function fiveSecrets(){
        $this->visit('/white-papers/5-secrets-ups-and-fedex-dont-want-you-to-know')
            ->see('FREIGHT MANAGEMENT')
            ->type('Tyler', 'hs[firstname]')
            ->type('Glassman', 'hs[lastname]')
            ->type('ACME', 'hs[company]')
            ->type('test@lojistic.com', 'hs[email]')
            ->type('2128675309', 'hs[phone]')
            ->press('button')
            ->seePageIs('/thank-you');
    }

    /**
     * Whitepapers conversion forms
     *
     * @return void
     */

    public function gpiform(){
        $this->visit('/white-papers/general-price-increase')
            ->see('FREIGHT MANAGEMENT')
            ->type('Tyler', 'hs[firstname]')
            ->type('Glassman', 'hs[lastname]')
            ->type('ACME', 'hs[company]')
            ->type('test@lojistic.com', 'hs[email]')
            ->type('2128675309', 'hs[phone]')
            ->press('button')
            ->seePageIs('/thank-you');
    }
    /**
     * Whitepapers conversion forms
     *
     * @return void
     */
    public function fuelsurcharge(){
        $this->visit('/white-papers/fuel-surchrge')
            ->see('FREIGHT MANAGEMENT')
            ->type('Tyler', 'hs[firstname]')
            ->type('Glassman', 'hs[lastname]')
            ->type('ACME', 'hs[company]')
            ->type('test@lojistic.com', 'hs[email]')
            ->type('2128675309', 'hs[phone]')
            ->press('button')
            ->seePageIs('/thank-you');
    }


}
