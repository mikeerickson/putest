<?php
use \ApiGuy;

class PostListingCest
{
    public function _before()
    {
    }

    public function _after()
    {
    }

    // tests
    public function testPostListingReturnsData(ApiGuy $I)
    {
		$I = new ApiGuy($scenario);
		$I->wantTo('Return all posts');
		$I->sendGet('posts');
		$I->seeResponseCodeIs(200);
		$I->seeResponseIsJson();
		$I->seeResponseContains("success");
    }
}