<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/** @var array $arParams */
/** @var array $arResult */
/** @global \CMain $APPLICATION */
/** @global \CUser $USER */
/** @global \CDatabase $DB */
/** @var \CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var array $templateData */
/** @var \CBitrixComponent $component */
$this->setFrameMode(true);
?>
<?php foreach ($arResult['ITEMS'] as $item):?>
    <div class="product grid">
        <div class="product__top grid">
            <img class="product__image" src="<?=$item['PREVIEW_PICTURE']['SRC']?>"/>
            <div class="product__info grid">
                <h3 class="product__name">
                    <?=$item['NAME']?>
                </h3>
                <p class="product__description">
                    <?=TruncateText($item['DETAIL_TEXT'], 120);?>
                </p>
            </div>
        </div>
        <div class="product__buy-area grid">
            <span class="product__price"><?=GetMessage('FROM_TEXT')?> <?=\Helpers\TextFormator::priceFormat($item['PROPERTIES']['PRICE']['VALUE']);?> €</span>
            <a href="<?=$item['DETAIL_PAGE_URL']?>" class="product__buy hover"><?=GetMessage('LINK')?></a>
        </div>
    </div>
<?php endforeach;?>