<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Красавица и Чудовище");
?>
<link href="/css/musical_story.css" rel="stylesheet">
<div class="musical_story_wrapper" id="two_slide"><!--Отдельный компонент-->
    <div class="musical_story_wrapper_in">
    <div class="musical_nav_wrapper"><!--Отдельный компонент-->

        <a href=""><img src="/images/musical_nav_wrapper_logo.png"></a>

        <div class="musical_nav_menu">
            <a class="musical_nav_menu_active">Сюжет</a>
            <a href="/about/history/">История успеха</a>
            <a href="/about/troupe/">Труппа</a>
            <a href="/about/creative/">Творческая группа</a>
            <a href="/about/orchestra/">Оркестр</a>
            <a href="/about/media/">Медиа</a>
        </div>

    </div>

    <div class="musical_story_content">

        <?
        $APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
            "AREA_FILE_SHOW" => "file",
            "PATH" => "/about/story/text.php",
            "EDIT_TEMPLATE" => ""
                ), false
        );
        ?>
        <div class="content_bottom_logo">
            <img src="/images/content_bottom_logo.png">
        </div>
    </div>

    </div>
</div>



<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>