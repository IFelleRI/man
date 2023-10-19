<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
foreach ($arResult['PROPERTIES']['TABLE_PRICE']['VALUE'] as $item){
    $arResult['TABLE_PRICE'][] = unserialize(htmlspecialcharsback($item), [stdClass::class]);
}

if(!empty($arResult['PROPERTIES']['ITEM_SIZE']['VALUE'])){
    $arSelect = Array("ID", "NAME", "DATE_ACTIVE_FROM","PROPERTY_DOSAGE",'DETAIL_PAGE_URL');
    $arFilter = Array("IBLOCK_ID"=>7, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y","=ID"=>$arResult['PROPERTIES']['ITEM_SIZE']['VALUE']);
    $res = CIBlockElement::GetList(Array(), $arFilter, false, Array(), $arSelect);
    while($ob = $res->GetNextElement())
    {
        $arFields = $ob->GetFields();
        $langId = '/'.LANGUAGE_ID;
        if($langId == 'en') $langId = '';
        $arResult['DOSAGE_VALUE'][] = array( 'LINK'=>$langId.$arFields['DETAIL_PAGE_URL'],'VALUE'=>$arFields['PROPERTY_DOSAGE_VALUE'],'SELECTED'=>($arResult['ID'] == $arFields['ID'] ? 'active' : '') );
    }
}


$arSelect = Array("ID", "NAME", "DATE_ACTIVE_FROM","PROPERTY_STAR_REVIEW",'PROPERTY_DATE_REVIEW','PREVIEW_TEXT','PROPERTY_PRODUCT_REVIEW');
$arFilter = Array("IBLOCK_ID"=>6, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y","PROPERTY_PRODUCT_REVIEW"=>$arResult['ID']);
$reviews = CIBlockElement::GetList(Array(), $arFilter, false, Array(), $arSelect);
while($review = $reviews->GetNextElement())
{
    $arFields = $review->GetFields();
    $arResult['REVIEW'][] = array(
        'NAME'=>$arFields['NAME'],
        'STAR'=>$arFields['PROPERTY_STAR_REVIEW_VALUE'],
        'DATE'=>$arFields['PROPERTY_DATE_REVIEW_VALUE'],
        'TEXT'=>$arFields['PREVIEW_TEXT'],
        'PRODUCT'=>$arResult['NAME']
    );
}