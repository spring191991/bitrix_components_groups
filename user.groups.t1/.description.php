<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
	"NAME" => GetMessage("TEST1_NAME"),
	"DESCRIPTION" => GetMessage("TEST1_DESCR"),
	"ICON" => "/images/news_all.gif",
	"PATH" => array(
		"ID" => "other_components",
		'NAME' => 'Прочие компоненты',
		"CHILD" => array(
			"ID" => "other_iblock",
			"NAME" => "Группы пользователей (простой)"
		)
	),
	"CACHE_PATH" => "Y",
	"COMPLEX" => "N"
);

?>