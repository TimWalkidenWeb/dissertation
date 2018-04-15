<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('make sure that staff member with permission 3 cannot add new staff');
$I->amOnPage('/login');
//with permission 1
$I->fillField('email', 'MarkHall@edgehill.ac.uk');
$I->fillField('password', '12345');
$I->click('Login to the system');
$I->cantSee('Add new staff');
