<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
?>

<div class="our-skill">
    <h2 class="title-1">Skills</h2>
    <div class="progress-list">
        <? foreach ($arResult["SKILS"] as $key=>$arItem):?>
            <?if(!empty($arItem)) { ?>
                <div class="progress">
                    <div class="lead"><?=$arItem?></div>
                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?=$arResult["SKILS_PRE"][$key]?>">
                        <span><?=$arResult["SKILS_PRE"][$key]?></span>
                    </div>
                </div>
            <? }?>
        <? endforeach;?>
    </div>
</div>
