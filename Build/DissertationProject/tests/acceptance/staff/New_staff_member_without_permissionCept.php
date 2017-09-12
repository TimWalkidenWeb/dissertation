<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('make sure that staff member with permission 1 cannot add new staff');
$I->amOnPage('/login');
//with permission 1
$I->fillField('email', 'testpermission1@go.edgehill.ac.uk');
$I->fillField('password', 'rebtim281');
$I->click('Login');
$I->cantSee('Register new staff member');
