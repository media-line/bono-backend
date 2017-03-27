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

<section class="news-slider">
    <div class="news-slider__title">
        <?php echo $arResult['NAME']; ?>
    </div>

    <div class="news-slider__slick">
        <?php foreach ($arResult["ITEMS"] as $arItem) { ?>
            <div class="single-news news-slider__single-news">
                <a href="<?php echo $arItem['DETAIL_PAGE_URL']; ?>" class="single-news__wrapper">
                    <div class="single-news__title">
                        <?php echo $arItem['NAME']; ?>
                    </div>

                    <div class="single-news__date">
                        <?php echo FormatDate('d/m/y', MakeTimeStamp($arItem['ACTIVE_FROM'])); ?>
                    </div>

                    <div class="single-news__text">
                        <?php echo $arItem['PREVIEW_TEXT']; ?>
                    </div>
                </a>
            </div>
        <?php } ?>
    </div>
</section>
