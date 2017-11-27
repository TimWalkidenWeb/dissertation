<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('make sure you have to be logged in to create new project');
$I->am('guest');
$I->amOnPage('/home');
$I->cantSee('Lets create a new project');
