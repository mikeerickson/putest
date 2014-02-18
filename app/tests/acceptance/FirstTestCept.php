<?php
$I = new WebGuy($scenario);
$I->wantTo('perform actions and see result');
$I->amOnPage('/');
$I->see('You have arrived');