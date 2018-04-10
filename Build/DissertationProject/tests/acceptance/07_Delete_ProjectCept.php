<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Delete a record');
$I->amOnPage('/login');
$I->fillField('email', 'timothy.walkiden@go.edgehill.ac.uk');
$I->fillField('password', 'password');
$I->click('Login');
$I->canSee('Current Projects');
$I->click('Current Projects');
$I->canSee('Current Projects');
$I->canSee('Test');
$I->canSee('edit');
$I->click('edit');
$I->canSee('Test');
$I->click('Delete');
$I->wantTo("make sure the record is deleted");
$I->canSee('Current Projects');
$I->cantSee("test_upload");