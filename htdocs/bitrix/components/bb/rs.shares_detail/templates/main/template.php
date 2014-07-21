<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<script src="/js/promo_page.js"></script>
<link href="/css/promo_page.css" rel="stylesheet">

<div class="promo_one_post">
    <div class="promo_one_header">
        <img src="<?= CFile::GetPath($arResult['ELEMENT']['DETAIL_PICTURE']) ?>">
        <h2><?= $arResult['ELEMENT']['PROPERTY_DATE_VALUE'] ?></h2>
    </div>

    <div class="promo_one_text">
        <a href="<?= $arResult['ELEMENT']['DETAIL_PAGE_URL'] ?>"><h1><?= $arResult['ELEMENT']['NAME'] ?></h1></a>
        <?= $arResult['ELEMENT']['~DETAIL_TEXT'] ?>      
    </div>

    <div class="promo_one_bottom">
        <img class="promo_bottom_left" src="/images/promo_bottom_left.png">
        <img class="promo_bottom_right" src="/images/promo_bottom_right.png">
        <?= $arResult['ELEMENT']['~PREVIEW_TEXT'] ?>
    </div>
</div>