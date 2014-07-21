<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<? foreach ($arResult['ITEM'] as $arItem): ?>
    <div class="theater_point">
        <div class="theater_point_img">
            <img src="<?= CFile::GetPath($arItem['DETAIL_PICTURE']) ?>">
        </div>

        <h2><?= $arItem['NAME'] ?></h2>
        <h3><?= $arItem['DETAIL_TEXT'] ?></h3>
        <div class="clear"></div>
    </div>
<? endforeach; ?>