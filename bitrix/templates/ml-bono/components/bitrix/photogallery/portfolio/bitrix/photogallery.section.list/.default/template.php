<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/********************************************************************
				Input params
********************************************************************/
$arParams["ALBUM_PHOTO_SIZE"] = intVal($arParams["ALBUM_PHOTO_SIZE"]);

/********************************************************************
				/Input params
********************************************************************/

// TODO: get rid of this
CAjax::Init();
// TODO: get rid of this too
$GLOBALS['APPLICATION']->AddHeadScript('/bitrix/js/main/utils.js');

$GLOBALS['APPLICATION']->AddHeadScript('/bitrix/components/bitrix/photogallery/templates/.default/script.js');
if (!$this->__component->__parent || strpos($this->__component->__parent->__name, "photogallery") === false):
	$GLOBALS['APPLICATION']->SetAdditionalCSS('/bitrix/components/bitrix/photogallery/templates/.default/style.css');
	$GLOBALS['APPLICATION']->SetAdditionalCSS('/bitrix/components/bitrix/photogallery/templates/.default/themes/gray/style.css');
?>
<style>
.photo-album-list div.photo-item-cover-block-container,
.photo-album-list div.photo-item-cover-block-outer,
.photo-album-list div.photo-item-cover-block-inner{
	background-color: white;
	height:<?=($arParams["ALBUM_PHOTO_SIZE"] + 16)?>px;
	width:<?=($arParams["ALBUM_PHOTO_SIZE"] + 40)?>px;}
div.photo-album-avatar{
	width:<?=$arParams["ALBUM_PHOTO_SIZE"]?>px;
	height:<?=$arParams["ALBUM_PHOTO_SIZE"]?>px;}
ul.photo-album-list div.photo-item-info-block-outside {
	width: <?=($arParams["ALBUM_PHOTO_SIZE"] + 48)?>px;}
</style>
<?
endif;
?>

<?if (empty($arResult["SECTIONS"])):?>
<div class="photo-info-box photo-info-box-sections-list-empty">
	<div class="photo-info-box-inner"><?=GetMessage("P_EMPTY_DATA")?></div>
</div>
<?
return false;
endif;?>

<div class="list-portfolio">
	<?foreach($arResult["SECTIONS"] as $res):?>
		<? $img = CFile::ResizeImageGet( $res['PICTURE']['ID'], array( "width" => 400, "height" => 400 ), BX_RESIZE_IMAGE_EXACT, true, array() ); ?>

		<a href="<?=$res["LINK"]?>" class="img-block list-portfolio__img-block" id="photo_album_info_<?=$res["ID"]?>">
			<div class="img-block__cover">
				<div class="img-block__img" style="background-image: url('<?php echo $img['src'] ; ?>');">

				</div>

				<div class="img-block__hover"></div>
			</div>

			<div class="img-block__text">
				<?= $res["NAME"]?>
			</div>
		</a>
	<?endforeach;?>
</div>
<div class="empty-clear"></div>

<?
if (!empty($arResult["NAV_STRING"])):
?>
<div class="photo-navigation photo-navigation-bottom">
	<?=$arResult["NAV_STRING"]?>
</div>
<?
endif;
?>
