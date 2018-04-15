<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Delete a record');
$I->amOnPage('login');
$I->fillField('email', 'timothy.walkiden@edgehill.ac.uk');
$I->fillField('password', 'password');
$I->click('Login to the system');
$I->canSee('Current Projects');
$I->click('Current Projects');
$I->canSee('Available topics being offered');
$I->canSee('Test');
$I->canSee('Edit');
$I->click('Edit');
$I->canSee('Test');
$I->click('Delete');
$I->wantTo("make sure the record is deleted");
$I->canSee('Current Projects');
$I->cantSee("test_upload");