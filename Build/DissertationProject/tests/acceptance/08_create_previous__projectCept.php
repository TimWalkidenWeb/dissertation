<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('make sure user can see link to create previous project');
$I->amOnPage('/login');
$I->fillField('email', 'validation@go.edgehill.ac.uk');
$I->fillField('password', '12345');
$I->click('Login');
$I->canSee('Project Examples');
$I->click('Add a previous project');
$I->canSee('New previous project');

$I->wantTo('Make sure that a field cannot be null when creating new previous project');
$I->fillField('title', '');
$I->fillField('description', '');
$I->fillField('date', '');


$I->click('Submit previous project');

$I->canSee('The title field is required.');
$I->canSee('The description field is required.');
$I->canSee('The date field is required.');
$I->canSee('The pathway id field is required.');
$I->canSee('The image field is required.');

//
//
//
$I->wantTo('Submit a complete new project');
$I->fillField('title', 'Test_upload');
$I->fillField('user_id', '1');
$I->fillField('description', '10');
$I->fillField('date', '2017-04-03');
$I->attachFile('image', '1520257828.png');
$I->attachFile('image_content', 'download.pdf');

$I->selectOption('pathway_id[]', '2');
$I->click('Submit previous project');
//
//
//
$I->canSee('Project examples');
$I->canSee('Test_upload');
$I->click('View');
$I->canSee('Test_upload');