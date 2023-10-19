<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use Bitrix\Main\Page\Asset;
global $APPLICATION;
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
	<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@600&display=swap" rel="stylesheet">
	<?php
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/swiper.min.css');
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/style.css');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/easy-toggler.iife.min.js');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/swiper.min.js');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/jq.js');
	Asset::getInstance()->addJs('/local/ajax/ajax.js');
	if(strpos($APPLICATION->GetCurDir(), '/basket/') !== false){
		Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/basket.js');
	}
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/script.js');
	$APPLICATION->ShowHead();?>
	<title><?php $APPLICATION->ShowTitle()?></title>
	</head>
<body>
<?php if(VIEW_PANEL):?>
	<div id="panel"><?php $APPLICATION->ShowPanel();?></div>
<?php endif;?>


<div class="wrapper grid">
	<header class="header">
		<div class="container flex">
			<div class="header__logo-area flex">
				<a href="<?=(LANGUAGE_ID !== 'en' ? '/'.LANGUAGE_ID : '')?>/"><img class="header__logo" src="<?=SITE_TEMPLATE_PATH?>/img/logo.png"/></a>
				<nav class="header__nav flex">
					<?php $APPLICATION->IncludeComponent(
						"bitrix:menu",
						"",
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
				</nav>
				<button class="header__action" easy-add="#mobile-nav" easy-class="open">
					<svg viewBox="0 0 20 14" xmlns="http://www.w3.org/2000/svg">
						<path d="M0 1C0 0.447715 0.447715 0 1 0H19C19.5523 0 20 0.447715 20 1C20 1.55228 19.5523 2 19 2H1C0.447716 2 0 1.55228 0 1Z"/>
						<path d="M0 7C0 6.44772 0.447715 6 1 6H19C19.5523 6 20 6.44772 20 7C20 7.55228 19.5523 8 19 8H1C0.447716 8 0 7.55228 0 7Z"/>
						<path d="M1 12C0.447715 12 0 12.4477 0 13C0 13.5523 0.447716 14 1 14H19C19.5523 14 20 13.5523 20 13C20 12.4477 19.5523 12 19 12H1Z"/>
					</svg>
				</button>
				<div id="mobile-nav" class="mobile-nav grid">
					<button class="mobile-nav__close flex" easy-remove="#mobile-nav" easy-class="open">
						<svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
							<path d="M15.5854 13.633C16.1382 14.1864 16.1382 15.0471 15.5854 15.6004C15.309 15.877 14.9712 16 14.6027 16C14.2342 16 13.8964 15.877 13.62 15.6004L8 9.97502L2.38004 15.6004C2.10365 15.877 1.76584 16 1.39731 16C1.02879 16 0.690979 15.877 0.414587 15.6004C-0.138196 15.0471 -0.138196 14.1864 0.414587 13.633L6.03455 8.00769L0.414587 2.38233C-0.138196 1.82901 -0.138196 0.9683 0.414587 0.414986C0.96737 -0.138329 1.82726 -0.138329 2.38004 0.414986L8 6.04035L13.62 0.414986C14.1727 -0.138329 15.0326 -0.138329 15.5854 0.414986C16.1382 0.9683 16.1382 1.82901 15.5854 2.38233L9.96545 8.00769L15.5854 13.633Z"/>
						</svg>
					</button>
					<div class="mobile-nav__nav grid">
						<a href="home.html" class="mobile-nav__nav-element">Главная</a>
						<a href="catalog.html" class="mobile-nav__nav-element">Каталог</a>
						<a href="bestsellers.html" class="mobile-nav__nav-element">Бестселлеры</a>
						<a href="blogs.html" class="mobile-nav__nav-element">Блог</a>
						<a href="contacts.html" class="mobile-nav__nav-element">Контакты</a>
					</div>
				</div>
				<div class="modal-bg" easy-remove="#mobile-nav" easy-class="open"></div>
			</div>
			<div class="header__actions flex">
				<div class="header__choice-language">
					<button type="button" class="header__choice-language-button hover"><?=mb_strtoupper(LANGUAGE_ID)?></button>
					<div class="header__choice-language-dropdown grid">
						<a href="/de/" class="header__choice-language-dropdown-item hover">DE</a>
						<a href="/it/" class="header__choice-language-dropdown-item hover">IT</a>
						<a href="/fr/" class="header__choice-language-dropdown-item hover">FR</a>
						<a href="/" class="header__choice-language-dropdown-item hover">EN</a>
					</div>
				</div>
				<form action="/search/index.php" class="header__search flex">
					<label class="header__search-button flex hover">
						<input type="submit" name="s" value="Поиск">
						<svg class="hover" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
							<path d="M20.1714 18.0942L16.3949 14.3287C17.6134 12.7764 18.2745 10.8595 18.2721 8.88603C18.2721 7.12854 17.7509 5.41052 16.7745 3.94922C15.7981 2.48792 14.4103 1.34897 12.7866 0.676412C11.1629 0.00385015 9.37617 -0.172123 7.65245 0.170746C5.92873 0.513616 4.34539 1.35993 3.10266 2.60266C1.85993 3.84539 1.01362 5.42873 0.670746 7.15245C0.327877 8.87617 0.50385 10.6629 1.17641 12.2866C1.84897 13.9103 2.98792 15.2981 4.44922 16.2745C5.91052 17.2509 7.62854 17.7721 9.38603 17.7721C11.3595 17.7745 13.2764 17.1134 14.8287 15.8949L18.5942 19.6714C18.6974 19.7755 18.8203 19.8582 18.9556 19.9146C19.091 19.971 19.2362 20 19.3828 20C19.5294 20 19.6746 19.971 19.81 19.9146C19.9453 19.8582 20.0682 19.7755 20.1714 19.6714C20.2755 19.5682 20.3582 19.4453 20.4146 19.31C20.471 19.1746 20.5 19.0294 20.5 18.8828C20.5 18.7362 20.471 18.591 20.4146 18.4556C20.3582 18.3203 20.2755 18.1974 20.1714 18.0942ZM2.72151 8.88603C2.72151 7.56791 3.11238 6.2794 3.84468 5.18342C4.57699 4.08745 5.61785 3.23324 6.83563 2.72882C8.05341 2.22439 9.39342 2.09241 10.6862 2.34957C11.979 2.60672 13.1665 3.24145 14.0986 4.1735C15.0306 5.10555 15.6653 6.29306 15.9225 7.58585C16.1796 8.87864 16.0477 10.2186 15.5432 11.4364C15.0388 12.6542 14.1846 13.6951 13.0886 14.4274C11.9927 15.1597 10.7041 15.5505 9.38603 15.5505C7.61849 15.5505 5.92334 14.8484 4.6735 13.5986C3.42366 12.3487 2.72151 10.6536 2.72151 8.88603Z"/>
						</svg>
					</label>
					<input type="text" class="header__search-input" name="q" value="" placeholder="Поиск по сайту">
				</form>
				<a href="<?=(LANGUAGE_ID !== 'en' ? '/'.LANGUAGE_ID : '')?>/basket/" class="header__basket flex hover">
					<svg class="hover" viewBox="0 0 21 20" xmlns="http://www.w3.org/2000/svg">
						<path d="M12.4975 16.013C12.7637 16.013 13.019 15.908 13.2072 15.7211C13.3954 15.5342 13.5011 15.2807 13.5011 15.0163V13.0229C13.5011 12.7585 13.3954 12.505 13.2072 12.3181C13.019 12.1311 12.7637 12.0261 12.4975 12.0261C12.2313 12.0261 11.9761 12.1311 11.7879 12.3181C11.5997 12.505 11.4939 12.7585 11.4939 13.0229V15.0163C11.4939 15.2807 11.5997 15.5342 11.7879 15.7211C11.9761 15.908 12.2313 16.013 12.4975 16.013ZM8.48309 16.013C8.74926 16.013 9.00453 15.908 9.19275 15.7211C9.38096 15.5342 9.4867 15.2807 9.4867 15.0163V13.0229C9.4867 12.7585 9.38096 12.505 9.19275 12.3181C9.00453 12.1311 8.74926 12.0261 8.48309 12.0261C8.21691 12.0261 7.96164 12.1311 7.77343 12.3181C7.58522 12.505 7.47948 12.7585 7.47948 13.0229V15.0163C7.47948 15.2807 7.58522 15.5342 7.77343 15.7211C7.96164 15.908 8.21691 16.013 8.48309 16.013ZM17.5156 4.05228H16.1306L14.3943 0.613566C14.3413 0.487034 14.2625 0.37273 14.163 0.277795C14.0634 0.182861 13.9452 0.109337 13.8158 0.0618182C13.6863 0.0142993 13.5484 -0.00619319 13.4106 0.00162138C13.2728 0.00943595 13.1382 0.0453897 13.015 0.107236C12.8918 0.169081 12.7829 0.25549 12.6948 0.361062C12.6068 0.466635 12.5417 0.589101 12.5035 0.720808C12.4653 0.852515 12.4548 0.990633 12.4728 1.12653C12.4908 1.26243 12.5368 1.39318 12.6079 1.51062L13.8825 4.05228H7.09811L8.37269 1.51062C8.47011 1.27829 8.47542 1.01796 8.38757 0.7819C8.29971 0.545839 8.12519 0.351522 7.89905 0.237964C7.67291 0.124405 7.41188 0.100012 7.16838 0.169681C6.92487 0.23935 6.71692 0.397924 6.58627 0.613566L4.85002 4.05228H3.46504C2.75568 4.063 2.07291 4.32214 1.53716 4.78402C1.00141 5.24589 0.647085 5.88081 0.536685 6.57681C0.426285 7.27281 0.566899 7.98517 0.933728 8.58825C1.30056 9.19133 1.87004 9.6464 2.54172 9.87319L3.28439 17.3088C3.35929 18.0489 3.70927 18.7348 4.266 19.2324C4.82273 19.73 5.54623 20.0037 6.29522 20H14.7055C15.4545 20.0037 16.178 19.73 16.7347 19.2324C17.2914 18.7348 17.6414 18.0489 17.7163 17.3088L18.459 9.87319C19.1321 9.64573 19.7025 9.189 20.0691 8.5839C20.4356 7.9788 20.5747 7.26438 20.4617 6.56718C20.3487 5.86998 19.9909 5.23499 19.4517 4.77469C18.9125 4.31439 18.2266 4.05848 17.5156 4.05228ZM15.699 17.1094C15.6741 17.3562 15.5574 17.5848 15.3718 17.7506C15.1863 17.9165 14.9451 18.0077 14.6954 18.0065H6.28518C6.03552 18.0077 5.79435 17.9165 5.60878 17.7506C5.4232 17.5848 5.30654 17.3562 5.28158 17.1094L4.56901 10.0327H16.4116L15.699 17.1094ZM17.5156 8.0392H3.46504C3.19887 8.0392 2.9436 7.93419 2.75539 7.74727C2.56717 7.56035 2.46144 7.30682 2.46144 7.04247C2.46144 6.77812 2.56717 6.5246 2.75539 6.33768C2.9436 6.15076 3.19887 6.04574 3.46504 6.04574H17.5156C17.7817 6.04574 18.037 6.15076 18.2252 6.33768C18.4134 6.5246 18.5192 6.77812 18.5192 7.04247C18.5192 7.30682 18.4134 7.56035 18.2252 7.74727C18.037 7.93419 17.7817 8.0392 17.5156 8.0392Z"/>
					</svg>
					<span class="header__basket-index active flex">
						<?= \Helpers\Basket::countProduct();?>
					</span>
				</a>
			</div>
		</div>
	</header>
		<main class="main grid">
