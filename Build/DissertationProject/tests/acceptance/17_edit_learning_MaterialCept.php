<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('perform actions and see result');
$I->wantTo('make sure a user can access the edit page');
$I->amOnPage('/login');
$I->fillField('email', 'validation@go.edgehill.ac.uk');
$I->fillField('password', '12345');
$I->click('Login');
$I->canSee('Project support');
$I->click('Project support');
$I->click('View');
$I->canSee('test_upload');
$I->click('Edit');
$I->canSeeInField('content', 'test upload of material content');
$I->fillField('content', 'test upload of material content updated');
$I->click('Submit update');
$I->cantSee('The title field is required.');
$I->cantSee('The content field is required.');
$I->canSee('test upload of material content updated');