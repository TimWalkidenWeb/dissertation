<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('make sure a user can access the edit page');
$I->amOnPage('/login');
$I->fillField('email', 'testpermission2@go.edgehill.ac.uk');
$I->fillField('password', 'rebtim281');
$I->click('Login');
$I->canSee('View current project');
$I->click('View current project');

$I->canSee('View project');
$I->canSee('Validation');
$I->canSee('edit');
$I->click('edit');

$I->wantTo('make sure that the form has the right details from the database');
$I->canSee('Edit');
