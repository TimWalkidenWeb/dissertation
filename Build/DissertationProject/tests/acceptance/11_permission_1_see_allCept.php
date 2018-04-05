<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('login with a user with permission 1');
$I->amOnPage('/login');
$I->fillField('email', 'timothy.walkiden@go.edgehill.ac.uk');
$I->fillField('password', 'password');
$I->click('Login');


$I->wantTo("see another tutors project and edit the project");
$I->canSee('Project Examples');
$I->click('Project Examples');

//$I->amOnPage('/project');
//
$I->canSee('Project examples');
$I->canSee('Test_upload');
$I->canSee('Edit');

//
$I->click('Edit');
$I->canSee('Test_upload');

$I->canSeeInField('description', 'content changed');
$I->fillField('description', 'new update');
$I->selectOption('pathway_id[]', '1');
//
$I->click('Update previous project');

$I->wantTo("see if the project been changed");
$I->amOnPage('/previous_projects');
$I->click('View');

$I->canSee('Test');
$I->canSee('new update');