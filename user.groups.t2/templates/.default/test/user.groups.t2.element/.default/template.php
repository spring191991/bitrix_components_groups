<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();
?>

<? 
$Groups = CGroup::GetList($order="ID", $by="ASC", Array("ID" => $arParams['GROUP_ID'])); ?>

<table class="mytable">
  <tr>
    <th>ID</th>
    <th>Название группы</th>
    <th>Описание группы</th>
  </tr>
<?
while ($arGroup=$Groups->GetNext()) :
   echo "<tr><td>".$arGroup["ID"]."</td>";
   echo "<td>".$arGroup["NAME"]."</td>";
   echo "<td>".$arGroup["DESCRIPTION"]."</td></tr>";
endwhile;
?>
</table>

<p><a href="/test/test2/">Назад в раздел</a></p>