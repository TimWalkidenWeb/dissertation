<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('make sure a user can see link to new learning section');
$I->amOnPage('/login');
$I->fillField('email', 'MarkHall@edgehill.ac.uk');
$I->fillField('password', '12345');
$I->click('Login to the system');
$I->canSee('Create learning section');
$I->click('Create learning section');
$I->wantTo('make sure a user on the correct page');
$I->canSee('Add a new learning section');
$I->wantTo('Make sure that a field cannot be null when creating new learning section');
$I->fillField('title', '');
$I->fillField('content', '');
$I->click('Submit Learning section');
$I->canSee('The title field is required.');
$I->canSee('The content field is required.');
$I->canSee('The cw id field is required.');
$I->canSee('The image field is required.');
$I->wantTo('Submit a complete new learning section');
$I->fillField('title', 'test_upload');
$I->fillField('content', 'Test 1');
$I->selectOption('cw_id[]', '3');
$I->attachFile('image', '1520257828.png');
$I->click('Submit Learning section');
$I->canSee('What do you need help on ?');
$I->amOnPage('/learning_section');
$I->click('View');
$I->canSee('test_upload');