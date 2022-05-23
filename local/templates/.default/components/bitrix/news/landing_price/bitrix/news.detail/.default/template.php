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

            <section class="who-area-are pad-90" id="about_us">
                <div class="container">
                    <h2 class="title-1"><?echo $arResult["PROPERTIES"]["TITLE"]["VALUE"];?></h2>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="who-we">
                                <?echo $arResult["DETAIL_TEXT"];?>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="about-bg">
                                <img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Доп. контент об услуге -->
            <div class="pb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="mb-30"><?echo $arResult["PROPERTIES"]["ASK_AND_QWE"]["NAME"];?></h3>

                            <div class="brand-accordion">
                                <div class="panel-group icon angle-icon" id="accordion" role="tablist" aria-multiselectable="true">
                                    <? foreach ($arResult["PROPERTIES"]["ASK_AND_QWE"]["DESCRIPTION"] as $keys=>$idProp): ?>
                                    <div class="panel panel-default">

                                        <div class="panel-heading" role="tab" id="heading<?=$keys?>">
                                            <h4 class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?=$keys?>" aria-expanded="false" aria-controls="collapse<?=$keys?>" class="collapsed">
                                                    <?echo $idProp;?>
                                                </a>
                                            </h4>
                                        </div>

                                        <? foreach ($arResult["PROPERTIES"]["ASK_AND_QWE"]["VALUE"] as $key=>$prop): ?>
                                        <?if ($key == $keys) { ?>
                                        <div id="collapse<?=$key?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?=$keys?>">
                                            <div class="panel-body">
                                                <?echo $prop;?>
                                            </div>
                                        </div>
                                        <? } ?>
                                        <? endforeach;?>
                                    </div>
                                    <? endforeach;?>
                                </div>
                            </div>
                        </div>
                            <div class="col-lg-6 col-md-6">
                                <h3 class="mb-30"><?echo $arResult["PROPERTIES"]["STADION"]["NAME"];?></h3>
                                <div class="my-tab">
                                    <!-- Nav tabs -->
                                    <ul class="custom-tab mb-15" role="tablist">
                                        <? foreach ($arResult["PROPERTIES"]["STADION"]["DESCRIPTION"] as $keys=>$idProp): ?>
                                            <li role="presentation" ><a href="#analytyc<?=$keys?>" aria-controls="analytyc<?=$keys?>" role="tab" data-toggle="tab"><?=$idProp?></a></li>
                                        <? endforeach;?>
                                </div>
                                    </ul>
                                    <!-- Tab panes -->
                                <div class="tab-content">
                                        <? foreach ($arResult["PROPERTIES"]["STADION"]["VALUE"] as $key=>$prop): ?>
                                        <div role="tabpanel" class="tab-pane fade" id="analytyc<?=$key?>">
                                            <?=$prop?>
                                        </div>
                                    <? endforeach;?>
                                </div>
                            </div>

                    </div>
                </div>
            </div>