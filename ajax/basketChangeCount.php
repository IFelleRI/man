<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
$session = \Bitrix\Main\Application::getInstance()->getSession();
if(!$session->get('basketItems')){
    die();
}
if(key_exists($_POST['PRODUCT_ID'],$session->get('basketItems'))){
    $session->get('basketItems')[$_POST['PRODUCT_ID']]['COUNT'] = $_POST['COUNT'];
}