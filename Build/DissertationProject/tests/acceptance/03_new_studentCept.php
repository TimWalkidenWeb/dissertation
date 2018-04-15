<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('I want to register as a student');
$I->amOnPage('/new_student');
$I->canSee('New student');
$I->wantTo('Make sure that a field cannot be null');
$I->fillField('name', '');
$I->fillField('email', '');
$I->fillField('password', '');
$I->cantSee('permission');
$I->click('Register yourself');
$I->canSee('New student');
$I->canSee('The name field is required.');
$I->canSee('The email field is required.');
$I->canSee('The password field is required.');
$I->wantTo('Submit a new user');
$I->fillField('name', 'Rob');
$I->fillField('email', 'rob@edgehill.ac.uk');
$I->fillField('password', '12345');
$I->click('Register yourself');
$I->wantTo('Make sure user has been created');
$I->cantSee('The name field is required.');
$I->cantSee('The email field is required.');
$I->cantSee('The password field is required.');
$I->amOnPage('/login');
$I->fillField('email', 'student@go.edgehill.ac.uk');
$I->fillField('password', '12345');
$I->click('Login');

