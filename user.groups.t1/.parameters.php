<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentParameters = array(
	"PARAMETERS" => array(
		"TITLE" => Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("TEST1_PAGE_TITLE"),
			"TYPE" => "STRING",
			"DEFAULT" => '',
		),
		"CACHE_TIME"  =>  Array("DEFAULT"=>3600),
	),
);

?>
