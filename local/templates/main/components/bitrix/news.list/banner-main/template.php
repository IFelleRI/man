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
<div class="banner">
    <div class="banner__content grid">
        <div class="banner__prev hover">
            <svg class="hover" viewBox="0 0 11 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.98736 0.516623L0.520889 8.67447C0.355837 8.85125 0.224832 9.06157 0.13543 9.2933C0.0460288 9.52502 2.994e-09 9.77357 0 10.0246C-2.99308e-09 10.2756 0.0460288 10.5242 0.13543 10.7559C0.224832 10.9876 0.355837 11.198 0.520889 11.3747L7.98736 19.4375C8.15106 19.6157 8.34583 19.7572 8.56042 19.8538C8.77501 19.9503 9.00518 20 9.23764 20C9.47011 20 9.70028 19.9503 9.91487 19.8538C10.1295 19.7572 10.3242 19.6157 10.4879 19.4375C10.8159 19.0812 11 18.5993 11 18.0969C11 17.5945 10.8159 17.1125 10.4879 16.7563L4.25413 10.0246L10.4879 3.29295C10.8133 2.93876 10.9967 2.4607 10.9986 1.96184C10.9999 1.71157 10.9555 1.46349 10.8679 1.2318C10.7803 1.00011 10.6511 0.789386 10.4879 0.611701C10.3301 0.427104 10.14 0.278106 9.92854 0.173316C9.71709 0.0685243 9.48851 0.0100183 9.256 0.00117773C9.02349 -0.00766283 8.79167 0.0333375 8.57392 0.121808C8.35617 0.21028 8.15681 0.344468 7.98736 0.516623Z"/>
            </svg>
        </div>
        <div class="banner__swiper swiper grid">
            <div class="swiper-wrapper">
                <?php foreach ($arResult['ITEMS'] as $item):?>
                    <div class="banner__slide swiper-slide">
                        <div class="banner__info grid">
                            <h1 class="banner__title"><?=$item['NAME']?></h1>
                            <p class="banner__description">
                                <?=$item['PROPERTIES']['BANNER_DESC']['~VALUE']['TEXT']?>
                            </p>
                            <a href="<?=$item['PROPERTIES']['BANNER_LINK']['VALUE']?>" class="banner__action hover"><?=GetMessage('BANNER_LINK_TEXT')?></a>
                        </div>
                        <img class="banner__image" src="<?=CFile::GetPath($item['PROPERTIES']['IMG_PC']['VALUE']);?>">
                    </div>
                <?php endforeach;?>
            </div>
            <div class="swiper-pagination flex"></div>
        </div>
        <div class="banner__next hover">
            <svg class="hover" viewBox="0 0 11 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M3.01264 19.4834L10.4791 11.3255C10.6442 11.1487 10.7752 10.9384 10.8646 10.7067C10.954 10.475 11 10.2264 11 9.97539C11 9.72436 10.954 9.47581 10.8646 9.24408C10.7752 9.01236 10.6442 8.80204 10.4791 8.62526L3.01264 0.562489C2.84893 0.384255 2.65417 0.242787 2.43958 0.146246C2.22499 0.049704 1.99482 1.01615e-08 1.76236 0C1.52989 -1.01615e-08 1.29972 0.0497039 1.08513 0.146245C0.870543 0.242787 0.675778 0.384255 0.512075 0.562489C0.184094 0.918777 2.19595e-08 1.40074 0 1.90311C-2.19595e-08 2.40549 0.184093 2.88745 0.512074 3.24374L6.74587 9.97539L0.512074 16.707C0.186746 17.0612 0.00334004 17.5393 0.00139452 18.0382C5.45969e-05 18.2884 0.0444748 18.5365 0.132108 18.7682C0.219741 18.9999 0.348865 19.2106 0.512074 19.3883C0.669887 19.5729 0.86001 19.7219 1.07146 19.8267C1.28291 19.9315 1.51149 19.99 1.744 19.9988C1.97651 20.0077 2.20833 19.9667 2.42608 19.8782C2.64383 19.7897 2.84319 19.6555 3.01264 19.4834Z"/>
            </svg>
        </div>
    </div>
</div>
