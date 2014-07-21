<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();

if (CModule::IncludeModule("iblock")) {
    $arSelect = Array("ID", "NAME", "DETAIL_TEXT", "DETAIL_PICTURE", "PROPERTY_DATE", "PREVIEW_TEXT", "DETAIL_PAGE_URL");
    $arFilter = Array("IBLOCK_ID"=>7, "CODE"=>$_REQUEST["ELEMENT_CODE"], "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
    $res = CIBlockElement::GetList(Array('sort'=>'asc', 'name'=>'asc'), $arFilter, false, false, $arSelect);
    while($ob = $res->GetNext()){
        $arResult['ELEMENT'] = $ob;
    }
}

$this->IncludeComponentTemplate();