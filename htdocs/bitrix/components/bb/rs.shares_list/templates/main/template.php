<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<script src="/js/promo_page.js"></script>
<link href="/css/promo_page.css" rel="stylesheet">

<? foreach ($arResult['ITEM'] as $arItem): ?>
    <div class="promo_one_post">
        <div class="promo_one_header">
            <img src="<?= CFile::GetPath($arItem['DETAIL_PICTURE']) ?>">
            <h2><?= $arItem['PROPERTY_DATE_VALUE'] ?></h2>
        </div>

        <div class="promo_one_text">
            <a href="<?= $arItem['DETAIL_PAGE_URL'] ?>"><h1><?= $arItem['NAME'] ?></h1></a>
            <?= $arItem['~DETAIL_TEXT'] ?>      
        </div>

        <div class="promo_one_bottom">
            <img class="promo_bottom_left" src="/images/promo_bottom_left.png">
            <img class="promo_bottom_right" src="/images/promo_bottom_right.png">
            <?= $arItem['~PREVIEW_TEXT'] ?>
        </div>
    </div>
<? endforeach; ?>