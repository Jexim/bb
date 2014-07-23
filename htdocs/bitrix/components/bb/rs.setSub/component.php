<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();

if (CModule::IncludeModule("iblock")) {
    $el = new CIBlockElement;
    $PROP = array();
    if($_POST['sub'] == 'true'){
        $PROP[19] = Array("VALUE" => 5); 
    } else {
        $PROP[19] = 0;
    }
    
    $arLoadProductArray = Array(
        "IBLOCK_ID"      => 15,
        "PROPERTY_VALUES"=> $PROP,
        "NAME"           => $_POST['mail'],
    );
    
    if($PRODUCT_ID = $el->Add($arLoadProductArray)){
        echo json_encode(array(
            'RESULT' => TRUE,
        ));
    } else {
        echo json_encode(array(
            'RESULT' => FALSE,
        ));
    }

    SendPost("https://web.inxmail.com/stage_ru/subscription/servlet", array(
        "INXMAIL_SUBSCRIPTION" => "_subscriptions_BAB_website",
        "INXMAIL_CHARSET" => "utf-8",
        "email" => $_POST['mail'],
    ));
}

$this->IncludeComponentTemplate();