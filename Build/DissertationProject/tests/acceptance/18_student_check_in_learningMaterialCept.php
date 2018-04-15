<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('make sure students can not add, edit or delete advice');
$I->amOnPage('/login');
$I->fillField('email', 'rob@edgehill.ac.uk');
$I->fillField('password', '12345');
$I->click('Login to the system');
$I->canSee('Support');
$I->click('Support');
$I->click('View');
$I->canSee('test_upload');
$I->dontSee('Add your own advice');
$I->dontSee('Edit');
$I->dontSee('Delete');
