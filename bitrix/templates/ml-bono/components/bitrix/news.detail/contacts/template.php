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
<div class="detail-contact">
	<div id="detail-contact__map" class="detail-contact__map"></div>

	<div class="detail-contact__row">
		<div class="detail-contact__info">
			<div class="detail-contact__title">
				<?echo $arResult["PREVIEW_TEXT"];?>
			</div>

			<div class="detail-contact__text">
				<?echo $arResult["DETAIL_TEXT"];?>
			</div>

			<div class="detail-contact__contacts">
				<?php foreach ($arResult['PROPERTIES']['PHONE']['VALUE'] as $key=>$code) { ?>
					<?php $phone = $code.$arResult['PROPERTIES']['PHONE']['DESCRIPTION'][$key];
					$phone = str_replace(array('-', '(', ')', ' ' ), '', $phone); ?>
					<div class="contact">
						<div class="contact__logo contact__logo_phone"></div>
						<div class="contact__content"><a href="tel:<?php echo $phone; ?>"><?php echo $code; ?> <span class="contact__highlight contact__highlight_red"><?php echo $arResult['PROPERTIES']['PHONE']['DESCRIPTION'][$key]; ?></span></a></div>
					</div>
				<?php } ?>

				<?php foreach ($arResult['PROPERTIES']['EMAIL']['VALUE'] as $key=>$email) { ?>
					<div class="contact">
						<div class="contact__logo contact__logo_mail"></div>
						<div class="contact__content"><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></div>
					</div>
				<?php } ?>

				<?php foreach ($arResult['PROPERTIES']['ADDRESS']['VALUE'] as $key=>$address) { ?>
					<div class="contact">
						<div class="contact__logo contact__logo_address"></div>
						<div class="contact__content"><?php echo $address; ?></div>
					</div>
				<?php } ?>
			</div>
		</div>

		<div class="detail-contact__callback">
			<div class="detail-contact__form">
				<?$APPLICATION->IncludeComponent(
	"bitrix:form.result.new",
	"",
	Array(
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"CHAIN_ITEM_LINK" => "",
		"CHAIN_ITEM_TEXT" => "",
		"EDIT_URL" => "",
		"IGNORE_CUSTOM_TEMPLATE" => "N",
		"LIST_URL" => "",
		"SEF_MODE" => "N",
		"SUCCESS_URL" => "",
		"USE_EXTENDED_ERRORS" => "Y",
		"VARIABLE_ALIASES" => Array("RESULT_ID"=>"RESULT_ID","WEB_FORM_ID"=>"WEB_FORM_ID"),
		"WEB_FORM_ID" => "1"
	)
);?>
			</div>
		</div>
	</div>
</div>
