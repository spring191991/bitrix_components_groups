<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();

$rs = CGroup::GetList($order="ID", $by="ASC");
?>

<h2>Список групп пользователей</h2>

<ul>
	<?while($arGroup=$rs->GetNext()):?>
		<li><a href="<?echo $arGroup["ID"]?>/"><?echo $arGroup["NAME"]?></a></li>
	<?endwhile;?>
</ul>
