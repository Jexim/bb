<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Красавица и Чудовище");
?>
<link href="/css/musical_story.css" rel="stylesheet">
<div class="musical_story_wrapper" id="two_slide"><!--Отдельный компонент-->

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

    <div class="musical_story_content">

        <?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
            "AREA_FILE_SHOW" => "file",
            "PATH" => "/about/story/text.php",
            "EDIT_TEMPLATE" => ""
            ),
            false
         );?>

    </div>


</div>



<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>