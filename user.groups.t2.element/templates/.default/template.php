<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();
?>
<?
$rs = CGroup::GetList($order="ID", $by="ASC");
?>
<table class="mytable">
  <tr>
    <th>ID</th>
    <th>Название группы</th>
    <th>Описание группы</th>
  </tr>
<?
while ($arGroup=$rs->GetNext()) :
   echo "<tr><td>".$arGroup["ID"]."</td>";
   echo "<td>".$arGroup["NAME"]."</td>";
   echo "<td>".$arGroup["DESCRIPTION"]."</td></tr>";
endwhile;
?>
</table>

<p><a href="/test/test2/">Назад в раздел</a></p>