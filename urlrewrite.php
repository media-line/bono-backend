<?
$arUrlRewrite = array(
	array(
		"CONDITION" => "#^/uslugi/arenda-oborudovaniya/([0-9a-zA-Z-]+)/.*#",
		"RULE" => "SECTION_CODE=\$1",
		"ID" => "",
		"PATH" => "/uslugi/arenda-oborudovaniya/oborudovanie/index.php",
	),
	array(
		"CONDITION" => "#^/uslugi/keytering/([0-9a-zA-Z-]+)/.*#",
		"RULE" => "ELEMENT_CODE=\$1",
		"ID" => "",
		"PATH" => "/uslugi/keytering/meropriyatiya/index.php",
	),
	array(
		"CONDITION" => "#^/o-kompanii/portfolio/#",
		"RULE" => "",
		"ID" => "bitrix:photogallery",
		"PATH" => "/o-kompanii/portfolio/index.php",
	),
	array(
		"CONDITION" => "#^/kontakty/portfolio/#",
		"RULE" => "",
		"ID" => "bitrix:photogallery",
		"PATH" => "/kontakty/portfolio/index.php",
	),
	array(
		"CONDITION" => "#^/sotrudniki/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/sotrudniki/index.php",
	),
	array(
		"CONDITION" => "#^/novosti/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/novosti/index.php",
	),
	array(
		"CONDITION" => "#^/news/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/news/index.php",
	),
);

?>