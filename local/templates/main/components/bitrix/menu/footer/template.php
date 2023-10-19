<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<nav class="footer__navigation-links grid">
	<?php foreach($arResult as $arItem):
		if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
			continue;
	?>
		<?php if($arItem["SELECTED"]):?>
			<span class="footer__navigation-link hover"><?=$arItem["TEXT"]?></span>
		<?php else:?>
			<a href="<?=$arItem["LINK"]?>" class="footer__navigation-link hover"><?=$arItem["TEXT"]?></a>
		<?php endif?>

	<?php endforeach?>
</nav>

