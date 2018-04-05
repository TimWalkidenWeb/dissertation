<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('make sure a user can access the edit page');
$I->amOnPage('/login');
$I->fillField('email', 'validation@go.edgehill.ac.uk');
$I->fillField('password', '12345');
$I->click('Login');
$I->canSee('Current Projects');
$I->click('Current Projects');


//$I->amOnPage('/project');
//
$I->canSee('Current Projects');
$I->canSee('Test');
$I->canSee('edit');
//
$I->click('edit');
//
$I->wantTo('make sure that the form has the right details from the database');
$I->canSee('Edit');
$I->canSee('Test');
//
$I->canSeeInField('content', 'Test 1');
$I->fillField('content', 'content changed');
$I->selectOption('pathway_id[]', '2');

$I->click('Update project');

$I->cantSee('The title field is required.');
$I->cantSee('The content field is required.');
$I->cantSee('The num participant field is required.');
$I->cantSee('The pathway id field is required.');
$I->cantSee('The image field is required.');

$I->canSee('Current Projects');
//
$I->wantTo("see if the project been changed");
$I->amOnPage('/project');
$I->click('View');

$I->canSee('test_upload');
$I->canSee('content changed');