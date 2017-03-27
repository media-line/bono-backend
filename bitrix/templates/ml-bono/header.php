<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);

$isMainpage = false;
if ($APPLICATION->GetCurPage(false) === '/') {
    $isMainpage = true;
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="utf-8">
	<title><?$APPLICATION->ShowTitle()?></title>
	<link rel="shortcut icon" type="image/x-icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico" />

    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700&amp;subset=cyrillic" rel="stylesheet">

    <?php $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/common.css'); ?>
	<?php if ($isMainpage) {
		 $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/mainpage.css');
	} else {
		$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/pageinner.css');
	} ?>

    <?php $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/common.js'); ?>
    <?php if ($isMainpage) {
		 $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/mainpage.js');
	} else {
		$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/pageinner.js');
	} ?>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?$APPLICATION->ShowHead();?>
</head>
<body>
    <div id="panel"><?$APPLICATION->ShowPanel();?></div>

<div class="container-height">
    <header class="header">
        <div class="header__wrapper">
            <div class="header__row header__row_first">
                <div class="logo header__logo">
                    <? $APPLICATION->IncludeFile(SITE_DIR."include/logo.php", Array('zzz'=>'zzxc'), Array()); ?>
                </div>

                <div class="header__search-wrapper">
                    <?$APPLICATION->IncludeComponent("bitrix:search.form","bono",Array(
                            "PAGE" => "#SITE_DIR#search/index.php"
                        )
                    );?>
                </div>

                <div class="header__menu-button">
                    <button class="top-menu__menu-button">
                        <span class="top-menu__line"></span>
                        <span class="top-menu__line"></span>
                        <span class="top-menu__line"></span>
                    </button>
                </div>

                <div class="contact header__contact header__contact_first">
                    <div class="contact__logo contact__logo_phone"></div>
                    <div class="contact__content"><? $APPLICATION->IncludeFile(SITE_DIR."include/header-phone-number.php", Array(), Array()); ?></div>
                </div>

                <div class="contact header__contact header__contact_second">
                    <div class="contact__logo contact__logo_mail"></div>
                    <div class="contact__content"><? $APPLICATION->IncludeFile(SITE_DIR."include/header-mail.php", Array(), Array()); ?></div>
                </div>
            </div>

            <div class="header__row header__row_second">
                <div class="header__top-menu-block">
                <?$APPLICATION->IncludeComponent("bitrix:menu", "top-menu", Array(
	"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
		"MAX_LEVEL" => "1",	// Уровень вложенности меню
		"CHILD_MENU_TYPE" => "top",	// Тип меню для остальных уровней
		"USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"ALLOW_MULTI_SELECT" => "Y",	// Разрешить несколько активных пунктов одновременно
		"MENU_CACHE_TYPE" => "N",	// Тип кеширования
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
	),
	false
);?>
                </div>

                <a href="/" class="cabinet-button header__cabinet-button">
                    <div class="cabinet-button__logo"></div>
                    <div class="cabinet-button__logo_hover"></div>
                    <div class="cabinet-button__text">
                        <?php echo GetMessage('BUTTON_APP'); ?>
                    </div>
                </a>
            </div>
        </div>
    </header>

	<?php if (!$isMainpage) { ?>
		<div class="container-height__content">
			<div class="page-inner">
				<div class="page-inner__breadcrumbs-block">
					<?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "bono", Array(
	"START_FROM" => "0",	// Номер пункта, начиная с которого будет построена навигационная цепочка
		"PATH" => "",	// Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
		"SITE_ID" => "s1",	// Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
	),
	false
);?>
		        </div>

				<div class="page-inner__title">
		            <?$APPLICATION->ShowTitle()?>
		        </div>

		        <div class="page-inner__content">
	<?php } ?>
