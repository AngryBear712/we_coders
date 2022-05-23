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
    <link rel="shortcut icon" type="image/x-icon" href="/local/templates/we_coders_main/img/favicon.png">
    <!-- google fonts (шрифты) -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <?$APPLICATION->SetAdditionalCss("/local/templates/we_coders_main/css/bootstrap.min.css")?>
    <!-- стили -->
    <!-- bootstrap css -->
    <!-- bootstrap css -->
    <?$APPLICATION->SetAdditionalCss("/local/templates/we_coders_main/css/owl.carousel.css")?>
    <!-- animate-text css -->
    <?$APPLICATION->SetAdditionalCss("/local/templates/we_coders_main/css/animate-text.css")?>
    <!-- magnific-popup css -->
    <?$APPLICATION->SetAdditionalCss("/local/templates/we_coders_main/css/magnific-popup.css")?>
    <!-- et-line fonts css -->
    <?$APPLICATION->SetAdditionalCss("/local/templates/we_coders_main/css/et-line.css")?>
    <!-- pe-icon-7-stroke fonts css -->
    <?$APPLICATION->SetAdditionalCss("/local/templates/we_coders_main/css/pe-icon-7-stroke.css")?>
    <!-- Theme shortcodes/elements style -->
    <?$APPLICATION->SetAdditionalCss("/local/templates/we_coders_main/css/shortcode/shortcodes.css")?>
    <!-- meanmenu css -->
    <?$APPLICATION->SetAdditionalCss("/local/templates/we_coders_main/css/meanmenu.min.css")?>
    <!-- font-awesome css -->
    <?$APPLICATION->SetAdditionalCss("/local/templates/we_coders_main/css/font-awesome.min.css")?>
    <!-- style css (основные стили) -->
    <?$APPLICATION->SetAdditionalCss("/local/templates/we_coders_main/style.css")?>
    <!-- responsive css -->
    <?$APPLICATION->SetAdditionalCss("/local/templates/we_coders_main/css/responsive.css")?>

<?$APPLICATION->AddHeadScript("/local/templates/we_coders_main/js/vendor/modernizr-2.8.3.min.js")?>
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

<!-- Шапка сайта (меню) -->
<header id="sticky-header" class="header-area header-wrapper transparent-header">

    <?php
    include_once($_SERVER['DOCUMENT_ROOT']."/local/php_interface/include/header.php");
    ?>
</header>

