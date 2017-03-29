<?
if ($arResult['PROPERTIES']['EVENTS']['VALUE'][0]) {
    $ids = array();

    foreach ($arResult['PROPERTIES']['EVENTS']['VALUE'] as $value) {
        array_push($ids, $value);
    }

    $arOrder = array(
        "SORT"=>"ASC"
    );

    $arFilter = array(
        "ID" => $ids,
    );

    $arSelectFields = Array("ID", "NAME", "CODE", "PREVIEW_PICTURE");

    $res = CIBlockElement::GetList($arOrder, $arFilter, false, false, $arSelectFields);

    $i = 0;
    while($ob = $res->GetNextElement()) {
        $arResult['PROPERTIES']['EVENTS']['FULL'][$i] = $ob;
        $i++;
    }
}


if ($arResult['PROPERTIES']['CONDITION']['VALUE'][0]) {
    $ids = array();

    foreach ($arResult['PROPERTIES']['CONDITION']['VALUE'] as $value) {
        array_push($ids, $value);
    }

    $arOrder = array(
        "SORT"=>"ASC"
    );

    $arFilter = array(
        "ID" => $ids,
    );

    $arSelectFields = Array("ID", "NAME", "DETAIL_PICTURE", "DETAIL_TEXT");

    $res = CIBlockElement::GetList($arOrder, $arFilter, false, false, $arSelectFields);

    $i = 0;
    while($ob = $res->GetNextElement()) {
        $arResult['PROPERTIES']['CONDITION']['FULL'][$i] = $ob;
        $i++;
    }
}


if ($arResult['PROPERTIES']['SCENARIO']['VALUE'][0]) {
    $ids = array();

    foreach ($arResult['PROPERTIES']['SCENARIO']['VALUE'] as $value) {
        array_push($ids, $value);
    }

    $arOrder = array(
        "SORT"=>"ASC"
    );

    $arFilter = array(
        "ID" => $ids,
    );

    $arSelectFields = Array("ID", "NAME", "DETAIL_PICTURE", "DETAIL_TEXT");

    $res = CIBlockElement::GetList($arOrder, $arFilter, false, false, $arSelectFields);

    $i = 0;
    while($ob = $res->GetNextElement()) {
        $arResult['PROPERTIES']['SCENARIO']['FULL'][$i] = $ob;
        $i++;
    }
}
?>
