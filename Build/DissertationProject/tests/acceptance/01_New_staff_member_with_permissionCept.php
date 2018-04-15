<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('make sure that staff member with permission 2 can add new staff');
$I->amOnPage('/login');
$I->fillField('email', 'timothy.walkiden@go.edgehill.ac.uk');
$I->fillField('password', 'password');
$I->click('Login');
$I->canSee('Add new staff');
$I->click('Add new staff');
$I->canSee('New staff member');
$I->wantTo('Make sure that a field cannot be null');
$I->fillField('name', '');
$I->fillField('email', '');
$I->fillField('password', '');
$I->selectOption('permission', '3');
$I->click('Submit new staff member');
$I->canSee('The name field is required.');
$I->canSee('The email field is required.');
$I->canSee('The password field is required.');
$I->wantTo('Make sure validation works on password');
$I->fillField('password','1234');
$I->click('Submit new staff member');
$I->canSee('The password must be at least 5 characters.');
$I->wantTo('submit a new correct staff member');
$I->fillField('name', 'Mark Hall');
$I->fillField('email', 'MarkHall@edgehill.ac.uk');
$I->fillField('password', '12345');
$I->selectOption('permission', '3');
$I->click('Submit new staff member');
$I->canSee('Need a Project Topic ?');



