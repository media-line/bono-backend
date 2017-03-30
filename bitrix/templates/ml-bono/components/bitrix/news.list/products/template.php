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

$oneRow = false;
if (count($arResult["ITEMS"]) < 4) {
	$oneRow = true;
}
?>

<div class="list-products<?php if ($oneRow) { echo ' list-products_one-row'; } ?>">
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<?php $img = CFile::ResizeImageGet( $arItem['DETAIL_PICTURE']['ID'], array( "width" => 500, "height" => 500 ), BX_RESIZE_IMAGE_EXACT, true, array() ); ?>

		<div class="list-products__product">
			<div class="product">
				<div class="product__img">
					<img src="<?php echo $img['src']; ?>" alt="<?php echo $arItem['DETAIL_PICTURE']['ALT']; ?>" title="<?php echo $arItem['DETAIL_PICTURE']['TITLE']; ?>">
				</div>

				<div class="product__title">
					<?php echo $arItem['NAME']; ?>
				</div>

				<div class="product__desc">
					<?php echo $arItem['DETAIL_TEXT']; ?>
				</div>
			</div>
		</div>
	<?endforeach;?>
</div>

<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
