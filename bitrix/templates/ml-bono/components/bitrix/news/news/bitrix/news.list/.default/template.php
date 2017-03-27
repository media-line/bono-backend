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
<div class="list-news">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?foreach($arResult["ITEMS"] as $key=>$arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

	$img = CFile::ResizeImageGet( $arItem['PREVIEW_PICTURE']['ID'], array( "width" => 700, "height" => 700 ), BX_RESIZE_IMAGE_EXACT, true, array() ); ?>

	<?php if ($key == 0) { ?>
		<a href="<?php echo $arItem['DETAIL_PAGE_URL']; ?>" class="news-preview">
			<?php if ($img['src'] && $arParams["DISPLAY_PICTURE"]!="N") { ?>
				<div class="news-preview__img">
					<img src="<?php echo $img['src']; ?>" alt="<?php echo $arItem['PREVIEW_PICTURE']['ALT']; ?>" title="<?php echo $arItem['PREVIEW_PICTURE']['TITLE']; ?>">

					<div class="news-preview__background"></div>
				</div>
			<?php } ?>

			<div class="news-preview__info">
				<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
					<div class="news-preview__title">
						<?php echo $arItem['NAME']; ?>
					</div>
				<?endif;?>

				<?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
					<div class="news-preview__date">
						 <?php echo FormatDate('d/m/y', MakeTimeStamp($arItem['ACTIVE_FROM'])); ?>
					</div>
				<?endif;?>

				<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
					<div class="news-preview__text">
						<?php echo $arItem['PREVIEW_TEXT']; ?>
					</div>
				<?endif;?>
			</div>
		</a>

		<div class="list-news__header">
			<?php echo GetMessage('NEWS_LIST_DEFAULT_ALL_NEWS'); ?>

			<div class="list-news__filter">
				<div class="list-news__filter-text"><?php echo GetMessage('NEWS_LIST_DEFAULT_SHOW_NEWS_FROM'); ?>:</div>

				<?php foreach ($arResult["SECTIONS"] as $id=>$section) { ?>
					<?php if ($id == $arResult['SECTION']['PATH'][0]['ID']) { ?>
						<span class="list-news__filter-block list-news__filter-block_active">
					<?php } else { ?>
						<a href="<?php echo $arParams['IBLOCK_URL'].$section['CODE'].'/'; ?>" class="list-news__filter-block">
					<?php } ?>

						<?php echo $section['NAME']; ?>

					<?php if ($id == $arResult['SECTION']['PATH'][0]['ID']) { ?>
						</span>
					<?php } else { ?>
						</a>
					<?php } ?>
				<?php } ?>
			</div>
		</div>

		<div class="list-news__news">

	<?php } else { ?>
		<div class="list-news__single-wrapper" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<div class="single-news list-news__single-news">
				<a href="<?php echo $arItem['DETAIL_PAGE_URL']; ?>" class="single-news__wrapper">
					<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
						<div class="single-news__title">
							<?php echo $arItem["NAME"]; ?>
						</div>
					<?endif;?>

					<?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
						<div class="single-news__date">
							<?php echo FormatDate('d/m/y', MakeTimeStamp($arItem['ACTIVE_FROM'])); ?>
						</div>
					<?endif?>

					<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
						<div class="single-news__text">
							<?echo $arItem["PREVIEW_TEXT"];?>
						</div>
					<?endif;?>
				</a>
			</div>
		</div>
	<?php } ?>
<?endforeach;?>
</div>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>
