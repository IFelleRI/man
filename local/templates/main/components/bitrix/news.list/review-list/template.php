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

foreach ($arResult['ITEMS'] as $item):?>
    <div class="reviews__block grid shadow">
        <div class="reviews__top grid">
            <div class="reviews__info flex">
                <div class="reviews__title flex">
                    <h3 class="reviews__name"><?=$item['NAME']?></h3>
                    <span class="reviews__rating flex">
                                    <?php for($i=0;$i<5;$i++){
                                        if($i < $item['PROPERTIES']['STAR_REVIEW']['VALUE']){
                                            echo '<svg class="reviews-rating-star active" viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.81566 0.666443C10.3741 -0.222149 11.6259 -0.222147 12.1843 0.666446L15.0704 5.25841C15.2592 5.55872 15.5469 5.77697 15.8795 5.87214L20.9594 7.32577C21.9386 7.60595 22.3236 8.83601 21.6907 9.6621L18.3917 13.9682C18.1779 14.2473 18.0689 14.5977 18.0849 14.9542L18.3325 20.4579C18.3801 21.5163 17.3692 22.2787 16.4168 21.9026L11.5022 19.9619C11.1787 19.8342 10.8213 19.8342 10.4978 19.9619L5.58316 21.9026C4.63079 22.2787 3.61991 21.5163 3.66752 20.4579L3.91509 14.9542C3.93113 14.5977 3.82208 14.2473 3.60825 13.9682L0.309285 9.6621C-0.323602 8.83601 0.0614058 7.60595 1.04056 7.32577L6.12054 5.87214C6.45312 5.77697 6.74083 5.55872 6.92957 5.25841L9.81566 0.666443Z"/>
                                                </svg>';
                                        }else{
                                            echo '<svg class="reviews-rating-star" viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.81566 0.666443C10.3741 -0.222149 11.6259 -0.222147 12.1843 0.666446L15.0704 5.25841C15.2592 5.55872 15.5469 5.77697 15.8795 5.87214L20.9594 7.32577C21.9386 7.60595 22.3236 8.83601 21.6907 9.6621L18.3917 13.9682C18.1779 14.2473 18.0689 14.5977 18.0849 14.9542L18.3325 20.4579C18.3801 21.5163 17.3692 22.2787 16.4168 21.9026L11.5022 19.9619C11.1787 19.8342 10.8213 19.8342 10.4978 19.9619L5.58316 21.9026C4.63079 22.2787 3.61991 21.5163 3.66752 20.4579L3.91509 14.9542C3.93113 14.5977 3.82208 14.2473 3.60825 13.9682L0.309285 9.6621C-0.323602 8.83601 0.0614058 7.60595 1.04056 7.32577L6.12054 5.87214C6.45312 5.77697 6.74083 5.55872 6.92957 5.25841L9.81566 0.666443Z"/>
                                    </svg>';
                                        }
                                    }?>
                                </span>
                </div>
                <span class="reviews__date"><?=$item['PROPERTIES']['DATE_REVIEW']['VALUE']?></span>
            </div>
            <span class="reviews__product-name">
                 <?=\Helpers\IBlock::getNameById(7,$item['PROPERTIES']['PRODUCT_REVIEW']['VALUE'][0])?>
            </span>
        </div>
        <p class="reviews__description">
            <?=$item['PREVIEW_TEXT']?>
        </p>
    </div>
<?php endforeach;?>
