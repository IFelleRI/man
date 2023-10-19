<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
global $APPLICATION;
$page = $APPLICATION->GetCurPage();
if($page == '/catalog/'){
    $arResult['MAIN_PAGE'] = 'active';
}
foreach ($arResult['SECTIONS'] as $key => $sec){
    if($page == $sec['SECTION_PAGE_URL']){
        $arResult['SECTIONS'][$key]['SELECTED'] = 'active';
    }else{
        $arResult['SECTIONS'][$key]['SELECTED'] = '';
    }
}
