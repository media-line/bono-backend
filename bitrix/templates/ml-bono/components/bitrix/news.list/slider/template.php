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
<section class="slider">
    <?php foreach($arResult["ITEMS"] as $arItem) { ?>
    <? $img = CFile::ResizeImageGet( $arItem['PREVIEW_PICTURE']['ID'], array( "width" => 1920, "height" => 550 ), BX_RESIZE_IMAGE_EXACT, true, array() ); ?>
    
        <div class="slider__slide">
            <img src="<?php echo $img['src']; ?>" alt="<?php echo $arItem['PREVIEW_PICTURE']['ALT']; ?>" title="<?php echo $arItem['PREVIEW_PICTURE']['TITLE']; ?>">

            <div class="slider__dots">
                <div class="slider__dots-wrapper">
                    <div class="slider__dots-inner">
                        <?php for ($i = 0; $i < count($arResult["ITEMS"]); $i++) { ?>
                            <div class="slider__dot<?php if ($i == 0) {echo ' slider__dot_active';} ?>"></div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</section>
