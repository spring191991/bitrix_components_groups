<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();
?>

<?php
$Groups = CGroup::GetList($order="ID", $by="ASC", '');

$APPLICATION->IncludeComponent(
	'test:user.groups.t2.list',
	'',
	Array(
		"TITLE" => "",
		'GROUPS' => $Groups,
		'CACHE_TIME' => $arParams['CACHE_TIME']
	),
	$component
);
?>
