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

$img = CFile::ResizeImageGet( $arResult['DETAIL_PICTURE']['ID'], array( "width" => 1100, "height" => 300 ), BX_RESIZE_IMAGE_EXACT, true, array() );
?>



<div class="service-detail">
	<?php if ($img['src']) { ?>
		<div class="service-detail__img">
			<img src="<?php echo $img['src']; ?>" alt="<?php echo $arResult['DETAIL_PICTURE']['ALT']; ?>" title="<?php echo $arResult['DETAIL_PICTURE']['TITLE']; ?>">
		</div>
	<?php } ?>

	<?php if ($arResult['PROPERTIES']['MENU']['VALUE'] == 'ДА') { ?>
		<div class="service-detail__menu-block">
			<div class="menu-block<?php if ($arResult['PROPERTIES']['MENU_CLASS']['VALUE']) { echo ' menu-block_'.$arResult['PROPERTIES']['MENU_CLASS']['VALUE']; } ?>">
				<div class="menu-block__row">
					<?php if ($arResult['PROPERTIES']['MENU_IMG']['VALUE']) { ?>
						<?php $imgMenu = CFile::ResizeImageGet( $arResult['PROPERTIES']['MENU_IMG']['VALUE'], array( "width" => 500, "height" => 500 ), BX_RESIZE_IMAGE_EXACT, true, array() ); ?>

						<div class="menu-block__img">
							<img src="<?php echo $imgMenu['src']; ?>" alt="">
						</div>
					<?php } ?>

					<div class="menu-block__info">
						<?php if ($arResult['PROPERTIES']['MENU_NAME']['VALUE']) { ?>
							<div class="menu-block__title">
								<?php echo $arResult['PROPERTIES']['MENU_NAME']['VALUE']; ?>
							</div>
						<?php } ?>

						<div class="menu-block__text">
							<?php if ($arResult['PROPERTIES']['MENU_TEXT']['~VALUE']['TEXT']) { ?>
								<?php echo $arResult['PROPERTIES']['MENU_TEXT']['~VALUE']['TEXT']; ?>
							<?php } ?>

							<?php if ($arResult['PROPERTIES']['MENU_LIST']['VALUE']) { ?>
								<ul>
									<?php foreach ($arResult['PROPERTIES']['MENU_LIST']['VALUE'] as $element) { ?>
										<li><?php echo $element; ?></li>
									<?php } ?>
								</ul>
							<?php } ?>
						</div>

						<?php if ($arResult['PROPERTIES']['MENU_LINK']['VALUE']) { ?>
							<?php $fileMenu = CFile::GetByID($arResult['PROPERTIES']['MENU_LINK']['VALUE']); ?>
							<?php $fileSRC = CFile::GetPath($arResult['PROPERTIES']['MENU_LINK']['VALUE']); ?>

							<a href="<?php echo $fileSRC; ?>" class="button menu-block__button">
								Скачать меню <?php echo round($fileMenu->arResult[0]['FILE_SIZE']/1024/1024, 2); ?> мб
							</a>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>

	<?php if ($arResult['PROPERTIES']['SCENARIO']['VALUE'][0]) { ?>
		<div class="service-detail__menu-block service-detail__menu-block_without-padding">
			<div class="menu-block">
				<div class="menu-block__row">
					<div class="menu-block__steps">
						<div class="menu-block__title">
							<?php echo $arResult['PROPERTIES']['SCENARIO_NAME']['VALUE']; ?>
						</div>

						<div class="steps">
							<div class="two-column-grid">
								<?php foreach ($arResult['PROPERTIES']['SCENARIO']['FULL'] as $skey => $scenario) { ?>
									<?php $sumScenario = count($arResult['PROPERTIES']['SCENARIO']['FULL']); ?>

									<?php if ($skey == 0 || $skey == ceil($sumScenario/2)) { ?>
										<div class="two-column-grid__column">
									<?php } ?>

									<div class="step steps__step">
										<div class="step__img">
											<img src="<?php echo CFile::GetPath($scenario->fields['DETAIL_PICTURE']); ?>" alt="">
										</div>
										<div class="step__text">
											<?php echo $scenario->fields['DETAIL_TEXT']; ?>
										</div>
									</div>

									<?php if ($skey == (ceil($sumScenario/2)-1) || $skey == ($sumScenario-1)) { ?>
										</div>
									<?php } ?>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>

	<div class="service-detail__content">
		<?php if ($arResult['DETAIL_TEXT']) { ?>
			<p class="service-detail__simple-text">
				<?php echo $arResult['DETAIL_TEXT']; ?>
			</p>
		<?php } ?>

		<?php if ($arResult['PROPERTIES']['MODAL']['VALUE'] == 'ДА') { ?>
			<a href="/" class="button button_red modal__app-button" data-modal-button="order-online"><?php echo GetMessage('NEWS_DETAIL_SERVICE_ONLINE'); ?></a>

			<div class="modal" data-modal="order-online">
				<div class="modal__wrapper">
				<div class="modal__background"></div>
				<div class="modal__block modal__block_wide">
					<div class="modal__header">
						<?php echo GetMessage('NEWS_DETAIL_SERVICE_ONLINE'); ?>
						<div class="modal__close"></div>
					</div>

					<div class="modal__body">
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
				"WEB_FORM_ID" => "2"
			)
		);?>
					</div>
				</div>
				</div>
			</div>
		<?php } ?>


		<?php if ($arResult['PROPERTIES']['COLUMN_TEXT_LEFT']['VALUE']['TEXT'] || $arResult['PROPERTIES']['COLUMN_TEXT_RIGHT']['VALUE']['TEXT']) { ?>
			<div class="service-detail__two-column-grid">
				<div class="two-column-grid">
					<div class="two-column-grid__column">
						<?php echo $arResult['PROPERTIES']['COLUMN_TEXT_LEFT']['VALUE']['TEXT']; ?>
					</div>

					<div class="two-column-grid__column">
						<?php echo $arResult['PROPERTIES']['COLUMN_TEXT_RIGHT']['VALUE']['TEXT']; ?>
					</div>
				</div>
			</div>
		<?php } ?>


		<?php if ($arResult['PROPERTIES']['CONDITION']['VALUE'][0] || $arResult['PROPERTIES']['ORDER']['VALUE'][0]) { ?>
			<div class="two-column-grid">
				<div class="two-column-grid__column">
					<div class="service-detail__title">
						<?php echo GetMessage('NEWS_DETAIL_SERVICE_CONDITION'); ?>
					</div>

					<?php foreach ($arResult['PROPERTIES']['CONDITION']['FULL'] as $condition) { ?>
						<div class="info-block">
							<div class="info-block__header">
								<div class="info-block__logo">
									<img src="<?php echo CFile::GetPath($condition->fields['DETAIL_PICTURE']); ?>" alt="">
								</div>

								<?php echo $condition->fields['NAME']; ?>:
							</div>

							<p class="info-block__text">
								<?php echo $condition->fields['DETAIL_TEXT']; ?>
							</p>
						</div>
					<? } ?>
				</div>

				<div class="two-column-grid__column">
					<div class="service-detail__title">
						<?php echo GetMessage('NEWS_DETAIL_SERVICE_ORDER'); ?>
					</div>

					<ul>
						<?php foreach ($arResult['PROPERTIES']['ORDER']['~VALUE'] as $orderElem) { ?>
							<li><?php echo $orderElem['TEXT']; ?></li>
						<?php } ?>
					</ul>
				</div>
			</div>
		<?php } ?>
	</div>

	<?php if ($arResult['PROPERTIES']['EVENTS']['VALUE'][0]) { ?>
		<div class="service-detail__title service-detail__title_padding">
			<?php echo GetMessage('NEWS_DETAIL_SERVICE_EVENTS'); ?>
		</div>

		<div class="img-blocks">
			<?php foreach ($arResult['PROPERTIES']['EVENTS']['FULL'] as $item) { ?>
				<?php $imgEvent = CFile::ResizeImageGet( $item->fields['PREVIEW_PICTURE'], array( "width" => 400, "height" => 300 ), BX_RESIZE_IMAGE_EXACT, true, array() ); ?>

				<a href="/uslugi/keytering/<?php echo $item->fields['CODE']; ?>/" class="img-block img-blocks__img-block">
					<div class="img-block__cover">
						<div class="img-block__img" style="background-image: url('<?php echo $imgEvent['src']; ?>');">

						</div>

						<div class="img-block__hover"></div>
					</div>

					<div class="img-block__text">
						<?php echo $item->fields['NAME']; ?>
					</div>
				</a>
			<?php } ?>
		</div>
	<?php } ?>

	<?php if ($arResult['PROPERTIES']['PROJECT']['VALUE'][0]) { ?>
		<div class="service-detail__title service-detail__title_padding">
			<?php echo $arResult['PROPERTIES']['PROJECT_NAME']['VALUE']; ?>
		</div>

		<div class="img-blocks img-blocks_slider">
			<?php foreach ($arResult['PROPERTIES']['PROJECT']['FULL'] as $project) { ?>
				<? $prev = CFile::ResizeImageGet( $project->fields['DETAIL_PICTURE'], array( "width" => 500, "height" => 500 ), BX_RESIZE_IMAGE_EXACT, true, array() ); ?>
				<? $full = CFile::ResizeImageGet( $project->fields['DETAIL_PICTURE'], array( "width" => 1920, "height" => 1024), BX_RESIZE_IMAGE_EXACT, true, array() ); ?>

				<a href="<?php echo $full['src']; ?>" class="img-block img-blocks__img-block" data-fancybox="gallery">
					<div class="img-block__cover">
						<div class="img-block__img" style="background-image: url('<?php echo $prev['src']; ?>');">

						</div>

						<div class="img-block__hover"></div>
					</div>

					<div class="img-block__text">
						<?php echo $project->fields['NAME']; ?>
					</div>
				</a>
			<?php } ?>
		</div>
	<?php } ?>

	<?php if ($arResult['PROPERTIES']['LEASE']['VALUE'][0]) { ?>
		<div class="img-blocks">
			<?php foreach ($arResult['PROPERTIES']['LEASE']['FULL'] as $category) { ?>
				<? $img = CFile::ResizeImageGet( $category->fields['PICTURE'], array( "width" => 500, "height" => 500 ), BX_RESIZE_IMAGE_EXACT, true, array() ); ?>

				<a href="<?php echo $category->fields['SECTION_PAGE_URL']; ?>" class="img-block img-blocks__img-block">
					<div class="img-block__cover">
						<div class="img-block__img" style="background-image: url('<?php echo $img['src']; ?>');">

						</div>

						<div class="img-block__hover"></div>
					</div>

					<div class="img-block__text">
						<?php echo $category->fields['NAME']; ?>
					</div>
				</a>
			<?php } ?>
		</div>
	<?php } ?>
</div>

<!-- закрывает .page-inner__content -->
</div>

<div class="page-inner__module">
	<section class="services">
		<?$APPLICATION->IncludeComponent(
			"bitrix:news.list",
			"services",
			array(
				"DISPLAY_DATE" => "N",
				"DISPLAY_NAME" => "Y",
				"DISPLAY_PICTURE" => "Y",
				"DISPLAY_PREVIEW_TEXT" => "Y",
				"AJAX_MODE" => "N",
				"IBLOCK_TYPE" => "services",
				"IBLOCK_ID" => "4",
				"NEWS_COUNT" => "4",
				"SORT_BY1" => "SORT",
				"SORT_ORDER1" => "ASC",
				"SORT_BY2" => "SORT",
				"SORT_ORDER2" => "ASC",
				"FILTER_NAME" => "",
				"FIELD_CODE" => array(
					0 => "",
					1 => "",
				),
				"PROPERTY_CODE" => array(
					0 => "",
					1 => "DESCRIPTION",
					2 => "",
				),
				"CHECK_DATES" => "Y",
				"DETAIL_URL" => "",
				"PREVIEW_TRUNCATE_LEN" => "",
				"ACTIVE_DATE_FORMAT" => "d.m.Y",
				"SET_TITLE" => "N",
				"SET_BROWSER_TITLE" => "N",
				"SET_META_KEYWORDS" => "N",
				"SET_META_DESCRIPTION" => "N",
				"SET_LAST_MODIFIED" => "N",
				"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
				"ADD_SECTIONS_CHAIN" => "N",
				"HIDE_LINK_WHEN_NO_DETAIL" => "N",
				"PARENT_SECTION" => "",
				"PARENT_SECTION_CODE" => "",
				"INCLUDE_SUBSECTIONS" => "N",
				"CACHE_TYPE" => "A",
				"CACHE_TIME" => "3600",
				"CACHE_FILTER" => "Y",
				"CACHE_GROUPS" => "Y",
				"DISPLAY_TOP_PAGER" => "N",
				"DISPLAY_BOTTOM_PAGER" => "N",
				"PAGER_TITLE" => "Новости",
				"PAGER_SHOW_ALWAYS" => "N",
				"PAGER_TEMPLATE" => "",
				"PAGER_DESC_NUMBERING" => "N",
				"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
				"PAGER_SHOW_ALL" => "N",
				"PAGER_BASE_LINK_ENABLE" => "N",
				"SET_STATUS_404" => "N",
				"SHOW_404" => "N",
				"MESSAGE_404" => "",
				"PAGER_BASE_LINK" => "",
				"PAGER_PARAMS_NAME" => "arrPager",
				"AJAX_OPTION_JUMP" => "N",
				"AJAX_OPTION_STYLE" => "N",
				"AJAX_OPTION_HISTORY" => "N",
				"AJAX_OPTION_ADDITIONAL" => "",
				"COMPONENT_TEMPLATE" => "services",
				"CURRENT_ELEMENT" => $arResult['ID']
			),
			false
		);?>
	</section>

<!-- .page-inner__module закрывается в футере вместо .page-inner__content -->
