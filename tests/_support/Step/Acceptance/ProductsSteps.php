<?php
namespace Step\Acceptance;

class ProductsSteps extends \AcceptanceTester
{

    /**
     * Products Layout
     */

    public function productsLayout(){
        $I = $this;
        $I->amOnPage('/');
        $I->waitForElement('//div[@class="skip-links"]//a[1]');
        $I->click('//div[@class="skip-links"]//a[1]');
        $I->waitForElement('//*[@id="menu-mobile-2430"]/div[1]/span');
        $I->click('//*[@id="menu-mobile-2430"]/div[1]/span');
        $I->waitForElement('//*[@rel="submenu-mobile-2505"]');
        $I->click('//*[@rel="submenu-mobile-2505"]');

        $I->waitForElement('//*[@id="submenu-mobile-2505"]/div[1]//span[text()="Trailers for Ride-On Mowers / Garden Tractors"]');
        $I->click('//*[@id="submenu-mobile-2505"]/div[1]//span[text()="Trailers for Ride-On Mowers / Garden Tractors"]');
        $I->waitForElement('//*[@class="item odd"]//a/img');
        $I->click('//*[@class="item odd"]//a/img');
        $I->scrollDown(200);
        $I->waitForElement('//*[@id="collateral-tabs"]/dt[3]');
        $I->click('//*[@id="collateral-tabs"]/dt[3]');
        $I->waitForElement('//*[@class="tab-container current"]');
        $I->click('//*[@id="collateral-tabs"]/dt[4]/span[text()="Reviews"]');
        $I->waitForElement('//*[@id="customer-reviews"]');

        $I->scrollUp(300);
       
    }

    /**
     * Category Navigation
     */

    public function amountTopCategories()
    {
        $I = $this;
        for ($a = 1; $a <= 10; $a++) {
            $I->waitForElement('//*[@class="products-list"]/li[' . $a . ']');
        }
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

}