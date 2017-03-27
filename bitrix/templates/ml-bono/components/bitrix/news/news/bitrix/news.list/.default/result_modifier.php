<?
$arFilter = Array("IBLOCK_ID"=>1);
$db_list = CIBlockSection::GetList(Array("NAME"=>"DESC"), $arFilter, false);
while ($arr = $db_list->GetNext()) {
   $arResult["SECTIONS"][$arr["ID"]]["NAME"] = $arr["NAME"];
   $arResult["SECTIONS"][$arr["ID"]]["CODE"] = $arr["CODE"];
}
?>
