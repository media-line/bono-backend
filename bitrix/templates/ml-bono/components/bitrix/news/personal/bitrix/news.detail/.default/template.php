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

$img = CFile::ResizeImageGet( $arResult["DETAIL_PICTURE"]['ID'], array( "width" => 600, "height" => 600 ), BX_RESIZE_IMAGE_EXACT, true, array() );
?>
<div class="detail-personal">
	<?if($arParams["DISPLAY_PICTURE"]!="N" && $img) { ?>
		<div class="detail-personal__photo" style="background-image: url('<?php echo $img['src']; ?>');">

		</div>
	<?php } ?>

	<div class="detail-personal__info">
		<?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
			<div class="detail-personal__name">
				<?=$arResult["NAME"]?>
			</div>
		<?endif;?>

		<?php if ($arResult['PROPERTIES']['JOB']['VALUE']) { ?>
			<div class="detail-personal__job">
				<?=$arResult['PROPERTIES']['JOB']['VALUE']?>
			</div>
		<?php } ?>

		<div class="detail-personal__text">
			<?=$arResult["DETAIL_TEXT"]?>
		</div>

		<a href="<?php echo $arParams['IBLOCK_URL']; ?>" class="button">
			<?php echo GetMessage('PERSONAL_RETURN_TO_LIST'); ?>
		</a>
	</div>
</div>
