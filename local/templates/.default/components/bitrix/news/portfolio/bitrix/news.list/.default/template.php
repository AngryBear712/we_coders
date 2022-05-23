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
<?$APPLICATION->IncludeComponent(
    "bitrix:main.include",
    "portfolio_inc",
    Array(
        "AREA_FILE_SHOW" => "file",
        "AREA_FILE_SUFFIX" => "inc",
        "EDIT_TEMPLATE" => "",
        "PATH" => "/we_coders/portfolio_inc.php"
    )
);?>
<div class="row">
    <div class="col-lg-12">
        <div class="portfolio-menu brand-filter text-center mb-70">
            <div class="filter" data-filter="all">Все</div>
            <?foreach ($arResult["SECT"] as $sect):?>
            <div class="filter" data-filter=".<?=$sect["CODE"]?>"><?=$sect["NAME"]?></div>
            <?endforeach;?>
        </div>
    </div>
        <div id="Container">
            <?foreach($arResult["ITEMS"] as $arItem):?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>
                <div class="col-md-4 col-sm-6 col-xs-12 mb-30 mix <?=implode(" ", $arItem['SECT_GROUP'])?>">

                <div class="portfolio-wrapper portfolio-title" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                    <div class="portfolio-img">
                        <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"/>
                        <div class="work-text brand-bg">
                            <div class="inner-text">
                                <a class="view-portfolio image-link" href="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>">
                                    <span class="plus"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio-heading pd-15">
                        <h4 class="mb-10">
                            <a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?echo $arItem["NAME"]?></a>
                        </h4>
                        <h5 class="m-0"><?echo $arItem["PROPERTIES"]["VIDS_WORK"]["VALUE"]?></h5>
                    </div>
                </div>
                </div>
            <?endforeach;?>
        </div>
</div>


