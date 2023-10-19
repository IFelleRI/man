<?php
use Bitrix\Main;
$eventManager = Main\EventManager::getInstance();
$eventManager->addEventHandler('iblock', 'OnIBlockPropertyBuildList', ['lib\usertype\CUserTypePrice', 'GetUserTypeDescription']);
