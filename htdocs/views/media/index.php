<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("МНЕНИЯ");
?>

<link href="/css/opinion.css" rel="stylesheet">
<script src="/js/opinion.js"></script>

<div class="opinion_wrapper"><!--Отдельный компонент-->
    <div class="opinion_wrapper_in">
        <div class="musical_nav_wrapper"><!--Отдельный компонент-->
            <a href=""><img src="/images/opinion_nav_wrapper_logo.png"></a>
            <div class="musical_nav_menu">
                <a <? if ($_SERVER['REQUEST_URI'] == '/views/media/'): ?>class="musical_nav_menu_active"<? endif; ?>>Мнение СМИ</a>
                <br>
                <a href="/views/" <? if ($_SERVER['REQUEST_URI'] == '/views/'): ?>class="musical_nav_menu_active"<? endif; ?>>Отзывы гостей</a>
            </div>
        </div>
        <div class="opinion_content">
            <? $APPLICATION->IncludeComponent("bb:rs.views_media_list", "main", Array()); ?>
        </div>

        <div class="content_bottom_logo">
            <img src="/images/content_bottom_logo.png">
        </div>
    </div>
</div>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>