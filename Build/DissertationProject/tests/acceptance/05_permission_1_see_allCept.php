<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('login with a user with permission 1');
$I->amOnPage('/login');
$I->fillField('email', 'timothy.walkiden@go.edgehill.ac.uk');
$I->fillField('password', 'password');
$I->click('Login');


$I->wantTo("see another tutors project and edit the project");
$I->canSee('Current Projects');
$I->click('Current Projects');


//$I->amOnPage('/project');
//
$I->canSee('Current Projects');
$I->canSee('Test');
$I->canSee('edit');
//
$I->click('edit');


$I->fillField('num_participant', '9');
$I->selectOption('pathway_id[]', '5');
$I->click('Update project');

$I->cantSee('The title field is required.');
$I->cantSee('The content field is required.');
$I->cantSee('The num participant field is required.');
$I->cantSee('The pathway id field is required.');
$I->cantSee('The image field is required.');

$I->wantTo("see if the project been changed");
$I->amOnPage('/project');
$I->click('View');

$I->canSee('Test');
$I->canSee('9');