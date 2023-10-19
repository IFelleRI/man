<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 * @var string $templateFolder
 */?>
<section class="section grid">
    <div class="container">
        <div class="merchandise grid">
            <img class="merchandise__image" src="<?=$arResult['PREVIEW_PICTURE']['SRC'];?>" alt="<?=$arResult['NAME'];?>">
            <div class="merchandise__info grid">
                <h2 class="merchandise__name"><?=$arResult['NAME'];?></h2>
                <p class="merchandise__description">
                   <?=$arResult['DETAIL_TEXT'];?>
                </p>
                <?php if(!empty($arResult['DOSAGE_VALUE'])):?>
                    <div class="merchandise__dose grid">
                        <span class="merchandise__dose-legend"><?=GetMessage('SELECT_DOSES')?>:</span>
                        <div class="merchandise__dose-values flex">
                            <?php foreach ($arResult['DOSAGE_VALUE'] as $dos):?>
                                <a href="<?=$dos['LINK']?>" class="merchandise__dose-value <?=(!empty($dos['SELECTED']) ? $dos['SELECTED'] : '')?> hover"><?=$dos['VALUE']?> <?=GetMessage('MG')?></a>
                            <?php endforeach;?>
                        </div>
                    </div>
                <?php endif?>
            </div>
        </div>
        <div class="pills grid">
            <?php foreach ($arResult['TABLE_PRICE'] as $pills):?>
                <div class="pills__block grid">
                    <?php
                    if(!empty($pills['tablet-sale'])):?>
                        <div class="pills__saving"><?=GetMessage('YOUR_SAVE')?> <?=\Helpers\TextFormator::priceFormat($pills['tablet-sale'])?> €</div>
                    <?php endif;?>
                    <div class="pills__name-area flex">
                        <h3 class="pills__name"><?=$pills['tablet-count']?> <?=GetMessage('PILLS')?></h3>
                        <span class="pills__dose"><?=$arResult['PROPERTIES']['DOSAGE']['VALUE']?> <?=GetMessage('MG')?></span>
                    </div>
                    <div class="pills__bottom grid">
                        <div class="pills__price flex">
                            <span class="pills__full-price"><?=\Helpers\TextFormator::priceFormat($pills['tablet-price'])?> €</span>
                            <span class="pills__one-pill-price"><?=$pills['tablet-one']?> € - <?=GetMessage('PER_PILL')?></span>
                        </div>
                        <div class="pills__actions flex"
                             data-price="<?=$pills['tablet-price']?>"
                             data-one="<?=$pills['tablet-one']?>"
                             data-name="<?=$arResult['NAME']?>"
                             data-mg="<?=$arResult['PROPERTIES']['DOSAGE']['VALUE']?>"
                             data-pack="<?=$pills['tablet-count']?>"
                             data-id="<?=$arResult['ID']?>">
                            <button class="pills__action pills__action__basket hover" id="add-basket" easy-add="#order-modal" easy-class="open"><?=GetMessage('ADD_TO_CART')?></button>
                            <button class="pills__action pills__action__basket-link hover" data-link="<?=LANGUAGE_ID?>"><?=GetMessage('BUY_NOW')?></button>
                        </div>
                    </div>
                </div>
            <?
            endforeach;?>
        </div>
    </div>
</section>
<section class="section grid">
    <div class="container">
        <div class="packaging grid">
            <img class="packaging__image" src="<?=SITE_TEMPLATE_PATH?>/img/packaging/1.png">
            <div class="packaging__description">
                <?=GetMessage('PACKAGING')?>
            </div>
        </div>
    </div>
</section>
<?php if(!empty($arResult['SECTION']['DESCRIPTION'])):?>
    <section class="section grid">
        <div class="container">
            <h2 class="section__title"><?=GetMessage('INSTRUCTIONS')?></h2>
            <div class="instructions grid">
                <div class="instructions__instruction grid">
                    <?=$arResult['SECTION']['DESCRIPTION'];?>
                </div>
            </div>
        </div>
    </section>
<?php endif?>
<?php if(!empty($arResult['PREVIEW_TEXT'])):?>
    <section class="section grid">
        <div class="container">
            <h2 class="section__title"><?=GetMessage('INSTRUCTIONS')?></h2>
            <div class="instructions grid">
                <div class="instructions__instruction grid">
                    <?=$arResult['PREVIEW_TEXT'];?>
                </div>
            </div>
        </div>
    </section>
<?php endif?>
<section class="section grid">
    <div class="container">
        <h2 class="section__title"><?=GetMessage('FAQ')?></h2>
        <div class="questions grid">
            <div class="questions__question grid">
                <div class="questions__name">Как часто я могу принимать силденафил?</div>
                <p class="questions__description">
                    Силденафил следует принимать только по назначению врача и не чаще одного раза в день.
                </p>
            </div>
            <div class="questions__question grid">
                <div class="questions__name">Что лучше, силденафил или тадалафил?</div>
                <p class="questions__description">
                    Оба препарата эффективны при лечении эректильной дисфункции, но имеют разную продолжительность действия. Действие силденафила обычно длится до 4 часов, в то время как действие тадалафила может длиться до 36 часов.
                </p>
            </div>
            <div class="questions__question grid">
                <div class="questions__name">Что лучше, сиалис или силденафил?</div>
                <p class="questions__description">
                    Оба препарата эффективны при лечении эректильной дисфункции, но имеют разную продолжительность действия. Действие сиалиса может длиться до 36 часов, в то время как действие силденафила обычно длится до 4 часов.
                </p>
            </div>
            <div class="questions__question grid">
                <div class="questions__name">Как долго длится действие силденафила в дозе 100 мг?</div>
                <p class="questions__description">
                    Действие силденафила в дозе 100 мг может длиться до 4 часов.
                </p>
            </div>
            <div class="questions__question grid">
                <div class="questions__name">Сколько времени нужно, чтобы силденафил в дозе 100 мг начал действовать?</div>
                <p class="questions__description">
                    Силденафил обычно начинает действовать в течение от 30 минут до часа после приема внутрь.
                </p>
            </div>
        </div>
    </div>
</section>
<section class="section grid">
    <div class="container">
        <h2 class="section__title"><?=GetMessage('REVIEW')?> </h2>
        <div class="reviews grid">
            <div class="grid">
                <div class="container">
                    <form action="#" method="post" class="feedback grid">
                        <?php if(empty($arResult['REVIEW'])):?>
                            <h3 class="reviews__not-review-title"><?=GetMessage('NO_REVIEW_PAGE')?></h3>
                        <?php else:?>
                            <h3 class="feedback__title"><?=GetMessage('REVIEW_TITLE')?></h3>
                        <?php endif;?>
                        <div class="feedback__data grid">
                            <textarea class="feedback__review" name="feedback-review" rows="4"  placeholder="*<?=GetMessage('REVIEW_PLACEHOLDER_TEXTAREA')?>" required></textarea>
                            <input class="feedback__name" type="text" name="feedback-name" placeholder="<?=GetMessage('REVIEW_PLACEHOLDER_NAME')?>">
                            <div class="feedback__estimation grid">
                                <span class="feedback__estimation-legend">*<?=GetMessage('REVIEW_PLACEHOLDER_RATING')?>:</span>
                                <div class="feedback__rating-values flex">
                                    <input type="radio" name="feedback-rating" id="feedback-rating-5" required>
                                    <label for="feedback-rating-5" class="feedback__rating-star hover" value="5">
                                        <svg class="hover" viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.81566 0.666443C10.3741 -0.222149 11.6259 -0.222147 12.1843 0.666446L15.0704 5.25841C15.2592 5.55872 15.5469 5.77697 15.8795 5.87214L20.9594 7.32577C21.9386 7.60595 22.3236 8.83601 21.6907 9.6621L18.3917 13.9682C18.1779 14.2473 18.0689 14.5977 18.0849 14.9542L18.3325 20.4579C18.3801 21.5163 17.3692 22.2787 16.4168 21.9026L11.5022 19.9619C11.1787 19.8342 10.8213 19.8342 10.4978 19.9619L5.58316 21.9026C4.63079 22.2787 3.61991 21.5163 3.66752 20.4579L3.91509 14.9542C3.93113 14.5977 3.82208 14.2473 3.60825 13.9682L0.309285 9.6621C-0.323602 8.83601 0.0614058 7.60595 1.04056 7.32577L6.12054 5.87214C6.45312 5.77697 6.74083 5.55872 6.92957 5.25841L9.81566 0.666443Z"/>
                                        </svg>
                                    </label>
                                    <input type="radio" name="feedback-rating" id="feedback-rating-4" required>
                                    <label for="feedback-rating-4" class="feedback__rating-star hover" value="4">
                                        <svg class="hover" viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.81566 0.666443C10.3741 -0.222149 11.6259 -0.222147 12.1843 0.666446L15.0704 5.25841C15.2592 5.55872 15.5469 5.77697 15.8795 5.87214L20.9594 7.32577C21.9386 7.60595 22.3236 8.83601 21.6907 9.6621L18.3917 13.9682C18.1779 14.2473 18.0689 14.5977 18.0849 14.9542L18.3325 20.4579C18.3801 21.5163 17.3692 22.2787 16.4168 21.9026L11.5022 19.9619C11.1787 19.8342 10.8213 19.8342 10.4978 19.9619L5.58316 21.9026C4.63079 22.2787 3.61991 21.5163 3.66752 20.4579L3.91509 14.9542C3.93113 14.5977 3.82208 14.2473 3.60825 13.9682L0.309285 9.6621C-0.323602 8.83601 0.0614058 7.60595 1.04056 7.32577L6.12054 5.87214C6.45312 5.77697 6.74083 5.55872 6.92957 5.25841L9.81566 0.666443Z"/>
                                        </svg>
                                    </label>
                                    <input type="radio" name="feedback-rating" id="feedback-rating-3" required>
                                    <label for="feedback-rating-3" class="feedback__rating-star hover" value="3">
                                        <svg class="hover" viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.81566 0.666443C10.3741 -0.222149 11.6259 -0.222147 12.1843 0.666446L15.0704 5.25841C15.2592 5.55872 15.5469 5.77697 15.8795 5.87214L20.9594 7.32577C21.9386 7.60595 22.3236 8.83601 21.6907 9.6621L18.3917 13.9682C18.1779 14.2473 18.0689 14.5977 18.0849 14.9542L18.3325 20.4579C18.3801 21.5163 17.3692 22.2787 16.4168 21.9026L11.5022 19.9619C11.1787 19.8342 10.8213 19.8342 10.4978 19.9619L5.58316 21.9026C4.63079 22.2787 3.61991 21.5163 3.66752 20.4579L3.91509 14.9542C3.93113 14.5977 3.82208 14.2473 3.60825 13.9682L0.309285 9.6621C-0.323602 8.83601 0.0614058 7.60595 1.04056 7.32577L6.12054 5.87214C6.45312 5.77697 6.74083 5.55872 6.92957 5.25841L9.81566 0.666443Z"/>
                                        </svg>
                                    </label>
                                    <input type="radio" name="feedback-rating" id="feedback-rating-2" required>
                                    <label for="feedback-rating-2" class="feedback__rating-star hover" value="2">
                                        <svg class="hover" viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.81566 0.666443C10.3741 -0.222149 11.6259 -0.222147 12.1843 0.666446L15.0704 5.25841C15.2592 5.55872 15.5469 5.77697 15.8795 5.87214L20.9594 7.32577C21.9386 7.60595 22.3236 8.83601 21.6907 9.6621L18.3917 13.9682C18.1779 14.2473 18.0689 14.5977 18.0849 14.9542L18.3325 20.4579C18.3801 21.5163 17.3692 22.2787 16.4168 21.9026L11.5022 19.9619C11.1787 19.8342 10.8213 19.8342 10.4978 19.9619L5.58316 21.9026C4.63079 22.2787 3.61991 21.5163 3.66752 20.4579L3.91509 14.9542C3.93113 14.5977 3.82208 14.2473 3.60825 13.9682L0.309285 9.6621C-0.323602 8.83601 0.0614058 7.60595 1.04056 7.32577L6.12054 5.87214C6.45312 5.77697 6.74083 5.55872 6.92957 5.25841L9.81566 0.666443Z"/>
                                        </svg>
                                    </label>
                                    <input type="radio" name="feedback-rating" id="feedback-rating-1" required>
                                    <label for="feedback-rating-1" class="feedback__rating-star hover" value="1">
                                        <svg class="hover" viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M9.81566 0.666443C10.3741 -0.222149 11.6259 -0.222147 12.1843 0.666446L15.0704 5.25841C15.2592 5.55872 15.5469 5.77697 15.8795 5.87214L20.9594 7.32577C21.9386 7.60595 22.3236 8.83601 21.6907 9.6621L18.3917 13.9682C18.1779 14.2473 18.0689 14.5977 18.0849 14.9542L18.3325 20.4579C18.3801 21.5163 17.3692 22.2787 16.4168 21.9026L11.5022 19.9619C11.1787 19.8342 10.8213 19.8342 10.4978 19.9619L5.58316 21.9026C4.63079 22.2787 3.61991 21.5163 3.66752 20.4579L3.91509 14.9542C3.93113 14.5977 3.82208 14.2473 3.60825 13.9682L0.309285 9.6621C-0.323602 8.83601 0.0614058 7.60595 1.04056 7.32577L6.12054 5.87214C6.45312 5.77697 6.74083 5.55872 6.92957 5.25841L9.81566 0.666443Z"/>
                                        </svg>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <input class="feedback__send hover" type="submit" id="feedback-send" value="<?=GetMessage('REVIEW_SUBMIT')?>">
                    </form>
                </div>
            </div>
            <?foreach ($arResult['REVIEW'] as $item):?>
                <div class="reviews__block grid shadow">
                    <div class="reviews__top grid">
                        <div class="reviews__info flex">
                            <div class="reviews__title flex">
                                <h3 class="reviews__name"><?=$item['NAME']?></h3>
                                <span class="reviews__rating flex">
                                    <?for($i=0;$i<5;$i++){
                                        if($i < $item['STAR']){
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
                            <span class="reviews__date"><?=$item['DATE']?></span>
                        </div>
                        <span class="reviews__product-name">
                             <?=$item['PRODUCT']?>
                        </span>
                    </div>
                    <p class="reviews__description">
                        <?=$item['TEXT']?>
                    </p>
                </div>
            <?endforeach;?>
            <a href="/reveiw/" class="reviews__action hover"><?=GetMessage('SHOW_ALL')?></a>
        </div>
    </div>
</section>
<div id="order-modal" class="order-modal grid">
    <div class="basket-product__top flex">
        <div class="basket-product__info grid">
            <h2 class="basket-product__name"><?=$arResult['NAME']?></h2>
            <div class="basket-product__pills flex">
                <span class="basket-product__pills-value"><span></span> таблеток</span>
                <span class="basket-product__pills-dose"><?=$arResult['PROPERTIES']['DOSAGE']['VALUE']?> мг</span>
            </div>
        </div>
        <button class="basket-product__close flex hover" easy-remove="#order-modal" easy-class="open">
            <svg class="hover" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.5854 13.633C16.1382 14.1864 16.1382 15.0471 15.5854 15.6004C15.309 15.877 14.9712 16 14.6027 16C14.2342 16 13.8964 15.877 13.62 15.6004L8 9.97502L2.38004 15.6004C2.10365 15.877 1.76584 16 1.39731 16C1.02879 16 0.690979 15.877 0.414587 15.6004C-0.138196 15.0471 -0.138196 14.1864 0.414587 13.633L6.03455 8.00769L0.414587 2.38233C-0.138196 1.82901 -0.138196 0.9683 0.414587 0.414986C0.96737 -0.138329 1.82726 -0.138329 2.38004 0.414986L8 6.04035L13.62 0.414986C14.1727 -0.138329 15.0326 -0.138329 15.5854 0.414986C16.1382 0.9683 16.1382 1.82901 15.5854 2.38233L9.96545 8.00769L15.5854 13.633Z"/>
            </svg>
        </button>
    </div>
    <form action="#" method="post" class="basket-product__bottom grid">
        <div class="basket-product__data grid">
            <div class="basket-product__data-element grid">
                <span class="basket-product__data-legend">Цена:</span>
                <span class="basket-product__price flex">
                    <span class="basket-product__full-price"><span>14 000</span> ₽</span>
                    <span class="basket-product__pill-price"><span></span> ₽ - за одну таблетку</span>
                </span>
            </div>
            <div class="basket-product__data-element grid">
                <span class="basket-product__data-legend">Кол-во упаковок:</span>
                <div class="basket-product__packaging grid">
                    <span class="basket-product__packaging-minus inactive flex hover">
                        <svg viewBox="0 0 18 2" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 1C0 0.447715 0.447715 0 1 0H17C17.5523 0 18 0.447715 18 1C18 1.55228 17.5523 2 17 2H1C0.447716 2 0 1.55228 0 1Z"/>
                        </svg>
                    </span>
                    <input class="basket-product__packaging-input" type="number" name="COUNT" min="1" value="1">
                    <span class="basket-product__packaging-plus flex hover">
                        <svg viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 0C8.28997 0 7.71429 0.575635 7.71429 1.28571V7.71428H1.28571C0.575684 7.71428 0 8.28992 0 9C0 9.71008 0.575684 10.2857 1.28571 10.2857H7.71429V16.7143C7.71429 17.4244 8.28997 18 9 18C9.71003 18 10.2857 17.4244 10.2857 16.7143V10.2857H16.7143C17.4243 10.2857 18 9.71008 18 9C18 8.28992 17.4243 7.71429 16.7143 7.71429H10.2857V1.28571C10.2857 0.575635 9.71003 0 9 0Z"/>
                        </svg>
                    </span>
                </div>
            </div>
        </div>
        <input type="hidden" name="PRODUCT_ID" class="input-product_id">
        <input type="hidden" name="NAME" class="input-product_name" value="<?=$arResult['NAME']?>">
        <input type="hidden" name="PRICE" class="input-product_price">
        <input type="hidden" name="DOSAGE" value="<?=$arResult['PROPERTIES']['DOSAGE']['VALUE']?>">
        <input type="hidden" name="PRICE_PILLS" class="input-product_pills">
        <input type="hidden" name="PACK_PILLS" class="input-product_pills__pack">
        <input type="hidden" name="callback" value="thank-modal">
        <input type="hidden" name="action" value="Basket/addBasket">
        <input type="hidden" name="ajaxCallback" value="AfterAddBasket">
        <input type="submit" class="basket-product__action hover" value="Добавить в корзину">
    </form>
</div>
<div class="thank-modal grid">
    <div class="thank-modal__top flex">
        <h2 class="thank-modal__title">Товар в корзине</h2>
        <button class="thank-modal__close flex hover">
            <svg class="hover" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.5854 13.633C16.1382 14.1864 16.1382 15.0471 15.5854 15.6004C15.309 15.877 14.9712 16 14.6027 16C14.2342 16 13.8964 15.877 13.62 15.6004L8 9.97502L2.38004 15.6004C2.10365 15.877 1.76584 16 1.39731 16C1.02879 16 0.690979 15.877 0.414587 15.6004C-0.138196 15.0471 -0.138196 14.1864 0.414587 13.633L6.03455 8.00769L0.414587 2.38233C-0.138196 1.82901 -0.138196 0.9683 0.414587 0.414986C0.96737 -0.138329 1.82726 -0.138329 2.38004 0.414986L8 6.04035L13.62 0.414986C14.1727 -0.138329 15.0326 -0.138329 15.5854 0.414986C16.1382 0.9683 16.1382 1.82901 15.5854 2.38233L9.96545 8.00769L15.5854 13.633Z"/>
            </svg>
        </button>
    </div>
    <a href="/basket/" class="thank-modal__action hover">Перейти в корзину</a>
</div>
<div class="modal-bg" easy-remove="#order-modal" easy-class="open"></div>