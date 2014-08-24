<?php 
$I = new FunctionalTester($scenario);
$I->am('a CMS admin');
$I->wantTo('Update a section');

// Create a new section...
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

$I->amGoingTo('Omit the name field in order to submit an invalid form');
// When
$I->fillField('name', null);
$I->click('Update section');
// Then
$I->expectTo('See the form again with the errors');
$I->seeCurrentUrlEquals('/admin/sections/1/edit');
$I->seeInField('slug_url', 'our-company');
$I->see('The name field is required', '.error');






$I->fillField('Name', 'Our team');
$I->fillField('Slug URL', 'our-team');
$I->selectOption('type', 'page');
$I->selectOption('menu', 1);
$I->fillField('menu_order', 2);
$I->selectOption('published', 0);

$I->click('Update section');


$I->seeCurrentUrlEquals('/admin/sections/1');
$I->see('Our team', 'h1');
$I->seeRecord('sections', [
    'name' => 'Our team',
    'slug_url' => 'our-team',
    'menu_order' => 2,
    'menu' => 1,
    'published' => 0
]);