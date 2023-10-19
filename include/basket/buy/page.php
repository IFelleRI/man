<?php
$session = \Bitrix\Main\Application::getInstance()->getSession();
$basketItems = \Helpers\Basket::sortItems($session->get('basketItems'));
?>
<section class="section grid">
    <div class="container">
        <h2 class="section__title">Оформление заказа</h2>
        <form action="#" method="post" class="buy grid">
            <div class="buy__info grid">
                <div class="buy__recipient grid shadow">
                    <div class="buy__recipient-block grid">
                        <h3 class="buy__title"><?=GetMessage('INFO_PAYER')?></h3>
                        <div class="buy__recipient-data grid">
                            <input type="text" name="name" class="buy__recipient-input" placeholder="<?=GetMessage('NAME')?>" required>
                            <input type="text" name="surname" class="buy__recipient-input" placeholder="<?=GetMessage('LAST_NAME')?>" required>
                            <input type="email" name="email" class="buy__recipient-input" placeholder="<?=GetMessage('EMAIL')?>" required>
                            <input type="tel" name="telephone" class="buy__recipient-input" placeholder="<?=GetMessage('PHONE')?>" required>
                        </div>
                    </div>
                    <div class="buy__recipient-block grid">
                        <h3 class="buy__title"><?=GetMessage('ADDRESS')?></h3>
                        <div class="buy__recipient-data grid">
                            <input type="text" name="country" class="buy__recipient-input" placeholder="<?=GetMessage('COUNTRY')?>" required>
                            <input type="text" name="city" class="buy__recipient-input" placeholder="<?=GetMessage('CITY')?>" required>
                            <input type="text" name="settlement" class="buy__recipient-input" placeholder="<?=GetMessage('TOWN')?>">
                            <input type="text" name="street" class="buy__recipient-input" placeholder="<?=GetMessage('STREET')?>" required>
                            <input type="text" name="house" class="buy__recipient-input" placeholder="<?=GetMessage('HOUSE')?>" required>
                            <input type="text" name="flat" class="buy__recipient-input" placeholder="<?=GetMessage('APARTMENT')?>">
                            <input type="number" name="postcode" class="buy__recipient-input" placeholder="<?=GetMessage('INDEX')?>" required>
                        </div>
                    </div>
                </div>
                <div class="buy__products grid">
                    <?php foreach ($basketItems as $item):?>
                        <div class="buy__product flex shadow">
                            <div class="buy__product-info grid">
                                <div class="buy__product-name-area flex">
                                    <h3 class="buy__product-name"><?=$item['NAME']?></h3>
                                    <span class="buy__product-count"><?=$item['COUNT']?> <?=GetMessage('SHT')?></span>
                                </div>
                                <div class="buy__product-pills-area flex">
                                    <span class="buy__product-pills"><?=$item['PACK_PILLS']?> <?=GetMessage('PILL')?>таблеток</span>
                                    <span class="buy__product-dose"><?=$item['DOSAGE']?> <?=GetMessage('MG')?></span>
                                </div>
                            </div>
                            <div class="buy__product-price grid">
                                <span class="buy__product-full-price"><?=\Helpers\TextFormator::priceFormat($item['PRICE'])?> €</span>
                                <span class="buy__product-pill-price"><?=$item['PRICE_PILLS']?> € - <?=GetMessage('FOR_ONE_PILL')?></span>
                            </div>
                        </div>
                    <?php endforeach;?>
                </div>
            </div>
            <div class="buy__payment grid shadow">
                <span class="buy__final-price"><?=GetMessage('ALL_PRICE')?>: <?=\Helpers\Basket::getSum() ?> €</span>
                <h3 class="buy__title"><?=GetMessage('PRICE_METHOD')?></h3>
                <div class="buy__payment-systems grid">
                    <input type="radio" id="sbp" name="payment">
                    <label for="sbp" class="buy__payment-system flex hover">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/payment-systems/sbp.svg" alt="SBP">
                    </label>
                    <input type="radio" id="apple-pay" name="payment">
                    <label for="apple-pay" class="buy__payment-system flex hover">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/payment-systems/apple-pay.svg" alt="Apple pay">
                    </label>
                    <input type="radio" id="google-pay" name="payment">
                    <label for="google-pay" class="buy__payment-system flex hover">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/payment-systems/google-pay.svg" alt="Google pay">
                    </label>
                    <input type="radio" id="card" name="payment">
                    <label for="card" class="buy__payment-system flex hover">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/payment-systems/card.svg" alt="Card">
                    </label>
                </div>
                <input type="submit" class="buy__action hover" name="buy" value="<?=GetMessage('GO_PAY')?>">
            </div>
        </form>
    </div>
</section>