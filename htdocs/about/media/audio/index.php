<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("О МЮЗИКЛЕ");
?>
<link href="/css/musical_media.css" rel="stylesheet">
<script src="/js/musical_media.js"></script>
<script src="/js/jquery.jcarousel.min.js"></script>
<div class="musical_media_wrapper"><!--Отдельный компонент-->

    <div class="musical_media_wrapper_in">

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

        <div class="musical_media_content">

            <div class="media_nav_block">

                <a href="/about/media/">
                    <span>Фото</span>
                </a>

                <a href="/about/media/video/">
                    <span>Видео</span>
                </a>

                <a class="media_curr_page">
                    <span>Аудио</span>
                </a>

                <div class="clear"></div>
            </div>

            <div class="audio_files_block">

                <? $APPLICATION->IncludeComponent("bb:rs.audio_list", "main", Array()); ?>

            </div>

        </div>

    </div>


    <div class="content_bottom_logo">
        <img src="/images/content_bottom_logo.png">
    </div>

</div>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>