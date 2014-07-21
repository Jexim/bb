<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<div class="musical_nav_wrapper"><!--Отдельный компонент-->

    <a href=""><img src="/images/news_nav_wrapper_logo.png"></a>
    <div class="musical_nav_menu">
        <? foreach ($arResult['YEAR'] as $key => $value): ?>
            <a href="<?= $value ?>" <? if ($_SERVER['REQUEST_URI'] == $value): ?>class="musical_nav_menu_active"<? endif; ?>><?= $key ?></a>
        <? endforeach; ?>
    </div>

</div>

<div class="news_content">
    <? foreach ($arResult['ITEM'] as $arItem): ?>
        <div class="news_content_one">
            <div class="news_content_one_top">
                <img src="/images/news_one_top_img/1.png">
                <!--<h2><?= $arItem['PROPERTY_DATE_VALUE'] ?></h2>-->
                <? setlocale(LC_ALL, 'ru_RU.UTF-8'); //Переводим дату в русскую локацию ?>
                <h3><?= strftime("%e %h %Y", strtotime($arItem['DATE_ACTIVE_FROM'])) ?></h3>
            </div>
            <div class="news_content_one_bottom">
                <h1><?= $arItem['NAME'] ?></h1>
                <?= $arItem['PREVIEW_TEXT'] ?>
                <div class="news_bottom_logo">
                    <img src="/images/news_bottom_logo.png">
                    <br> 
                    <a href="<?= $arItem['DETAIL_PAGE_URL'] ?>"><?= $arItem['PROPERTY_MORE_VALUE'] ?></a>
                </div>
            </div>
        </div>
    <? endforeach; ?>
</div>