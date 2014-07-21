<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();

if (CModule::IncludeModule("iblock")) {
    $arSelect = Array("ID", "NAME", "DETAIL_TEXT", "DETAIL_PICTURE", "PROPERTY_DATE", "DATE_ACTIVE_FROM", "PROPERTY_MORE", "DETAIL_PAGE_URL", "PREVIEW_TEXT");
    if(!empty($arParams['YEAR'])){
        $arFilter = Array("IBLOCK_ID"=>9, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y", ">DATE_ACTIVE_FROM" => "01.01." . $arParams['YEAR'], "<DATE_ACTIVE_FROM" => "31.12." . $arParams['YEAR']);
    } else {
        $arFilter = Array("IBLOCK_ID"=>9, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
    }
    $res = CIBlockElement::GetList(Array('sort'=>'asc', 'name'=>'asc'), $arFilter, false, false, $arSelect);
    while($ob = $res->GetNext()){
        $arResult['ITEM'][] = $ob;
        $arDate = ParseDateTime($ob['DATE_ACTIVE_FROM'], "DD.MM.YYYY HH:MI:SS");
        $arResult['YEAR'][$arDate['YYYY']] = '/news/' . $arDate['YYYY'] . '/';
    }
}

$this->IncludeComponentTemplate();