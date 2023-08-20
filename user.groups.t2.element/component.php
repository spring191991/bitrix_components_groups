<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if(!isset($arParams["CACHE_TIME"]))
	$arParams["CACHE_TIME"] = 3600;

if ($this->StartResultCache())
{
	$this->IncludeComponentTemplate();
}

if($arParams["TITLE"])
	$APPLICATION->SetTitle($arParams["TITLE"]);
?>