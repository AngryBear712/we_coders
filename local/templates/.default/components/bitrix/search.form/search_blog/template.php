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
$this->setFrameMode(true);?>
<form class="search-form" action="<?=$arResult["FORM_ACTION"]?>"">
	<table>
		<tr>
            <tb>
			<?if($arParams["USE_SUGGEST"] === "Y"):?><?$APPLICATION->IncludeComponent(
				"bitrix:search.suggest.input",
				"",
				array(
					"NAME" => "q",
					"VALUE" => "",
					"INPUT_SIZE" => 15,
					"DROPDOWN_SIZE" => 10,
				),
				$component, array("HIDE_ICONS" => "Y")
			);?><?else:?>
                    <input type="search" name="q" value="" size="15" maxlength="50" placeholder="Поиск">
                <?endif;?>
            </tb>
		</tr>
		<tr>
			<td> <button name="s" type="submit" value="<?=GetMessage("BSF_T_SEARCH_BUTTON");?>" ><i class="fa fa-search"></i></button> </td>
		</tr>
	</table>
</form>
