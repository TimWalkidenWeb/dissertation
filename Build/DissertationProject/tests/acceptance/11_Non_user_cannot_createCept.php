<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('make sure you have to be logged in to create new previous project');
$I->am('guest');
$I->amOnPage('/home');
$I->cantSee('Add a previous project');