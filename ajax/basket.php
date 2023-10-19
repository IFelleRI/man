<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
$session = \Bitrix\Main\Application::getInstance()->getSession();
if(!$session->get('basketItems')){
    $session->set('basketItems',[]);
}else{
    $res = $session->get('basketItems');
}
$key = $_POST['PRODUCT_ID'].'-'.$_POST['PACK_PILLS'];
$res[$key] = $_POST;
if(key_exists($key,$session->get('basketItems'))){
    $session->get('basketItems')[$key]['COUNT'] = $session->get('basketItems')[$key]['COUNT'] + $_POST['COUNT'];
}else{
    $session->set('basketItems',$res);
}
