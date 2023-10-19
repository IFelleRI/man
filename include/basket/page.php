<?php
$session = \Bitrix\Main\Application::getInstance()->getSession();
$basketItems = \Helpers\Basket::sortItems($session->get('basketItems'));
?>
<section class="section grid">
    <div class="container">
        <h2 class="section__title">Корзина</h2>
        <?if(!empty($basketItems)):?>
        <form action="#" method="post" class="basket grid">
            <div class="basket__result flex">
                <span class="basket__result-element basket__result-element__count"><?=GetMessage('COUNT_PRODUCT')?>: <span><?=\Helpers\Basket::getCount($basketItems)?></span></span>
                <span class="basket__result-element basket__result-element__sum"><?=GetMessage('SUMM_PRODUCT')?>: <span><?=\Helpers\Basket::getSum($basketItems)?></span> €</span>
                <a href="/<?=(LANGUAGE_ID !== 'en') ? LANGUAGE_ID : ''?>/basket/buy/" class="basket__result-action hover"><?=GetMessage('LINK_BASKET')?></a>
            </div>
            <input type="submit" class="basket__clear hover" name="clear-basket" value="<?=GetMessage('REMOVE_CART')?>">
            <div class="basket__products grid">
                <?foreach ($basketItems as $item):?>
                    <div class="basket__product grid shadow" data-id="<?=$item['PRODUCT_ID']?>-<?=$item['PACK_PILLS']?>">
                        <div class="basket-product__top flex">
                            <div class="basket-product__info grid">
                                <h2 class="basket-product__name"><?=$item['NAME']?></h2>
                                <div class="basket-product__pills flex">
                                    <span class="basket-product__pills-value"><?=$item['PACK_PILLS']?> <?=GetMessage('PILLS')?></span>
                                    <span class="basket-product__pills-dose"><?=$item['DOSAGE']?> mg</span>
                                </div>
                            </div>
                            <label for="delete-product" data-id="<?=$item['PRODUCT_ID']?>-<?=$item['PACK_PILLS']?>" class="basket-product__close flex hover">
                                <input type="submit" id="delete-product" name="delete-product">
                                <svg class="hover" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.5854 13.633C16.1382 14.1864 16.1382 15.0471 15.5854 15.6004C15.309 15.877 14.9712 16 14.6027 16C14.2342 16 13.8964 15.877 13.62 15.6004L8 9.97502L2.38004 15.6004C2.10365 15.877 1.76584 16 1.39731 16C1.02879 16 0.690979 15.877 0.414587 15.6004C-0.138196 15.0471 -0.138196 14.1864 0.414587 13.633L6.03455 8.00769L0.414587 2.38233C-0.138196 1.82901 -0.138196 0.9683 0.414587 0.414986C0.96737 -0.138329 1.82726 -0.138329 2.38004 0.414986L8 6.04035L13.62 0.414986C14.1727 -0.138329 15.0326 -0.138329 15.5854 0.414986C16.1382 0.9683 16.1382 1.82901 15.5854 2.38233L9.96545 8.00769L15.5854 13.633Z"/>
                                </svg>
                            </label>
                        </div>
                        <div class="basket-product__bottom grid">
                            <div class="basket-product__data grid">
                                <div class="basket-product__data-element grid">
                                    <span class="basket-product__data-legend"><?=GetMessage('PRICE')?>:</span>
                                    <span class="basket-product__price flex">
                                            <span class="basket-product__full-price" data-price="<?=str_replace(' ','',$item['PRICE']);?>">
                                                <span><?=\Helpers\TextFormator::priceFormat(str_replace(' ','',$item['PRICE'])*$item['COUNT'])?></span>
                                                €
                                            </span>
                                            <span class="basket-product__pill-price"><?=$item['PRICE_PILLS']?> € - <?=GetMessage('FOR_ONE_PILL')?></span>
                                        </span>
                                </div>
                                <div class="basket-product__data-element grid">
                                    <span class="basket-product__data-legend"><?=GetMessage('COUNT_STACK')?>:</span>
                                    <div class="basket-product__packaging grid" data-id="<?=$item['PRODUCT_ID']?>-<?=$item['PACK_PILLS']?>">
                                            <span class="basket-product__packaging-minus inactive flex hover">
                                                <svg viewBox="0 0 18 2" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0 1C0 0.447715 0.447715 0 1 0H17C17.5523 0 18 0.447715 18 1C18 1.55228 17.5523 2 17 2H1C0.447716 2 0 1.55228 0 1Z"/>
                                                </svg>
                                            </span>
                                        <input class="basket-product__packaging-input" type="number" name="count-packaging" min="1" value="<?=$item['COUNT']?>">
                                        <span class="basket-product__packaging-plus flex hover">
                                                <svg viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9 0C8.28997 0 7.71429 0.575635 7.71429 1.28571V7.71428H1.28571C0.575684 7.71428 0 8.28992 0 9C0 9.71008 0.575684 10.2857 1.28571 10.2857H7.71429V16.7143C7.71429 17.4244 8.28997 18 9 18C9.71003 18 10.2857 17.4244 10.2857 16.7143V10.2857H16.7143C17.4243 10.2857 18 9.71008 18 9C18 8.28992 17.4243 7.71429 16.7143 7.71429H10.2857V1.28571C10.2857 0.575635 9.71003 0 9 0Z"/>
                                                </svg>
                                            </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?endforeach;?>
            </div>
        </form>
        <?else:?>
            <?=GetMessage('EMPTY_CART')?>
        <?endif;?>
    </div>
</section>