<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('login with a user with permission 1');
$I->amOnPage('/login');
$I->fillField('email', 'testpermission1@edgehill.ac.uk');
$I->fillField('password', 'rebtim281');
$I->click('Login');


$I->wantTo("see another tutors project and edit the project");
$I->canSee('View current project');
$I->click('View current project');

$I->canSee('View project');
$I->canSee('Validation');
$I->canSee('edit');
$I->click('edit');


$I->fillField('num_participant', '8');
$I->click('updated');

$I->wantTo("see if the project been changed");
$I->amOnPage('/project');
$I->click('show');
$I->canSee('View show');
$I->canSee('Validation');
$I->canSee('8');