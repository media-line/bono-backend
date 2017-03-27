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
<div class="list-clients">
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

		$img = CFile::ResizeImageGet( $arItem['PREVIEW_PICTURE']['ID'], array( "width" => 400, "height" => 400 ), BX_RESIZE_IMAGE_EXACT, true, array() );
		?>
		<div class="list-clients__logo-block" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<div class="logo-block">
				<div class="logo-block__img">
					<img src="<?php echo $img['src']; ?>" alt="<?php echo $arItem['PREVIEW_PICTURE']['ALT']; ?>" title="<?php echo $arItem['PREVIEW_PICTURE']['TITLE']; ?>">
				</div>

				<div class="logo-block__title">
					<?php echo $arItem['NAME']; ?>
				</div>
			</div>
		</div>
	<?endforeach;?>
</div>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
