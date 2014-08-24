<?php 
$I = new FunctionalTester($scenario);
$I->am('a CMS admin');
$I->wantTo('Delete section');

// Create a section...
$I->haveRecord('sections', [
	'id' => 1,
	'name' => 'Our company',
    'slug_url' => 'our-company',
    'menu_order' => 2,
    'menu' => 1,
    'published' => 0
]);


$I->amOnPage('admin/sections/1/edit');

$I->see('Our company', 'h1');
$I->click('Delete');
$I->seeCurrentUrlEquals('/admin/sections');
$I->dontSee('Our company', 'a.item');