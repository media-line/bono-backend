<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<nav class="top-menu header__top-menu">
    <ul class="top-menu__menu">

<?
$previousLevel = 0;
foreach($arResult as $arItem):?>

	<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
		<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
	<?endif?>

	<?if ($arItem["IS_PARENT"]):?>

		<?if ($arItem["DEPTH_LEVEL"] == 1):?>
			<li class="top-menu__element top-menu__element_parent"><span class="top-menu__link top-menu__link_disable"><?=$arItem["TEXT"]?></span>
				<ul class="top-menu__inner">
		<?else:?>
			<li class="top-menu__inner-element top-menu__inner-element_parent item-selected"><span class="top-menu__inner-link"><?=$arItem["TEXT"]?></span>
				<ul class="top-menu__inner">
		<?endif?>

	<?else:?>

		<?if ($arItem["PERMISSION"] > "D"):?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li class="top-menu__element"><a href="<?=$arItem["LINK"]?>" class="top-menu__link"><?=$arItem["TEXT"]?></a></li>
			<?else:?>
				<li class="top-menu__inner-element"><a href="<?=$arItem["LINK"]?>" class="top-menu__inner-link"><?=$arItem["TEXT"]?></a></li>
			<?endif?>

		<?else:?>

			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<li  class="top-menu__element"><a href="" class="top-menu__link" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
			<?else:?>
				<li><a href="" class="denied" title="<?=GetMessage("MENU_ITEM_ACCESS_DENIED")?>"><?=$arItem["TEXT"]?></a></li>
			<?endif?>

		<?endif?>

	<?endif?>

	<?$previousLevel = $arItem["DEPTH_LEVEL"];?>

<?endforeach?>

<?if ($previousLevel > 1)://close last item tags?>
	<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
<?endif?>

    </ul>
</nav>
<?endif?>
