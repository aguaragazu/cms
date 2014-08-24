<?php 
$I = new FunctionalTester($scenario);
$I->am('a CMS admin');
$I->wantTo('see the list of sections');

// Create some sections...
$I->haveRecord('sections', [
	'id' => 1,
	'name' => 'Our company',
    'slug_url' => 'our-company',
    'menu_order' => 2,
    'menu' => 1,
    'published' => 0
]);

$I->haveRecord('sections', [
	'id' => 2,
	'name' => 'Services',
    'slug_url' => 'services',
    'menu_order' => 3,
    'menu' => 1,
    'published' => 0
]);

$I->haveRecord('sections', [
	'id' => 3,
	'name' => 'Blog',
    'slug_url' => 'blog',
    'menu_order' => 4,
    'menu' => 1,
    'published' => 0
]);

$I->amOnPage('admin/sections');
$I->see('Sections', 'h1');

$I->see('Our company', 'a.item');
$I->see('Services', 'a.item');
$I->see('Blog', 'a.item');

$I->click('Blog');
$I->seeCurrentUrlEquals('/admin/sections/3');
$I->see('Blog', 'h1');