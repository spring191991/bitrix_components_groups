<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentParameters = array(
	"PARAMETERS" => array(
		"TITLE" => Array(
			"PARENT" => "BASE",
			"NAME" => "Заголовок страницы",
			"TYPE" => "STRING",
			"DEFAULT" => '',
		),
		'VARIABLE_ALIASES' => array(
			'ELEMENT_ID' => array('NAME' => 'Идентификатор элемента'),
			'ELEMENT_CODE' => array('NAME' => 'Символьный код элемента'),
		),
		'SEF_MODE' => array(
			'list' => array(
				'NAME' => 'Главная страница',
				'DEFAULT' => '',
			),
			'element' => array(
				'NAME' => 'Страница элемента',
				'DEFAULT' => '#ELEMENT_ID#/',
			),
		),
		"CACHE_TIME"  =>  Array("DEFAULT"=>3600),
	),
);

?>
