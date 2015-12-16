<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Buy a hoodie');

$I->amOnPage('/');
$I->see('Just another WordPress site');

$I->click('Shop');
$I->see('Flying Ninja');
$I->see('Happy Ninja');
$I->click("//a[contains(@href, 'happy-ninja-2')]");

$I->see('Happy Ninja');
$I->see('Product Description');
$I->see('$35');

