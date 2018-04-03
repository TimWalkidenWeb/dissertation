<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('Delete a record');

$I->amOnPage('/login');
$I->fillField('email', 'validation@go.edgehill.ac.uk');
$I->fillField('password', '12345');
$I->click('Login');
$I->canSee('Project Examples');
$I->click('Project Examples');

$I->canSee('Project examples');
$I->canSee('Test_upload');
$I->amOnPage('/previous_projects');

$I->click('edit');
$I->canSee('Test_upload');


$I->click('Delete');

$I->wantTo("make sure the record is deleted");
$I->cantSee("Test_upload");