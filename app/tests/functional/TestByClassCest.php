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
    	$I->wantToTest('class method');
		$I->amOnPage('/test');
		$I->see('Welcome To Codeception Test!','h1');
    }

	public function it_should_return_all_categories(TestGuy $I)
	{
		$I->wantTo('Return all categories');
		$I->amOnPage('api/v1/categories');


		$I->see('Animation');
		$I->see('Action');

		$I->seeInDatabase('category', ['name' => 'Action']);
	}
}