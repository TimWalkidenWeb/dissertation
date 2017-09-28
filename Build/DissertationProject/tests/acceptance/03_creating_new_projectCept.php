<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('make sure a user can see link to new project');
$I->amOnPage('/login');
$I->fillField('email', 'testpermission2@go.edgehill.ac.uk');
$I->fillField('password', 'rebtim281');
$I->click('Login');
$I->canSee('New project');
$I->click('New project');
$I->canSee('Lets create a new project');
$I->wantTo('Make sure that a field cannot be null when creating new project');
$I->fillField('title', '');
$I->fillField('content', '');
$I->fillField('num_participant', '');
$I->click('submit new project');
$I->canSee('The title field is required.
            The content field is required.
            The num participant field is required.
            The pathway id field is required.');

$I->wantTo('test validation on the number of particpants to make sure letter are not allowed');
$I->fillField('num_participant', 'A');
$I->click('submit new project');
$I->canSee('The num participant must be an integer.');

$I->wantTo('Submit a complete new project');
$I->fillField('title', 'Validation');
$I->fillField('content', 'Test 1');
$I->fillField('user_id', '5');
$I->fillField('num_participant', '1');
$I->selectOption('pathway_id[]', '5');
$I->canSee('Edge Hill university third year projects');
$I->click('submit new project');

$I->amOnPage('/project');
$I->canSee('Edge Hill university third year projects');
//$I->click('show');
//$I->canSee('View show');
$I->canSee('Validation');
