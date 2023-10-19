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

<?php foreach($arResult["ITEMS"] as $arItem):?>
	<div class="blog-block grid shadow">
		<div class="blog-top grid">
			<div class="blog-image" style="background-image: url(<?=$arItem['PREVIEW_PICTURE']['SRC']?>);"></div>
			<div class="blog-info grid">
                <span class="blog-name">
                    <?=$arItem['NAME']?>
                </span>
				<p class="blog-description">
					<?=$arItem['PREVIEW_TEXT']?>
				</p>
			</div>
		</div>
		<a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="blog-more hover">Подробнее</a>
	</div>
<?endforeach;?>


