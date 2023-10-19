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

<div class="blog__content grid">
	<div class="blog__info grid shadow">
		<h2 class="blog__title"><?=$arResult['NAME']?></h2>
		<div class="blog__info-block grid">
			<?=$arResult['DETAIL_TEXT']?>
		</div>
	</div>
	<?if(!empty($arResult['PRODUCTS'])):?>
		<div class="blog__similar-products grid">
			<h2 class="blog__similar-products-title">Сопутствующие товары</h2>
			<div class="blog__similar-products-blocks grid">
				<?foreach ($arResult['PRODUCTS'] as $product):?>
					<div class="product grid">
						<div class="product__top grid">
							<img class="product__image" src="<?=$product['IMG']?>"/>
							<div class="product__info grid">
								<h3 class="product__name">
									<?=$product['NAME']?>
								</h3>
								<p class="product__description">
									<?=TruncateText($product['TEXT'], 120);?>
								</p>
							</div>
						</div>
						<div class="product__buy-area grid">
							<span class="product__price">От <?=$product['PRICE']?> ₽</span>
							<a href="<?=$product['LINK']?>" class="product__buy hover">Перейти</a>
						</div>
					</div>
				<?endforeach;?>
			</div>
		</div>
	<?endif;?>
	<div class="blog__similar-blogs grid">
		<h2 class="blog__similar-blogs-title">Похожие публикации</h2>
		<div class="blog__similar-blogs-blocks grid">
			<?foreach ($arResult['SIMILAR_NEWS'] as $news):?>
				<div class="blog-block grid shadow">
					<div class="blog-top grid">
						<div class="blog-image" style="background-image: url(<?=$news['IMG']?>);"></div>
						<div class="blog-info grid">
                                    <span class="blog-name">
                                        <?=$news['NAME']?>
                                    </span>
							<p class="blog-description">
								<?=$news['TEXT']?>
							</p>
						</div>
					</div>
					<a href="<?=$news['LINK']?>" class="blog-more hover">Подробнее</a>
				</div>
			<?endforeach;?>
		</div>
	</div>
</div>
<div class="blog__last-blogs grid">
	<h3 class="blog__last-blogs-title">Последние публикации</h3>
	<div class="blog__last-blogs-blocks grid">
		<?foreach ($arResult['LAST_NEWS'] as $item):?>
			<a href="<?=$item['LINK']?>" class="blog__last-blogs-block grid shadow">
				<img class="blog__last-blogs-image" src="<?=$item['IMG']?>" alt="">
				<div class="blog__last-blogs-name">
					<?=$item['NAME']?>
				</div>
			</a>
		<?endforeach;?>
	</div>
</div>

