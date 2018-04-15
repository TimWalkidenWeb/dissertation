<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('Delete a record');
$I->amOnPage('login');
$I->fillField('email', 'MarkHall@edgehill.ac.uk');
$I->fillField('password', '12345');
$I->click('Login to the system');
$I->canSee('Support');
$I->click('Support');
$I->click('View');
$I->canSee('test_upload');
$I->wantTo('to delete the record');
$I->click('Delete');
$I->wantTo("make sure the record is deleted");
$I->cantSee("test upload of material");


