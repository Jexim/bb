<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();

if (CModule::IncludeModule("iblock")) {
    $arSelect = Array("ID", "NAME", "DETAIL_TEXT", "DETAIL_PICTURE", "PROPERTY_ROLE", "DETAIL_PAGE_URL", "PREVIEW_TEXT");
    $arFilter = Array("IBLOCK_ID"=>6, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
    $res = CIBlockElement::GetList(Array('sort'=>'asc', 'name'=>'asc'), $arFilter, false, false, $arSelect);
    while($ob = $res->GetNext()){
        $arResult['ITEM'][] = $ob;
    }
}

$this->IncludeComponentTemplate();