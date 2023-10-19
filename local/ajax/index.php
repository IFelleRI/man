<?php
/**
 * Единый входной файл для аякс запросов.
 * Уже подключено ядро битрикса, подключены инфоблоки
 */
define( "NO_KEEP_STATISTIC", true ); //Не учитываем статистику
define( "NOT_CHECK_PERMISSIONS", true ); //Не учитываем права доступа

if (isset($_REQUEST['lang'])) {
	if (in_array($_REQUEST['lang'], array('ru', 'en'))) {
		define('LANGUAGE_ID', $_REQUEST['lang']);
	}
}
require($_SERVER[ "DOCUMENT_ROOT" ] . "/bitrix/modules/main/include/prolog_before.php");
define( "PUBLIC_AJAX_MODE", true );

include_once $_SERVER[ 'DOCUMENT_ROOT' ] . "/local/ajax/CAjaxRequest.php";


$ajaxRequest = new CAjaxRequest();
$ajaxRequest->execute();

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");
die();