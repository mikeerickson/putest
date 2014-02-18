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
    public function testPageContainsHelloWorld(TestGuy $I) {
    	$I->wantToTest('test class method');
		$I->amOnPage('/test');
		$I->see('Hello World!','h1');
    }

}