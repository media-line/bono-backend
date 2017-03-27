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

<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>

<div class="list-personal">
	<?foreach($arResult["ITEMS"] as $key=>$arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

		$img = CFile::ResizeImageGet( $arItem['PREVIEW_PICTURE']['ID'], array( "width" => 400, "height" => 400 ), BX_RESIZE_IMAGE_EXACT, true, array() ); ?>

		<?php if ($key%2 == 0) { ?>
			<div class="list-personal__row">
		<?php } ?>

		<a href="<?php echo $arItem['DETAIL_PAGE_URL']; ?>" class="personal-item list-personal__personal-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<?php if ($img['src'] && $arParams["DISPLAY_PICTURE"]!="N") { ?>
				<div class="personal-item__photo-wrapper">
					<div class="personal-item__photo" style="background-image: url('<?php echo $img['src']; ?>');">

					</div>

					<div class="personal-item__photo-background">

					</div>
				</div>
			<?php } ?>

			<div class="personal-item__info">
				<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
					<div class="personal-item__name">
						<?php echo $arItem['NAME']; ?>
					</div>
				<?endif;?>

				<?php if ($arItem['PROPERTIES']['JOB']['VALUE']) { ?>
					<div class="personal-item__job">
						<?php echo $arItem['PROPERTIES']['JOB']['VALUE']; ?>
					</div>
				<?php } ?>

				<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
					<div class="personal-item__text">
						<?php echo $arItem["PREVIEW_TEXT"]; ?>
					</div>
				<?endif;?>
			</div>
		</a>

		<?php if ($key%2 != 0) { ?>
			</div>
		<?php } ?>
	<?endforeach;?>
</div>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
