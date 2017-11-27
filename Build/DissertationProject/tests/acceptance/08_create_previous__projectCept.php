<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('make sure user can see link to create previous project');
$I->amOnPage('/login');
$I->fillField('email', 'testpermission2@go.edgehill.ac.uk');
$I->fillField('password', 'rebtim281');
$I->click('Login');
$I->canSee('Add a previous project');
$I->click('Add a previous project');
$I->canSee('New previous project');

$I->wantTo('Make sure that a field cannot be null when creating new previous project');
$I->fillField('title', '');
$I->fillField('description', '');
$I->click('submit previous project');
$I->canSee('The title field is required.
        The description field is required.
        The date field is required.
        The content field is required.
        The pathway id field is required.');


$I->wantTo('Submit a complete new project');
$I->fillField('title', 'Validation');
$I->fillField('user_id', '5');
$I->fillField('description', '10');
$I->fillField('date', '10/10/1111');

$I->selectOption('pathway_id[]', '5');
$I->click('submit previous project');

//$I->amOnPage('/project');
//$I->click('show');
//$I->canSee('View show');
//$I->canSee('Validation');