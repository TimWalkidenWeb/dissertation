<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('make sure a user can access the edit page');
$I->amOnPage('/login');
$I->fillField('email', 'MarkHall@edgehill.ac.uk');
$I->fillField('password', '12345');
$I->click('Login to the system');
$I->canSee('Project support');
$I->click('Project support');
$I->click('Edit');
$I->wantTo('make sure that the form has the right details from the database');
$I->canSee('Edit');
$I->canSee('test_upload');
$I->canSeeInField('content', 'Test 1');
$I->fillField('content', 'content changed');
$I->selectOption('cw_id[]', '2');
$I->click('Submit update');
$I->cantSee('The title field is required.');
$I->cantSee('The content field is required.');
$I->cantSee('The cw id field is required.');
$I->cantSee('The image field is required.');
$I->wantTo("see if the learning section has been changed");
$I->canSee('Learning section');
$I->amOnPage('/learning_section');
$I->click('View');
$I->canSee('test_upload');
$I->canSee('content changed');



