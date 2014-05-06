<?php
use \TestGuy;

class TestByClassCest
{

    public function _before()
    {
    }

    public function _after()
    {
    }

    // tests
    public function testPageContainsWelcomeMessage(TestGuy $I) {
    	$I->wantToTest('test class method');
		$I->amOnPage('/test');
		$I->see('Welcome To Codeception Test!','h1');
    }

}