<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<!-- Контент для детальной страниыцы портфолио -->
<div class="single-portfolio-area pt-90 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="portfolio-details">
                    <h3><?=$arResult["NAME"]?></h3>
                    <?echo $arResult["DETAIL_TEXT"];?>
                </div>
            </div>
            <div class="col-md-5">
                <div class="portfolio-meta">
                    <ul>
                        <li><span><b><?=$arResult["PROPERTIES"]["CUSTUMER"]["NAME"]?></b> </span> <?=$arResult["PROPERTIES"]["CUSTUMER"]["VALUE"]?></li>
                        <li><span><b><?=$arResult["PROPERTIES"]["WORK_TIME"]["NAME"]?></b> </span> <?=$arResult["PROPERTIES"]["WORK_TIME"]["VALUE"]?></li>
                        <li><span><b><?=$arResult["PROPERTIES"]["TEHNOLOGIES"]["NAME"]?></b> </span> <?=$arResult["PROPERTIES"]["TEHNOLOGIES"]["VALUE"]?></li>
                    </ul>
                    <a href="<?=$arResult["PROPERTIES"]["LINK"]["VALUE"]?>" class="btn mt-30">Перейти на сайт</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Фотогалерея -->
<div class="img-gallery-area pt-30 pb-60">
    <div class="container">
        <div class="row">
            <?if(isset($arResult["PROPERTIES"]["IMAGE"]["VALUE"])) { ?>
                <?foreach ($arResult["PROPERTIES"]["IMAGE"]["VALUE"] as $arFile):?>
                    <?
                    $srcFile = CFILE::GetPath($arFile);
                    ?>
            <div class="col-md-6 col-sm-4">

                <div class="img-gallery hover-bg-opacity mb-30">

                    <a class="image-link" href="<?=$srcFile?>">
                        <img src="<?=$srcFile?>" alt="" /></a>
                </div>
            </div>
                <?endforeach;?>
            <? }?>
        </div>
    </div>
</div>