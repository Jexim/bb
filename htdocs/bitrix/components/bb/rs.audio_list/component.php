<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();

if (CModule::IncludeModule("iblock")) {
    $arSelect = Array("ID", "NAME", "PROPERTY_PERFORMER", "PROPERTY_DURATION", "PROPERTY_FILE");
    $arFilter = Array("IBLOCK_ID"=>17, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
    $res = CIBlockElement::GetList(Array('sort'=>'asc', 'name'=>'asc'), $arFilter, false, false, $arSelect);
    while($ob = $res->GetNext()){
        $arResult['ITEM'][] = $ob;
    }
}

$this->IncludeComponentTemplate();