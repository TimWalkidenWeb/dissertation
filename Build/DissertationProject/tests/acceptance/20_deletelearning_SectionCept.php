<?php 
$I = new AcceptanceTester($scenario);
$I = new AcceptanceTester($scenario);
$I->wantTo('Delete a record');

$I->amOnPage('/login');
$I->fillField('email', 'timothy.walkiden@go.edgehill.ac.uk');
$I->fillField('password', 'password');
$I->click('Login');



$I->canSee('Project support');
$I->click('Project support');
$I->click('Edit');

$I->wantTo('make sure that the correct learning section being deleted');
$I->canSee('Edit');
$I->canSee('test_upload');

$I->click('Delete');

$I->wantTo("make sure the record is deleted");
$I->cantSee("test_upload");