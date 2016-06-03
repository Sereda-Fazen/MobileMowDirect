<?php
namespace Page;


use Exception;

class Checkout
{

   
    public static $processCheckout = '//div[@id="cart_mobile"]//button';
    public static $continue = '//div[@id="billing-buttons-container"]//button';
    public static $formList = '//ul[@class="form-list"]';
    public static $deliver = '//ul[@class="form-list"]/li[3]/label[text()="Deliver to this address"]';
    public static $differentAddress = '//ul[@class="form-list"]/li[4]/label[text()="Deliver to different address"]';

    //delivery

    public static $showDelivery = '//*[@class="section allow active"]';
    public static $useAddress = '#co-shipping-form > ul.form-list > li.control > label';
    public static $continue2 = '//div[@id="shipping-buttons-container"]//button';

    // delivery method


    public static $showMethod = '//li[@id="opc-shipping_method"]';
    public static $continue3 = '//li[@id="opc-shipping_method"]//button';

    //payment info

    public static $showPayment = '//li[@id="opc-payment"]';
    public static $continue4 = '//li[@id="opc-payment"]//button';
    public static $bankTransfer = '//*[@id="co-payment-form"]//dl/dt[2]/input';

    //order

    public static $showOrder = '//li[@id="opc-review"]';
    public static $yourOrder = '//*[@id="md-checkout-cart"]';
    public static $productTable = '//*[@id="checkout-review-table"]';
    public static $agree = '//p[@class="agree"]/input';

    public static $continue5 = '//li[@id="opc-review"]//button';

    // after order

    public static $seeOrder =  '//div[@class="page-title"]/h1';
    public static $keepContinue = '//div[@class="buttons-set"]/button';
    public static $mainPage = '//div[@class="page-header-container"]';


    protected $tester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->tester = $I;
        
    }

    /**
     *
     */
    public function checkOrder()
    {
        $I = $this->tester;
        $I->waitForElement(self::$processCheckout);
        $I->click(self::$processCheckout);
        $I->waitForText('Checkout');
        $I->getVisibleText('Billing Information');
        $I->seeElement(self::$formList);
        $I->seeElement(self::$deliver);
        $I->seeElement(self::$differentAddress);
        $I->waitForElement(self::$continue);
        $I->click(self::$continue);
        $I->waitForElementNotVisible('//*[@id="billing-please-wait"]');

        $I->waitForElement(self::$showDelivery);
        $I->waitForText('Delivery Information');
        $I->waitForElement(self::$useAddress);
        try { $I->waitForElement(self::$continue2);
        $I->click(self::$continue2);
        } catch (Exception $e) {}

        $I->waitForElement(self::$showMethod);
        $I->waitForText('Delivery Method');
        $I->waitForElementVisible(self::$continue3);
        $I->click(self::$continue3);

        $I->waitForElement(self::$showPayment);
        $I->waitForText('Payment Information');
        $I->waitForElementVisible(self::$continue4);
        $I->click(self::$continue4);
        $I->acceptPopup();
        $I->click(self::$bankTransfer);
        $I->click(self::$continue4);

        $I->waitForElement(self::$showOrder);
        $I->waitForText('Order Review');
        $I->waitForElement(self::$yourOrder);
        $I->getVisibleText('YOUR SELECTION');
        $I->getVisibleText('INVOICE ADDRESS');
        $I->getVisibleText('DELIVERY ADDRESS');
        $I->getVisibleText('DELIVERY METHOD');
        $I->getVisibleText('PAYMENT METHOD');
        $I->getVisibleText('Cheque or Bank Transfer');
        $I->waitForElement(self::$productTable);
        $I->scrollDown(800);
        $I->waitForElement(self::$agree);
        $I->wait(2);
        $I->click(self::$agree);
        $I->waitForElementVisible(self::$continue5);
        /*
        $I->click(self::$continue5);
        $I->waitForText('Your order has been received.');
        $I->see('Your order has been received.',self::$seeOrder);
        $I->getVisibleText('Thank you for your purchase!');
        $I->click(self::$keepContinue);
        $I->waitForElement(self::$mainPage);
*/
        
    }
    


    


}