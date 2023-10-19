<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$arSelect = Array("ID", "NAME", "DATE_ACTIVE_FROM","DETAIL_PAGE_URL","PREVIEW_PICTURE","PREVIEW_TEXT");
$arFilter = Array("IBLOCK_ID"=>8, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
$res = CIBlockElement::GetList(Array("ID"=>"DESC"), $arFilter, false, Array("nPageSize"=>2), $arSelect);
while($ob = $res->GetNextElement())
{
    $arFields = $ob->GetFields();
    $arResult['LAST_NEWS'][] = array(
        'NAME'=>$arFields['NAME'],
        'LINK'=>$arFields['DETAIL_PAGE_URL'],
        'IMG'=>CFile::GetPath($arFields['PREVIEW_PICTURE'])
    );
}

$res = CIBlockElement::GetList(Array("RAND"=>"ASC"), $arFilter, false, Array("nPageSize"=>3), $arSelect);
while($ob = $res->GetNextElement())
{
    $arFields = $ob->GetFields();
    $arResult['SIMILAR_NEWS'][] = array(
        'NAME'=>$arFields['NAME'],
        'LINK'=>$arFields['DETAIL_PAGE_URL'],
        'IMG'=>CFile::GetPath($arFields['PREVIEW_PICTURE']),
        'TEXT'=>$arFields['PREVIEW_TEXT']
    );
}
$arSelect = Array("ID", "NAME", "DATE_ACTIVE_FROM","DETAIL_PAGE_URL","PREVIEW_PICTURE","PROPERTY_PRICE","DETAIL_TEXT");
$arFilter = Array("IBLOCK_ID"=>7, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y","=ID"=>$arResult['PROPERTIES']['PRODUCT']['VALUE']);
$res = CIBlockElement::GetList(Array(), $arFilter, false, Array(), $arSelect);
while($ob = $res->GetNextElement())
{
    $arFields = $ob->GetFields();
    $arResult['PRODUCTS'][] = array(
        'NAME'=>$arFields['NAME'],
        'LINK'=>$arFields['DETAIL_PAGE_URL'],
        'TEXT'=>$arFields['DETAIL_TEXT'],
        'IMG'=>CFile::GetPath($arFields['PREVIEW_PICTURE']),
        'PRICE'=>$arFields['PROPERTY_PRICE_VALUE']
    );
}