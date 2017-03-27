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
$this->setFrameMode(true);?>
<div class="search">
    <form action="<?=$arResult["FORM_ACTION"]?>" class="search__form">
        <input type="text" name="q" value="" size="15" maxlength="50" class="search__input" placeholder="<?php echo GetMessage('BSF_T_SEARCH_FIELD'); ?>">
        
        <button name="s" type="submit" class="search__button"></button>
    </form>
</div>
