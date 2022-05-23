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

    <div class="row">
        <?foreach($arResult["ITEMS"] as $arItem):?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>

        <div class="col-lg-3 col-md-3 col-sm-6" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <div class="single-pricing text-center mb-30">
                <div class="pricing-head">
                    <h2 class="pricing-title text-uppercase"><?echo $arItem["NAME"]?></h2>
                    <span><?echo $arItem["PREVIEW_TEXT"];?></span>
                </div>
                <div class="pricing-plan-price <?echo $arItem["PROPERTIES"]["PLAN_PRICE"]["VALUE"];?>" >
                    <span><?echo $arItem["PROPERTIES"]["PRICE"]["VALUE"];?></span>
                </div>
                <div class="pricing-plan-list">
                    <ul>
                        <?foreach ($arItem["PROPERTIES"]["ALL_TYPE"]["VALUE"] as $key=>$value):?>
<!--                        --><?//echo '<pre>';
//                        print_r($value);
//                        echo '</pre>';?>
                        <?if(!empty($value[$key])) { ?>
                                <li><?echo $value;?></li>
                            <? } else { ?>
                                <li> - </li>
                             <? }?>
                        <?endforeach;?>
                    </ul>
                </div>
                <div class="get-started">
                    <a href="services_landing.html" class="btn">Узнать больше</a>
                </div>
            </div>
        </div>
        <?endforeach;?>
    </div>

