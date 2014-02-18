<?php
$I = new TestGuy($scenario);
$I->wantTo('First test, see Hello World!');
$I->amOnPage('/test');
$I->see('Hello World!');
