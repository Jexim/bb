<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<script src="/js/musical_actor_one.js"></script>
<link href="/css/musical_actor_one.css" rel="stylesheet">

<div class="one_actor_photo">
    <span style="background: url(<?= CFile::GetPath($arResult['ELEMENT']['DETAIL_PICTURE']) ?>);"></span>
</div>

<h1><?= $arResult['ELEMENT']['NAME'] ?></h1>
<p><?= $arResult['ELEMENT']['PROPERTY_ROLE_VALUE'] ?></p>

<div class="musical_actor_one_text">
    <?= $arResult['ELEMENT']['DETAIL_TEXT'] ?>
</div>