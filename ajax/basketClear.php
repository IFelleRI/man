<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
$session = \Bitrix\Main\Application::getInstance()->getSession();
$session->set('basketItems',[]);