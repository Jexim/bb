<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("О МЮЗИКЛЕ");
?>
<script src="/js/musical_orchestra.js"></script>
<link href="/css/musical_orchestra.css" rel="stylesheet">

<div class="musical_orchestra_wrapper"><!--Отдельный компонент-->
    <div class="musical_nav_wrapper"><!--Отдельный компонент-->

        <a href=""><img src="/images/musical_nav_wrapper_logo.png"></a>               
        <?
        $APPLICATION->IncludeComponent("bitrix:menu", "about_menu", Array(
            "ROOT_MENU_TYPE" => "about",
            "MAX_LEVEL" => "1",
            "USE_EXT" => "Y",
            "DELAY" => "N",
            "ALLOW_MULTI_SELECT" => "Y",
            "MENU_CACHE_TYPE" => "N",
            "MENU_CACHE_TIME" => "3600",
            "MENU_CACHE_USE_GROUPS" => "Y",
            "MENU_CACHE_GET_VARS" => ""
                )
        );
        ?>
    </div>

    <div class="musical_orchestra_content">
        <? $APPLICATION->IncludeComponent("bb:rs.orchestra_list", "main", Array()); ?>               
    </div>
    <? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>