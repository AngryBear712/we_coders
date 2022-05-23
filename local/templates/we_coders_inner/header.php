<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
global $APPLICATION;
?>
<!DOCTYPE html>
<html class="no-js" lang="<?=LANGUAGE_ID?>">
<head>

    <?$APPLICATION->ShowHead()?>
    <title><?$APPLICATION->ShowTitle()?></title>
    <link rel="shortcut icon" type="image/x-icon" href="/local/templates/we_coders_inner/img/favicon.png">
    <!-- google fonts (шрифты) -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">

    <?$APPLICATION->SetAdditionalCss("/local/templates/we_coders_inner/css/bootstrap.min.css")?>
    <!-- стили -->
    <!-- bootstrap css -->
    <!-- bootstrap css -->
    <?$APPLICATION->SetAdditionalCss("/local/templates/we_coders_inner/css/owl.carousel.css")?>
    <!-- animate-text css -->
    <?$APPLICATION->SetAdditionalCss("/local/templates/we_coders_inner/css/animate-text.css")?>
    <!-- magnific-popup css -->
    <?$APPLICATION->SetAdditionalCss("/local/templates/we_coders_inner/css/magnific-popup.css")?>
    <!-- et-line fonts css -->
    <?$APPLICATION->SetAdditionalCss("/local/templates/we_coders_inner/css/et-line.css")?>
    <!-- pe-icon-7-stroke fonts css -->
    <?$APPLICATION->SetAdditionalCss("/local/templates/we_coders_inner/css/pe-icon-7-stroke.css")?>
    <!-- Theme shortcodes/elements style -->
    <?$APPLICATION->SetAdditionalCss("/local/templates/we_coders_inner/css/shortcode/shortcodes.css")?>
    <!-- meanmenu css -->
    <?$APPLICATION->SetAdditionalCss("/local/templates/we_coders_inner/css/meanmenu.min.css")?>
    <!-- font-awesome css -->
    <?$APPLICATION->SetAdditionalCss("/local/templates/we_coders_inner/css/font-awesome.min.css")?>
    <!-- style css (основные стили) -->
    <?$APPLICATION->SetAdditionalCss("/local/templates/we_coders_inner/style.css")?>
    <!-- responsive css -->
    <?$APPLICATION->SetAdditionalCss("/local/templates/we_coders_inner/css/responsive.css")?>

    <?$APPLICATION->AddHeadScript("/local/templates/we_coders_inner/js/vendor/modernizr-2.8.3.min.js")?>
    <!-- script -->
    <!-- JS (скрипты) -->
    <!-- jquery js -->
    <?$APPLICATION->AddHeadScript('/local/templates/we_coders_main/js/vendor/jquery-1.12.0.min.js')?>
    <!-- bootstrap js -->
    <?$APPLICATION->AddHeadScript('/local/templates/we_coders_main/js/bootstrap.min.js')?>
    <!-- owl.carousel js -->
    <?$APPLICATION->AddHeadScript('/local/templates/we_coders_main/js/owl.carousel.min.js')?>
    <!-- counterup js -->
    <?$APPLICATION->AddHeadScript('/local/templates/we_coders_main/js/jquery.counterup.min.js')?>
    <?$APPLICATION->AddHeadScript('/local/templates/we_coders_main/js/waypoints.min.js')?>
    <!-- magnific-popup js -->
    <?$APPLICATION->AddHeadScript('/local/templates/we_coders_main/js/jquery.magnific-popup.min.js')?>
    <!-- mixitup js -->
    <?$APPLICATION->AddHeadScript('/local/templates/we_coders_main/js/jquery.mixitup.min.js')?>
    <!-- mixitup js -->
    <?$APPLICATION->AddHeadScript('/local/templates/we_coders_main/js/jquery.meanmenu.js')?>
    <!-- jquery.nav js -->
    <?$APPLICATION->AddHeadScript('/local/templates/we_coders_main/js/jquery.nav.js')?>
    <!-- jquery.nav js -->
    <?$APPLICATION->AddHeadScript('/local/templates/we_coders_main/js/jquery.parallax-1.1.3.js')?>
    <!-- animate text js -->
    <?$APPLICATION->AddHeadScript('/local/templates/we_coders_main/js/animate-text.js')?>
    <!-- plugins js -->
    <?$APPLICATION->AddHeadScript('/local/templates/we_coders_main/js/plugins.js')?>
    <!-- main js -->
    <?$APPLICATION->AddHeadScript('/local/templates/we_coders_main/js/main.js')?>

</head>


<body>
<?$APPLICATION->ShowPanel()?>
<!--[if lt IE 8]>
<p class="browserupgrade">Вы используете <strong>устаревший</strong> браузер. Пожалуйста
    <a href="http://browsehappy.com/">обновите его</a>
</p>
<![endif]-->

<!-- Линия с контактами -->
<div class="header-top-area bg-color ptb-10 hidden-xs">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="welcome">
                    <span><i class="fa fa-envelope"></i> admin@domain.com</span>
                    <span><i class="fa fa-phone"></i> +012 345 6789</span>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="social-icon-header text-right">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                    <a href="#"><i class="fa fa-youtube"></i></a>
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Шапка сайта (меню) -->
<header id="sticky-header" class="header-area header-wrapper white-bg">
    <?php
    include_once($_SERVER['DOCUMENT_ROOT']."/local/php_interface/include/header.php");
    ?>
</header>

<!-- Хлебные крошки (навигация) -->
<div class="breadcrumb-area brand-bg ptb-100">
    <div class="container width-100">
        <div class="row z-index">
            <div class="col-md-7 col-sm-6">
                <div class="breadcrumb-title">
                    <h2 class="white-text"><?$APPLICATION->ShowTitle()?></h2>
                </div>
            </div>
            <?$APPLICATION->IncludeComponent(
                "bitrix:breadcrumb",
                "bread_crumb",
                Array()
            );?>
        </div>
    </div>
</div>