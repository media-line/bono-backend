<? /*
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

global $APPLICATION;
$aMenuLinksExt = array();

if(CModule::IncludeModule('iblock'))
{
	$arOrder = array(
		"SORT"=>"ASC"
	);

	$arFilter = array(
		"TYPE" => "services",
		"SITE_ID" => SITE_ID,
		"IBLOCK_ID" => 4,
	);

	$arSelectFields = Array("ID", "NAME", "CODE");

	$res = CIBlockElement::GetList($arOrder, $arFilter, false, false, $arSelectFields);

	while($ob = $res->GetNextElement()) {
		$aMenuLinksExt[] = Array(
			$ob->fields['NAME'],
			'/uslugi/'.$ob->fields['CODE'].'/',
			array(),
			array(),
			''
		);
	}
}

$aMenuLinks = array_merge($aMenuLinksExt, $aMenuLinks);
*/
?>
