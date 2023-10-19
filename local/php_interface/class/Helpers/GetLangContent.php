<?php
namespace Helpers;
use \Bitrix\Highloadblock as HL;
use Bitrix\Main\Loader;

Loader::includeModule("highloadblock");
class GetLangContent{
    static public function getContent($id){
        $arLang = [
          'en'=>[1],
          'it'=>[2],
          'fr'=>[3],
          'de'=>[4]
        ];
        $arHLBlock = \Bitrix\Highloadblock\HighloadBlockTable::getById($id)->fetch();
        $obEntity = \Bitrix\Highloadblock\HighloadBlockTable::compileEntity($arHLBlock);
        $strEntityDataClass = $obEntity->getDataClass();
        $resData = $strEntityDataClass::getList(array(
            'select' => array('ID', 'UF_*'),
            'filter' => array('=UF_LANG' => $arLang[LANGUAGE_ID]),
            'order'  => array('ID' => 'ASC'),
            'limit'  => 100,
        ));
        return $resData->Fetch();
    }
    static public function getSeoLang($id){
        $arLang = [
            'en'=>[5],
            'it'=>[6],
            'fr'=>[7],
            'de'=>[8]
        ];
        $arHLBlock = \Bitrix\Highloadblock\HighloadBlockTable::getById($id)->fetch();
        $obEntity = \Bitrix\Highloadblock\HighloadBlockTable::compileEntity($arHLBlock);
        $strEntityDataClass = $obEntity->getDataClass();
        $resData = $strEntityDataClass::getList(array(
            'select' => array('ID', 'UF_*'),
            'filter' => array('=UF_LANG' => $arLang[LANGUAGE_ID]),
            'order'  => array('ID' => 'ASC'),
            'limit'  => 100,
        ));
        return $resData->Fetch();
    }
}