<?php

$ipsum = elgg_view('developers/ipsum');

$object = new ThemeSandboxObject();
$object->title = 'Test Object';
$object->description = $ipsum;
$object->tags = ['tag 1', 'tag 2', 'tag 3'];

$icon = elgg_view_entity_icon($object, 'small');

echo elgg_view('object/elements/summary', [
	'entity' => $object,
	'subtitle' => 'Listing subtitle',
	'class' => 'theme-sandbox-summary-listing',
	'metadata' => elgg_view_menu('entity', [
		'entity' => $object,
		'handler' => 'theme-sandbox',
		'class' => 'elgg-menu-hz',
	]),
	'content' => elgg_get_excerpt($object->description),
	'icon' => $icon,
]);
