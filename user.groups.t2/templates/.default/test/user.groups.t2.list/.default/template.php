<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();
?>

<h2>Список групп пользователей</h2>
<? $Groups = $arParams['GROUPS']; ?>

<ul>
	<?while($arGroup=$Groups->GetNext()):?>
		<li><a href="<?echo $arGroup["ID"]?>/"><?echo $arGroup["NAME"]?></a></li>
	<?endwhile;?>
</ul>