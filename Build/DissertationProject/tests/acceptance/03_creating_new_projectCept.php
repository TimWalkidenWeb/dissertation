<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('make sure a user can see link to new project');
$I->amOnPage('/login');
$I->fillField('email', 'validation@go.edgehill.ac.uk');
$I->fillField('password', '12345');
$I->click('Login');
$I->canSee('New project');
$I->click('New project');
$I->canSee('Add a new project');


$I->wantTo('Make sure that a field cannot be null when creating new project');
$I->fillField('title', '');
$I->fillField('content', '');
$I->fillField('num_participant', '');
$I->click('Submit project');
$I->canSee('The title field is required.');
$I->canSee('The content field is required.');
$I->canSee('The num participant field is required.');
$I->canSee('The pathway id field is required.');
$I->canSee('The image field is required.');

$I->wantTo('test validation on the number of particpants to make sure letter are not allowed');
$I->fillField('num_participant', 'A');
$I->click('Submit project');;
$I->canSee('The num participant must be an integer.');
//
$I->wantTo('Submit a complete new project');
$I->fillField('title', 'test_upload');
$I->fillField('content', 'Test 1');
$I->fillField('user_id', '1');
$I->fillField('num_participant', '10');
$I->selectOption('pathway_id[]', '5');
$I->attachFile('image', '1520257828.png');
$I->click('Submit project');
//

$I->canSee('Current Projects');
$I->click('View');
$I->canSee('Test');

