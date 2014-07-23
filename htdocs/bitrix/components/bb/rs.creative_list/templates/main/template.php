<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<script src="/js/musical_actors.js"></script>
<link href="/css/musical_actors.css" rel="stylesheet">
<? foreach ($arResult['ITEM'] as $arItem): ?>
    <div class="musical_actor_link">
        <a href="<?= $arItem['DETAIL_PAGE_URL'] ?>">
        <div class="actor_link_foto">
            <? $pach = CFile::ResizeImageGet($arItem['DETAIL_PICTURE'], array('width' => 88, 'height' => 88), BX_RESIZE_IMAGE_PROPORTIONAL, true); ?>
            <span style="background: url('<?= $pach['src'] ?>')"></span>
        </div>
        <div class="actor_link_text">          
            <h3><?= $arItem['NAME'] ?></h3>
            <p><?= $arItem['PROPERTY_ROLE_VALUE'] ?></p>
            <span>
                <?= $arItem['~PREVIEW_TEXT'] ?>
            </span>
        </div>

        <div class="clear"></div>
        </a>
    </div>
<? endforeach; ?>