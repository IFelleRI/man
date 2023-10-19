<?php $APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "banner-main",
    Array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_SECTIONS_CHAIN" => "Y",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "Y",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => array("", ""),
        "FILTER_NAME" => "",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => $BANNER_IBLOCK_ID,
        "IBLOCK_TYPE" => "banners",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
        "INCLUDE_SUBSECTIONS" => "Y",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Новости",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "PROPERTY_CODE" => array("", "IMG_PC", "IMG_TABLET", "IMG_PHONE", "BANNER_LINK", "BANNER_DESC"),
        "SET_BROWSER_TITLE" => "Y",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "Y",
        "SET_META_KEYWORDS" => "Y",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "Y",
        "SHOW_404" => "N",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "DESC",
        "SORT_ORDER2" => "ASC",
        "STRICT_SECTION_CHECK" => "N"
    )
);?>
<?php
$GLOBALS['arrFilterHit'] = array('PROPERTY_HIT_VALUE'=>'Да');
$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "bestseller-main",
    Array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_SECTIONS_CHAIN" => "Y",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => (LANGUAGE_ID !== 'en' ? '/'.LANGUAGE_ID : '')."/catalog/#SECTION_CODE#/#ELEMENT_CODE#/",
        "DISPLAY_BOTTOM_PAGER" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "FIELD_CODE" => array("", ""),
        "FILTER_NAME" => "arrFilterHit",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => $PRODUCT_IBLOCK_ID,
        "IBLOCK_TYPE" => "catalog",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
        "INCLUDE_SUBSECTIONS" => "Y",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "4",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Новости",
        "PARENT_SECTION" => "",
        "PARENT_SECTION_CODE" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "PROPERTY_CODE" => array("PRICE", "", ""),
        "SET_BROWSER_TITLE" => "Y",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "Y",
        "SET_META_KEYWORDS" => "Y",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "Y",
        "SHOW_404" => "N",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_BY2" => "SORT",
        "SORT_ORDER1" => "DESC",
        "SORT_ORDER2" => "ASC",
        "STRICT_SECTION_CHECK" => "N"
    )
);?>
<section class="section grid">
    <div class="container">
        <h2 class="section__title"><?=GetMessage('ADVANTAGES')?></h2>
        <div class="advantages grid">
            <div class="advantages__block grid shadow">
                        <span class="advantages__icon flex">
                            <svg viewBox="0 0 44 40" xmlns="http://www.w3.org/2000/svg">
                                <path d="M29.6085 15.4052C30.4858 16.2963 30.4858 17.7412 29.6085 18.6323L21.6811 26.6852L21.6665 26.7001C21.2262 27.1474 20.6485 27.3702 20.0713 27.3684C19.4987 27.3667 18.9265 27.1439 18.4895 26.7001L18.4751 26.6853L13.7245 21.8594C12.8472 20.9683 12.8472 19.5234 13.7245 18.6323C14.6017 17.7412 16.0241 17.7412 16.9013 18.6323L20.078 21.8593L26.4317 15.4052C27.3089 14.514 28.7313 14.514 29.6085 15.4052Z"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M27.3763 2.84155C24.5884 -0.947185 18.7446 -0.947185 15.9567 2.84155L12.3147 7.79105C12.0188 8.19312 11.5936 8.49039 11.1047 8.63681L5.08614 10.4396C0.479198 11.8196 -1.3266 17.1663 1.55735 20.8878L5.32497 25.7496C5.63099 26.1445 5.79344 26.6254 5.78715 27.118L5.70959 33.1817C5.65015 37.8233 10.3778 41.1277 14.9481 39.6391L20.9186 37.6943C21.4037 37.5363 21.9293 37.5363 22.4144 37.6943L28.3849 39.6391C32.9552 41.1277 37.6829 37.8233 37.6234 33.1817L37.5459 27.118C37.5396 26.6254 37.702 26.1445 38.008 25.7496L41.7757 20.8878C44.6596 17.1663 42.8538 11.8196 38.2469 10.4396L32.2283 8.63681C31.7394 8.49039 31.3142 8.19312 31.0183 7.79105L27.3763 2.84155ZM19.7632 5.43388C20.6925 4.17096 22.6405 4.17096 23.5698 5.43388L27.2118 10.3834C28.0994 11.5896 29.3751 12.4813 30.8419 12.9206L36.8603 14.7234C38.3961 15.1834 38.998 16.9656 38.0366 18.2062L34.269 23.0679C33.3508 24.2527 32.8636 25.6954 32.8825 27.1732L32.96 33.2369C32.9799 34.7841 31.404 35.8856 29.8806 35.3894L23.9101 33.4446C22.4549 32.9706 20.8781 32.9706 19.4229 33.4446L13.4524 35.3894C11.929 35.8856 10.3531 34.7841 10.373 33.2369L10.4505 27.1732C10.4694 25.6954 9.98217 24.2527 9.06398 23.0679L5.29636 18.2062C4.335 16.9656 4.93693 15.1834 6.47267 14.7234L12.4912 12.9206C13.9579 12.4813 15.2336 11.5896 16.1212 10.3834L19.7632 5.43388Z"/>
                            </svg>
                        </span>
                <div class="advantages__info grid">
                    <h3 class="advantages__title">
                        <?=GetMessage('ADVANTAGES_ITEM_TITLE_1')?>
                    </h3>
                    <div class="advantages__description">
                        <?=GetMessage('ADVANTAGES_ITEM_TEXT_1')?>
                    </div>
                </div>
            </div>
            <div class="advantages__block grid shadow">
                <span class="advantages__icon flex">
                    <svg viewBox="0 0 32 40" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23.388 20.6349C24.204 21.4815 24.204 22.8541 23.388 23.7007L16 31.3651C15.1871 32.2083 13.8712 32.2116 13.0544 31.3749L13.0448 31.3651L8.61204 26.7664C7.79599 25.9199 7.79599 24.5473 8.61204 23.7007C9.42809 22.8541 10.7512 22.8541 11.5672 23.7007L14.5224 26.7664L20.4328 20.6349C21.2488 19.7884 22.5719 19.7884 23.388 20.6349Z"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16 0C11.5817 0 8 3.58172 8 8L6 8C2.68629 8 0 10.6863 0 14V34C0 37.3137 2.68629 40 6 40H26C29.3137 40 32 37.3137 32 34V14C32 10.6863 29.3137 8 26 8H24C24 3.58172 20.4183 0 16 0ZM12 16C12 17.1046 11.1046 18 10 18C8.89543 18 8 17.1046 8 16V12H6C4.89543 12 4 12.8954 4 14V34C4 35.1046 4.89543 36 6 36H26C27.1046 36 28 35.1046 28 34V14C28 12.8954 27.1046 12 26 12H24V16C24 17.1046 23.1046 18 22 18C20.8954 18 20 17.1046 20 16V12H12V16ZM16 4C13.7909 4 12 5.79086 12 8L20 8C20 5.79086 18.2091 4 16 4Z"/>
                    </svg>
                </span>
                <div class="advantages__info grid">
                    <h3 class="advantages__title">
                        <?=GetMessage('ADVANTAGES_ITEM_TITLE_2')?>
                    </h3>
                    <div class="advantages__description">
                        <?=GetMessage('ADVANTAGES_ITEM_TEXT_2')?>
                    </div>
                </div>
            </div>
            <div class="advantages__block grid shadow">
                        <span class="advantages__icon flex">
                            <svg viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.333 20C9.22844 20 8.33301 20.8954 8.33301 22C8.33301 23.1046 9.22844 24 10.333 24H18.333C19.4376 24 20.333 23.1046 20.333 22C20.333 20.8954 19.4376 20 18.333 20H10.333Z"/>
                                <path d="M8.33301 30C8.33301 28.8954 9.22844 28 10.333 28H26.333C27.4376 28 28.333 28.8954 28.333 30C28.333 31.1046 27.4376 32 26.333 32H10.333C9.22844 32 8.33301 31.1046 8.33301 30Z"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.33301 0C3.0193 0 0.333008 2.68629 0.333008 6V34C0.333008 37.3137 3.0193 40 6.33301 40H34.333C37.6467 40 40.333 37.3137 40.333 34V6C40.333 2.68629 37.6467 0 34.333 0H6.33301ZM14.333 4H6.33301C5.22844 4 4.33301 4.89543 4.33301 6V34C4.33301 35.1046 5.22844 36 6.33301 36H34.333C35.4376 36 36.333 35.1046 36.333 34V6C36.333 4.89543 35.4376 4 34.333 4H32.333V13.3107C32.333 15.1535 30.3423 16.3088 28.7423 15.3945L23.333 12.3035L17.9237 15.3945C16.3238 16.3088 14.333 15.1535 14.333 13.3107V4ZM28.333 4H18.333V10.5536L22.1423 8.37692C22.8801 7.95529 23.7859 7.9553 24.5237 8.37692L28.333 10.5536V4Z"/>
                            </svg>
                        </span>
                <div class="advantages__info grid">
                    <h3 class="advantages__title">
                        <?=GetMessage('ADVANTAGES_ITEM_TITLE_3')?>
                    </h3>
                    <div class="advantages__description">
                        <?=GetMessage('ADVANTAGES_ITEM_TEXT_3')?>
                    </div>
                </div>
            </div>
            <div class="advantages__block grid shadow">
                        <span class="advantages__icon flex">
                            <svg viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                                <path d="M24.6348 13.6894C24.6348 15.925 22.8581 17.7372 20.6665 17.7372C18.4749 17.7372 16.6982 15.925 16.6982 13.6894C16.6982 11.4539 18.4749 9.64167 20.6665 9.64167C22.8581 9.64167 24.6348 11.4539 24.6348 13.6894Z"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M18.0045 0.641002C19.6803 -0.213668 21.6527 -0.213667 23.3285 0.641003L37.3747 7.80475C40.5771 9.43801 41.6514 13.5646 39.6654 16.6034L34.5451 24.4377C34.4828 26.3106 34.1426 28.1621 33.535 29.9076C32.8595 31.8482 31.8633 33.6296 30.591 35.1438C29.3182 36.6584 27.7906 37.8796 26.0856 38.72C24.3793 39.5611 22.5368 40 20.6665 40C18.7962 40 16.9537 39.5611 15.2474 38.72C13.5425 37.8796 12.0148 36.6584 10.742 35.1438C9.46968 33.6296 8.4735 31.8482 7.79803 29.9076C7.19047 28.1621 6.8502 26.3106 6.78792 24.4377L1.66761 16.6034C-0.318435 13.5646 0.755937 9.43801 3.95833 7.80475L18.0045 0.641002ZM9.8235 21.785H31.5095L36.3636 14.3581C37.0256 13.3452 36.6675 11.9696 35.6 11.4252L21.5538 4.26145C20.9953 3.97655 20.3378 3.97656 19.7792 4.26144L5.733 11.4252C4.66554 11.9696 4.30742 13.3452 4.96943 14.3581L9.8235 21.785ZM10.8852 25.8328C11.0147 26.7666 11.2335 27.6797 11.5376 28.5533C12.0587 30.0504 12.8163 31.3925 13.755 32.5095C14.6931 33.6259 15.7902 34.4919 16.974 35.0754C18.1564 35.6583 19.4101 35.9522 20.6665 35.9522C21.9229 35.9522 23.1766 35.6583 24.359 35.0754C25.5428 34.4919 26.6399 33.6259 27.5781 32.5095C28.5167 31.3925 29.2743 30.0504 29.7954 28.5533C30.0995 27.6797 30.3183 26.7666 30.4479 25.8328H10.8852Z"/>
                            </svg>
                        </span>
                <div class="advantages__info grid">
                    <h3 class="advantages__title">
                        <?=GetMessage('ADVANTAGES_ITEM_TITLE_4')?>
                    </h3>
                    <div class="advantages__description">
                        <?=GetMessage('ADVANTAGES_ITEM_TEXT_4')?>
                    </div>
                </div>
            </div>
            <div class="advantages__block grid shadow">
                        <span class="advantages__icon flex">
                            <svg viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                                <path d="M23.6167 16.3833C25.1311 17.8976 27.5864 17.8976 29.1007 16.3833C30.6151 14.8689 30.6151 12.4136 29.1007 10.8993C27.5864 9.38489 25.1311 9.38489 23.6167 10.8993C22.1024 12.4136 22.1024 14.8689 23.6167 16.3833Z"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M37.5141 6.9342C37.047 4.69161 35.3084 2.95304 33.0658 2.48593L21.7192 0.122518C19.7706 -0.283359 17.7304 0.333563 16.304 1.76L1.7599 16.3041C-0.555364 18.6194 -0.590801 22.3377 1.68075 24.6093L15.3907 38.3193C17.6623 40.5908 21.3806 40.5554 23.6959 38.2401L38.24 23.696C39.6664 22.2696 40.2834 20.2294 39.8775 18.2808L37.5141 6.9342ZM32.1977 6.31958C32.9452 6.47529 33.5247 7.05481 33.6804 7.80234L36.0438 19.1489C36.1791 19.7985 35.9735 20.4785 35.498 20.954L20.9539 35.4981C20.1821 36.2699 18.9427 36.2817 18.1855 35.5245L4.47551 21.8145C3.71833 21.0573 3.73014 19.8179 4.5019 19.0461L19.046 4.502C19.5215 4.02652 20.2015 3.82088 20.8511 3.95617L32.1977 6.31958Z"/>
                            </svg>
                        </span>
                <div class="advantages__info grid">
                    <h3 class="advantages__title">
                        <?=GetMessage('ADVANTAGES_ITEM_TITLE_5')?>
                    </h3>
                    <div class="advantages__description">
                        <?=GetMessage('ADVANTAGES_ITEM_TEXT_5')?>
                    </div>
                </div>
            </div>
            <div class="advantages__block grid shadow">
                        <span class="advantages__icon flex">
                            <svg viewBox="0 0 33 40" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.333 8C9.22839 8 8.33301 8.89545 8.33301 10C8.33301 11.1046 9.22839 12 10.333 12H20.333C21.4376 12 22.333 11.1046 22.333 10C22.333 8.89545 21.4376 8 20.333 8H10.333Z"/>
                                <path d="M8.33301 18C8.33301 16.8954 9.22839 16 10.333 16H22.333C23.4376 16 24.333 16.8954 24.333 18C24.333 19.1046 23.4376 20 22.333 20H10.333C9.22839 20 8.33301 19.1046 8.33301 18Z"/>
                                <path d="M10.333 24C9.22839 24 8.33301 24.8954 8.33301 26C8.33301 27.1046 9.22839 28 10.333 28H16.333C17.4376 28 18.333 27.1046 18.333 26C18.333 24.8954 17.4376 24 16.333 24H10.333Z"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.33301 0C3.01929 0 0.333008 2.68628 0.333008 6V34C0.333008 37.3137 3.01929 40 6.33301 40H26.333C29.6467 40 32.333 37.3137 32.333 34V6C32.333 2.68628 29.6467 0 26.333 0H6.33301ZM4.33301 6C4.33301 4.89545 5.22839 4 6.33301 4H26.333C27.4376 4 28.333 4.89545 28.333 6V34C28.333 35.1046 27.4376 36 26.333 36H6.33301C5.22839 36 4.33301 35.1046 4.33301 34V6Z"/>
                            </svg>
                        </span>
                <div class="advantages__info grid">
                    <h3 class="advantages__title">
                        <?=GetMessage('ADVANTAGES_ITEM_TITLE_6')?>
                    </h3>
                    <div class="advantages__description">
                        <?=GetMessage('ADVANTAGES_ITEM_TEXT_6')?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section grid">
    <div class="container">
        <h2 class="section__title"><?=GetMessage('ABOUT')?></h2>
        <div class="about-us">
            <p class="about-us__description">
                <?php
                    echo \Helpers\GetLangContent::getContent(1)['UF_ABOUT'];
                ?>
            </p>
        </div>
    </div>
</section>
<section class="section grid">
    <div class="container">
        <h2 class="section__title"><?=GetMessage('REVIEWS')?></h2>
        <div class="reviews grid">
            <?php $APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "review-list",
                Array(
                    "ACTIVE_DATE_FORMAT" => "d.m.Y",
                    "ADD_SECTIONS_CHAIN" => "Y",
                    "AJAX_MODE" => "N",
                    "AJAX_OPTION_ADDITIONAL" => "",
                    "AJAX_OPTION_HISTORY" => "N",
                    "AJAX_OPTION_JUMP" => "N",
                    "AJAX_OPTION_STYLE" => "Y",
                    "CACHE_FILTER" => "N",
                    "CACHE_GROUPS" => "Y",
                    "CACHE_TIME" => "36000000",
                    "CACHE_TYPE" => "A",
                    "CHECK_DATES" => "Y",
                    "DETAIL_URL" => "",
                    "DISPLAY_BOTTOM_PAGER" => "Y",
                    "DISPLAY_DATE" => "Y",
                    "DISPLAY_NAME" => "Y",
                    "DISPLAY_PICTURE" => "Y",
                    "DISPLAY_PREVIEW_TEXT" => "Y",
                    "DISPLAY_TOP_PAGER" => "N",
                    "FIELD_CODE" => array("", ""),
                    "FILTER_NAME" => "",
                    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                    "IBLOCK_ID" => "6",
                    "IBLOCK_TYPE" => "",
                    "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                    "INCLUDE_SUBSECTIONS" => "Y",
                    "MESSAGE_404" => "",
                    "NEWS_COUNT" => "",
                    "PAGER_BASE_LINK_ENABLE" => "N",
                    "PAGER_DESC_NUMBERING" => "N",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL" => "N",
                    "PAGER_SHOW_ALWAYS" => "N",
                    "PAGER_TEMPLATE" => ".default",
                    "PAGER_TITLE" => "Новости",
                    "PARENT_SECTION" => "",
                    "PARENT_SECTION_CODE" => "",
                    "PREVIEW_TRUNCATE_LEN" => "",
                    "PROPERTY_CODE" => array("", "IMG_PC", "IMG_TABLET", "IMG_PHONE", "BANNER_LINK", "BANNER_DESC"),
                    "SET_BROWSER_TITLE" => "Y",
                    "SET_LAST_MODIFIED" => "N",
                    "SET_META_DESCRIPTION" => "Y",
                    "SET_META_KEYWORDS" => "Y",
                    "SET_STATUS_404" => "N",
                    "SET_TITLE" => "Y",
                    "SHOW_404" => "N",
                    "SORT_BY1" => "ACTIVE_FROM",
                    "SORT_BY2" => "SORT",
                    "SORT_ORDER1" => "DESC",
                    "SORT_ORDER2" => "ASC",
                    "STRICT_SECTION_CHECK" => "N"
                )
            );?>
            <a href="reveiws.html" class="reviews__action hover"><?=GetMessage('SHOW_ALL')?></a>
        </div>
    </div>
</section>
