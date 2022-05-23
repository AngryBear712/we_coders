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


<div class="blog-area ptb-90">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-12 col-xs-12">

                <!-- Запись блога 1 -->
                <?foreach($arResult["ITEMS"] as $itemKey=>$arItem):?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

                ?>
                    <?foreach($arResult["SECT"] as $key=>$arSect):?>
                    <?if($arSect["ID"] == $arItem["IBLOCK_SECTION_ID"]) { ?>
                <article class="post-wrapper mb-60" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                    <div class="post-img hover-bg-opacity">
                        <a href="blog_detail1.html">
                            <?if(isset($arItem["PREVIEW_PICTURE"]["SRC"])) { ?>
                            <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"/>
                            <? }else {?>
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="<?echo $arItem["PROPERTIES"]["VIDEO"]["VALUE"]?>"></iframe>
                            </div>
                            <? } ?>
                        </a>
                    </div>
                    <div class="post-content">
                        <h3>
                            <a href="blog_detail1.html"><?echo $arItem["NAME"]?></a>
                        </h3>
                        <div class="post-meta">
                            <span><a href="#"><i class="fa fa-clock-o"></i> <?echo $arItem["DISPLAY_ACTIVE_FROM"]?> </a></span> -
                            <span><a href="#"><i class="fa fa-user"></i> <?echo $arItem["CREATED_USER_NAME"]?></a></span> -
                            <span><a href="#"><?echo $arSect["NAME"]?></a></span>

                            <?foreach ($arResult["TEST"]["GROUP"] as $com):?>
                            <?if($com["PROPERTY_ELEMENT_VALUE"] == $arItem['ID']) { ?>
                                 -
                            <span><a href="#"><i class="fa fa-comments"></i> <?=$com["CNT"]." "."Комментария"?> </a></span>
                            <? } ?>
                            <? endforeach;?>
                        </div>
                        <?echo $arItem["PREVIEW_TEXT"];?>
                        <a class="read-more btn btn-small" href="<?=$arItem["DETAIL_PAGE_URL"]?>">Читать
                            <i class="fa fa-arrow-right"></i></a>
                    </div>
                </article>
                <? }?>
                    <?endforeach;?>
                <?endforeach;?>


                <!-- Пагинация (постраничная навигация) -->
                <?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
                   <?=$arResult["NAV_STRING"]?>
                <?endif;?>
            </div>

            <!-- Правая колонка -->
            <div class="col-md-4 col-sm-12 col-xs-12 mt-sm-40 mt-xs-40">

                <!-- Поиск -->

                <div class="widget mb-60">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:search.form",
                        "search_blog",
                        array(
                            "COMPONENT_TEMPLATE" => "search",
                            "PAGE" => "#SITE_DIR#/search/",
                            "USE_SUGGEST" => "N"
                        ),
                        false
                    );?>
                </div>

                <!-- Категории -->
                <?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list", 
	"categories", 
	array(
		"ADD_SECTIONS_CHAIN" => "N",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COUNT_ELEMENTS" => "Y",
		"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
		"FILTER_NAME" => "sectionsFilter",
		"IBLOCK_ID" => "18",
		"IBLOCK_TYPE" => "content",
		"SECTION_CODE" => "",
		"SECTION_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SECTION_ID" => "",
		"SECTION_URL" => "/we_coders/#SECTION_CODE_PATH#/",
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SHOW_PARENT_NAME" => "Y",
		"TOP_DEPTH" => "2",
		"VIEW_MODE" => "LINE",
		"COMPONENT_TEMPLATE" => "categories"
	),
	false
);?>

                <!-- Популярные теги -->
                <div class="widget mb-60">
                    <h4 class="sidebar-title text-uppercase mb-35 pb-10">Популярные теги</h4>
                    <ul class="tag">
                        <li>
                            <a href="#">PHP</a>
                        </li>
                        <li>
                            <a href="#">UI/UX</a>
                        </li>
                        <li>
                            <a href="#">Дизайн</a>
                        </li>
                        <li class="active">
                            <a href="#">Портфолио</a>
                        </li>

                        <li>
                            <a href="#">UI & UX</a>
                        </li>
                        <li>
                            <a href="#">Html5</a>
                        </li>
                        <li>
                            <a href="#">Css3</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>