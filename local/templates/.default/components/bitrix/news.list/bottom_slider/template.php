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

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <div class="testimonial-active dots-style">
                <?foreach($arResult["ITEMS"] as $arItem):?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <div class="single-testimonial black-text text-center">

                    <div class="testimonial-title" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                        <span class="icon-quote"></span>
                        <h3 class="black-text"><?echo $arItem["PROPERTIES"]["LOSUNG"]["VALUE"]?></h3>
                    </div>
                    <p><span>"</span><?echo $arItem["PREVIEW_TEXT"];?><span>"</span>
                    </p>
                    <div class="testimonial-author text-uppercase">
                        <span>- <?echo $arItem["NAME"]?>, <?echo $arItem["PROPERTIES"]["COMPANY"]["VALUE"]?>.</span>
                    </div>

                </div>
                <?endforeach;?>
            </div>

        </div>
    </div>
</div>


