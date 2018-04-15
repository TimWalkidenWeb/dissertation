<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('Delete a record');

$I->amOnPage('login');
$I->fillField('email', 'MarkHall@edgehill.ac.uk');
$I->fillField('password', '12345');
$I->click('Login to the system');
$I->canSee('Support');
$I->click('Support');
$I->click('Edit');
$I->wantTo('make sure that the form has the right details from the database');
$I->canSee('Edit');
$I->canSee('test_upload');;

$I->click('Delete learning section');

$I->wantTo("make sure the record is deleted");
$I->cantSee("test_upload");