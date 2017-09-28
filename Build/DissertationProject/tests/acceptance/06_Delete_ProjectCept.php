<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Delete a record');

$I->amOnPage('/login');
$I->fillField('email', 'testpermission2@go.edgehill.ac.uk');
$I->fillField('password', 'rebtim281');
$I->click('Login');
$I->canSee('View current project');
$I->click('View current project');

$I->canSee('View project');
$I->canSee('Validation');
$I->canSee('Delete');
$I->click('Delete');

$I->wantTo("make sure the record is deleted");
$I->cantSee("Validation");