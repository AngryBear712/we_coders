<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?php
$arSection = array();
$my_sections = CIBlockSection::GetList (
Array("ID" => "ASC"),
Array("IBLOCK_ID" => 14, "ACTIVE" => "Y"),
false,
Array('NAME', 'ID', 'CODE')
);
while($ar_fields = $my_sections->GetNext())
{
$arResult["SECT"][$ar_fields["ID"]] = $ar_fields;
}
$arSelect = array("ID", "CODE");
foreach($arResult["ITEMS"] as $key=> $value) {
    $db_old_groups = CIBlockElement::GetElementGroups($value["ID"], true, $arSelect);
    $ar_new_groups = Array();
    while($ar_group = $db_old_groups->Fetch()) {

        $ar_new_groups[] = $ar_group["ID"];

        $arResult["ITEMS"][$key]['SECT_GROUP'][] = $ar_group["CODE"];
    }
}
