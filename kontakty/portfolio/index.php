<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Портфолио");
?><?$APPLICATION->IncludeComponent(
	"bitrix:photogallery", 
	"portfolio", 
	array(
		"ADDITIONAL_SIGHTS" => array(
		),
		"ALBUM_PHOTO_SIZE" => "120",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"DATE_TIME_FORMAT_DETAIL" => "d.m.Y",
		"DATE_TIME_FORMAT_SECTION" => "d.m.Y",
		"DRAG_SORT" => "Y",
		"ELEMENTS_PAGE_ELEMENTS" => "50",
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_ORDER" => "desc",
		"IBLOCK_ID" => "8",
		"IBLOCK_TYPE" => "portfolio",
		"JPEG_QUALITY" => "100",
		"JPEG_QUALITY1" => "100",
		"ORIGINAL_SIZE" => "1280",
		"PAGE_NAVIGATION_TEMPLATE" => "",
		"PATH_TO_FONT" => "default.ttf",
		"PATH_TO_USER" => "",
		"PHOTO_LIST_MODE" => "N",
		"SECTION_PAGE_ELEMENTS" => "15",
		"SECTION_SORT_BY" => "UF_DATE",
		"SECTION_SORT_ORD" => "DESC",
		"SEF_MODE" => "Y",
		"SET_TITLE" => "N",
		"SHOWN_ITEMS_COUNT" => "6",
		"SHOW_LINK_ON_MAIN_PAGE" => array(
		),
		"SHOW_NAVIGATION" => "N",
		"SHOW_TAGS" => "N",
		"THUMBNAIL_SIZE" => "100",
		"UPLOAD_MAX_FILE_SIZE" => "100",
		"USE_COMMENTS" => "N",
		"USE_LIGHT_VIEW" => "Y",
		"USE_RATING" => "N",
		"USE_WATERMARK" => "N",
		"WATERMARK_MIN_PICTURE_SIZE" => "800",
		"WATERMARK_RULES" => "USER",
		"COMPONENT_TEMPLATE" => "portfolio",
		"SEF_FOLDER" => "/kontakty/portfolio/",
		"SEF_URL_TEMPLATES" => array(
			"index" => "",
			"section" => "#SECTION_ID#/",
			"section_edit" => "#SECTION_ID#/action/#ACTION#/",
			"section_edit_icon" => "#SECTION_ID#/icon/action/#ACTION#/",
			"upload" => "#SECTION_ID#/action/upload/",
			"detail" => "#SECTION_ID#/#ELEMENT_ID#/",
			"detail_edit" => "#SECTION_ID#/#ELEMENT_ID#/action/#ACTION#/",
			"detail_list" => "list/",
			"search" => "search/",
		)
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>