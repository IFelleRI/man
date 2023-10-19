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
/** @var CBitrixComponent $component */?>
<div class="catalog__filters flex">
	<a href="/catalog/" class="catalog__filter <?=(!empty($arResult['MAIN_PAGE']) ? $arResult['MAIN_PAGE'] : '')?> hover"><?=GetMessage('ALL_CATALOG')?></a>
	<?php foreach ($arResult['SECTIONS'] as $item):?>
		<a href="<?=$item['SECTION_PAGE_URL']?>" class="catalog__filter <?=(!empty($item['SELECTED']) ? $item['SELECTED'] : '')?> hover"><?=$item['NAME']?></a>
	<?php endforeach;?>
</div>
