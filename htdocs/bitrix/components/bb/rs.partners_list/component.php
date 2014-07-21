<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();

if (CModule::IncludeModule("iblock")) {
    //Получаем список категорий
    $arFilter = Array('IBLOCK_ID'=>12, 'GLOBAL_ACTIVE'=>'Y');
    $db_list = CIBlockSection::GetList(Array($by=>$order), $arFilter, true);
    while($ar_result = $db_list->GetNext()){
        $arResult['SECTION'][$ar_result['ID']] = $ar_result['NAME'];
    }

    $arSelect = Array("ID", "NAME", "DETAIL_TEXT", "DETAIL_PICTURE", "PREVIEW_TEXT", "IBLOCK_SECTION_ID", "DETAIL_PAGE_URL");
    $arFilter = Array("IBLOCK_ID"=>12, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
    $res = CIBlockElement::GetList(Array('sort'=>'asc', 'name'=>'asc'), $arFilter, false, false, $arSelect);
    while($ob = $res->GetNext()){
        $arResult['ITEM'][$arResult['SECTION'][$ob['IBLOCK_SECTION_ID']]][] = $ob;
    }
}

$this->IncludeComponentTemplate();