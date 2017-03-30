<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<div class="services__row">
    <?php foreach ($arResult["ITEMS"] as $arItem) { ?>
        <?php if ($arParams['CURRENT_ELEMENT'] != $arItem['ID']) { ?>
            
        <? $img = CFile::ResizeImageGet( $arItem['PREVIEW_PICTURE']['ID'], array( "width" => 220, "height" => 280 ), BX_RESIZE_IMAGE_EXACT, true, array() ); ?>

            <div class="service services__service">
                <div class="service__info">
                    <div class="service__title">
                        <?php echo $arItem['NAME']; ?>
                    </div>

                    <div class="service__description">
                        <?php echo $arItem['PREVIEW_TEXT']; ?>
                    </div>

                    <a href="<?php echo $arItem['DETAIL_PAGE_URL']; ?>" class="button service__button">
                        <?php echo GetMessage('SERVICE_ELEMENT_READMORE'); ?>
                    </a>
                </div>

                <div class="service__img">
                    <img src="<?php echo $img['src']; ?>" alt="<?php echo $arItem['PREVIEW_PICTURE']['ALT']; ?>" title="<?php echo $arItem['PREVIEW_PICTURE']['TITLE']; ?>">
                </div>
            </div>
        <?php } ?>
    <?php } ?>
</div>
