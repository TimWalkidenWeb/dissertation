<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('make sure that staff member with permission 2 can add new staff');
$I->amOnPage('/login');
//with permission 2
$I->fillField('email', 'testpermission2@go.edgehill.ac.uk');
$I->fillField('password', 'rebtim281');
$I->click('Login');
$I->canSee('Register new staff member');
$I->click('Register new staff member');
$I->canSee('New staff member');

$I->wantTo('Make sure that a field cannot be null');
$I->fillField('name', '');
$I->fillField('email', '');
$I->fillField('password', '');
$I->fillField('permission', '1');
$I->click('submit new project');

$I->canSee('The name field is required. 
            The email field is required.
            The password field is required.');

$I->wantTo('Make sure validation works on password');
$I->fillField('password','1234');
$I->click('submit new project');
$I->canSee('The password must be at least 5 characters');

//Add validation for email

$I->wantTo('submit a new correct staff member');
$I->fillField('name', 'Validation');
$I->fillField('email', 'validation@go.edgehill.ac.uk');
$I->fillField('password', '12345');
$I->fillField('permission', '1');
//$I->click('submit new project');
//$I->canSee('Welcome to edge hill final year project');


