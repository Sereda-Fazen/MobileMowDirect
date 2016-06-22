<?php

/**
 * @group mobileMyAccount
 */
class MobileMyAccountCest


{

    function myAccountInformation(Step\Acceptance\LoginSteps $I, \Page\MyAccountMowDirect $accountMowDirect)
    {
        $I->loginSuccess('mowdirect@gmail.com', '123456');
        $accountMowDirect->accountInformationMowDirect('Test', 'Test1', 'Test2');
    }

    function myAccountAddress(Step\Acceptance\LoginSteps $I, \Page\MyAccountMowDirect $accountMowDirect)
    {
        $I->loginSuccess('mowdirect@gmail.com', '123456');
        $accountMowDirect->addDefaultBillingAddress('Test2', 'Test2', '333333333', 'Test Address1', 'Test City1', '321321');
        $accountMowDirect->changeShippingAddress('Test3', 'Test3', '4444444', 'Test Address2', 'Test City2', '231231');
        $accountMowDirect->addNewAddress('Test4', 'Test4', '555555555', 'Test Address3', 'Test City3', '312312');
    }

    function myAccountOrder(Step\Acceptance\LoginSteps $I, \Page\MyAccountMowDirect $accountMowDirect)
    {
        $I->loginSuccess('mowdirect@gmail.com', '123456');
        $accountMowDirect->orderReorderCheck();
    }

    function myProductReviews(Step\Acceptance\LoginSteps $I){
        $I->loginSuccess('mowdirect@gmail.com', '123456');
        $I->cycleRate();
    }

    function myNewsletter(Step\Acceptance\LoginSteps $I, \Page\MyAccountMowDirect $accountMowDirect){
        $I->loginSuccess('mowdirect@gmail.com', '123456');
        $accountMowDirect->newsletterCheck();
    }

    function myInvitations(Step\Acceptance\LoginSteps $I, \Page\MyAccountMowDirect $accountMowDirect){
        $I->loginSuccess('mowdirect@gmail.com', '123456');
        $accountMowDirect->myInvitationsCheck('test@'.rand(1, 30).'.com');
    }




























    /*
    function myAccountInvitations(Step\Acceptance\LoginStepsMowDirect $I, \Page\MyAccountMowDirect $accountMowDirect, \Page\Checkout $checkout, \Page\GmailPage $gmailPage)
    {
        $accountMowDirect->myInvitationsCheck('denimio.test@gmail.com');
        //$gmailPage->checkMessageOnMailBox('denimio.test@gmail.com', '!1qwerty');

    }





/*
    function T955CreateACustomerAccount(Step\Acceptance\LoginStepsMowDirect $I, \Page\Checkout $checkout) {
        $I->addItemCheckout();
        $checkout->registerAndBuyOnCheckout('TestTitle','Test','Test2','mowdirect@gmail.com','123123','Testaddress','Town','222333222','123456');
        }

    function T939EditAContactInformation(Step\Acceptance\LoginStepsMowDirect $I, \Page\MyAccountMowDirect $accountMowDirect) {
        $I->loginSuccessCheckoutPage('mowdirect@gmail.com', '123456');
        $accountMowDirect->accountInformationMowDirect('Test','Test1','Test2');
        }

    function T942EditABillingAddress(Step\Acceptance\LoginStepsMowDirect $I, \Page\MyAccountMowDirect $accountMowDirect) {
        $I->loginSuccessCheckoutPage('mowdirect@gmail.com', '123456');
        $accountMowDirect->addDefaultBillingAddress('Test2','Test2','333333333','Test Address1','Test City1','321321');
        }

    function T941EditAShippingAddress(Step\Acceptance\LoginStepsMowDirect $I, \Page\MyAccountMowDirect $accountMowDirect) {
        $I->loginSuccessCheckoutPage('mowdirect@gmail.com', '123456');
        $accountMowDirect->changeShippingAddress('Test3','Test3','4444444','Test Address2','Test City2','231231');
        }

    function T943AddNewAddressIntoTheAddressBook(Step\Acceptance\LoginStepsMowDirect $I, \Page\MyAccountMowDirect $accountMowDirect) {
        $I->loginSuccessCheckoutPage('mowdirect@gmail.com', '123456');
        $accountMowDirect->addNewAddress('Test4','Test4','555555555','Test Address3','Test City3','312312');
        }

    function T937ViewOrderT938ReorderOrder(Step\Acceptance\LoginStepsMowDirect $I, \Page\MyAccountMowDirect $accountMowDirect) {
        $I->loginSuccessCheckoutPage('mowdirect@gmail.com', '123456');
        $accountMowDirect->orderReorderCheck();
        }



    function T947SendInvitationToFriend(Step\Acceptance\LoginStepsMowDirect $I, \Page\MyAccountMowDirect $accountMowDirect, \Page\GmailPage $gmailPage) {
        $I->loginSuccessCheckoutPage('mowdirect@gmail.com', '123456');
        $accountMowDirect->myInvitationsCheck('denimio.test@gmail.com');
        $gmailPage->checkMessageOnMailBox('denimio.test@gmail.com','!1qwerty');
        }
*/














}