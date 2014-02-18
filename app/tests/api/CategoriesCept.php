<?php
	$I = new ApiGuy($scenario);
	$I->wantTo('Return all categories');
	$I->sendGet('categories');
	$I->seeResponseCodeIs(200);
	$I->seeResponseIsJson();
	$I->seeResponseContains("success");
