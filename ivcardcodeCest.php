<?php

class ivcardcodeCest
{
    public function _before(CyberchimpsTester $I)
    {
    }

    // tests
    public function tryToTest(CyberchimpsTester $I)
    {
    
      $I->amOnPage('/');
      $I->click('//*[@id="menu-1-4ba7cad"]/li[5]/a');
      $I->scrollTo('//*[@id="pricing-plans"]/div/div/div/div/div/div[1]/div/h2');
      $I->click('//*[@id="pricing-plans"]/div/div/div/div/div/div[2]/div/div/div[2]/div[1]/div/div/section/div/div/div[1]/div/div/div/div/div/div[3]/a');
      $I->see('$23.50 / year');
      $I->scrollTo('//*[@id="payment"]');
      $I->wait(3);
      $I->selectOption('//*[@id="payment_method_stripe"]','stripe');
      $I->wait(5);
      $I->switchtoIFrame('//*[@id="stripe-card-element"]/div/iframe');
      $I->fillField('//*[@id="root"]/form/span[2]/div/div[2]/span/input', '1234 5678 9012 3456');
      $I->switchtoIFrame();
      $I->wait(2);
       $I->switchtoIFrame('//*[@id="stripe-exp-element"]/div/iframe');
      $I->fillField('//*[@id="root"]/form/span[2]/span/input', '01 23');
      $I->switchtoIFrame();
      $I->wait(2);
       $I->switchtoIFrame('//*[@id="stripe-cvc-element"]/div/iframe');
      $I->fillField('//*[@id="root"]/form/span[2]/span/input','A#B');
      $I->switchtoIFrame();
      $I->wait(2);
      $I->click('//*[@id="place_order"]');
      $I->wait(2);
    }
}
