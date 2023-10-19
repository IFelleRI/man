<?php

namespace Helpers;

class IBlock
{
    public static function getNameById($iblockId,$itemId){
        $arSelect = Array("ID", "NAME");
        $arFilter = Array("IBLOCK_ID"=>$iblockId, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y","ID"=>$itemId);
        $res = \CIBlockElement::GetList(Array(), $arFilter, false, Array(), $arSelect);
        while($review = $res->GetNextElement())
        {
            $arFields = $review->GetFields();
            return $arFields['NAME'];
        }
    }
}