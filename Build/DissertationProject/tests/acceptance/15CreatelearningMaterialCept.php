<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('make sure a user can access the learning section page');
$I->amOnPage('/login');
$I->fillField('email', 'validation@go.edgehill.ac.uk');
$I->fillField('password', '12345');
$I->click('Login');
$I->canSee('Project support');
$I->click('Project support');

$I->wantTo('make sure a user is on the correct view page');
$I->canSee('test_upload');
$I->click('View');
$I->canSee('test_upload');

$I->wantTo('Make sure that a field cannot be null when creating new learning section');
$I->fillField('Title', '');
$I->fillField('content', '');
$I->click('Submit advice');
$I->canSee('The title field is required.');
$I->canSee('The content field is required.');


$I->wantTo('Submit a complete new learning section');
$I->fillField('Title', 'test upload of material');
$I->fillField('content', 'test upload of material content');
$I->click('Submit advice');
$I->cantSee('The title field is required.');
$I->cantSee('The content field is required.');


$I->wantTo('check the submit went through');
$I->canSee('test upload of material');
$I->canSee('test upload of material content');