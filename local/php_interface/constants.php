<?php
if(LANGUAGE_ID == 'de'){
    $PRODUCT_IBLOCK_ID = 10;
    $BANNER_IBLOCK_ID = 14;
}elseif(LANGUAGE_ID == 'fr'){
    $PRODUCT_IBLOCK_ID = 9;
    $BANNER_IBLOCK_ID = 13;
}elseif(LANGUAGE_ID == 'it'){
    $PRODUCT_IBLOCK_ID = 7;
    $BANNER_IBLOCK_ID = 12;
}else{
    $PRODUCT_IBLOCK_ID = 11;
    $BANNER_IBLOCK_ID = 5;
}

const VIEW_PANEL = true;