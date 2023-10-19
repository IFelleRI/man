<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
</main>
<footer class="footer">
    <div class="container flex">
        <img src="<?=SITE_TEMPLATE_PATH?>/img/logo.png" class="footer__logo">
        <div class="footer__navigation grid">
            <div class="footer__navigation-block grid">
                <div class="footer__navigation-legend"><?=GetMessage('MAIN_MENU')?></div>
                <?php $APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "footer",
                    Array(
                        "ALLOW_MULTI_SELECT" => "N",
                        "CHILD_MENU_TYPE" => "top_".LANGUAGE_ID,
                        "DELAY" => "N",
                        "MAX_LEVEL" => "1",
                        "MENU_CACHE_GET_VARS" => array(""),
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_TYPE" => "N",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "ROOT_MENU_TYPE" => "top_".LANGUAGE_ID,
                        "USE_EXT" => "N"
                    )
                );?>
            </div>
            <div class="footer__navigation-block grid">
                <div class="footer__navigation-legend"><?=GetMessage('FOR_USER')?></div>
                <?php $APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "footer",
                    Array(
                        "ALLOW_MULTI_SELECT" => "N",
                        "CHILD_MENU_TYPE" => "bot".LANGUAGE_ID,
                        "DELAY" => "N",
                        "MAX_LEVEL" => "1",
                        "MENU_CACHE_GET_VARS" => array(""),
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_TYPE" => "N",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "ROOT_MENU_TYPE" => "bot_".LANGUAGE_ID,
                        "USE_EXT" => "N"
                    )
                );?>
            </div>
            <div class="footer__navigation-block grid">
                <div class="footer__navigation-legend"><?=GetMessage('CONTACT_MENU')?></div>
                <nav class="footer__navigation-links grid">
                    <a href="tel:79999999999" class="footer__navigation-link hover">+7(999)999-99-99</a>
                    <a href="mailto:info@manpharma.ru" class="footer__navigation-link hover">info@manpharma.ru</a>
                    <span class="footer__navigation-text">г. Москва, ул. Большая Дмитровка, д. 11</span>
                </nav>
            </div>
        </div>
    </div>
</footer>
</div>
</body>
</html>
<?php
if($APPLICATION->GetCurPage() == '/'){
    $curPath = ((LANGUAGE_ID == 'en') ? '' : '/'.LANGUAGE_ID.'/').\Helpers\GetLangContent::getSeoLang(2)['UF_LINK'];
}else{
    $curPath = ((LANGUAGE_ID == 'en') ? '' : '/'.LANGUAGE_ID.'/').\Helpers\GetLangContent::getSeoLang(2)['UF_LINK'].'/';
}
if($APPLICATION->GetCurDir() == $curPath){
    if(!empty(\Helpers\GetLangContent::getSeoLang(2)['UF_TITLE'])){
        $APPLICATION->SetPageProperty('title', \Helpers\GetLangContent::getSeoLang(2)['UF_TITLE']);
    }
    if(!empty(\Helpers\GetLangContent::getSeoLang(2)['UF_H1'])){
        $APPLICATION->SetTitle(\Helpers\GetLangContent::getSeoLang(2)['UF_H1']);
    }
    if(!empty(\Helpers\GetLangContent::getSeoLang(2)['UF_DESCRIPTION'])){
        $APPLICATION->SetPageProperty("description", \Helpers\GetLangContent::getSeoLang(2)['UF_DESCRIPTION']);
    }
}