<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('make sure a user can access the edit page');
$I->amOnPage('/login');
$I->fillField('email', 'validation@go.edgehill.ac.uk');
$I->fillField('password', '12345');
$I->click('Login');
$I->canSee('Project Examples');
$I->click('Project Examples');


//$I->amOnPage('/project');
//
$I->canSee('Project examples');
$I->canSee('Test_upload');
$I->amOnPage('/previous_projects');
;
//
$I->click('edit');
//
$I->wantTo('make sure that the form has the right details from the database');
$I->canSee('Edit');
$I->canSee('Test_upload');
////
$I->canSeeInField('description', '10');
$I->fillField('description', 'content changed');
$I->selectOption('pathway_id[]', '3');
//
$I->click('Update previous project');

$I->cantSee('The title field is required.');
$I->cantSee('The description field is required.');
$I->cantSee('The date field is required.');
$I->cantSee('The pathway id field is required.');
$I->cantSee('The image field is required.');
////
$I->wantTo("see if the project been changed");
$I->canSee('Project examples');
$I->amOnPage('/previous_projects');
$I->click('View');
//
$I->canSee('Test');
$I->canSee('content changed');
