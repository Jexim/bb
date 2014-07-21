<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>


<? foreach ($arResult['ITEM'] as $key => $arSection): ?>
    <h1><?= $key ?></h1>
    
        <? $i=0 ?>
        <div class="partners_one_row">
        <? foreach ($arSection as $arItem): ?>     
        <? $i++ ?>
            <div class="partners_one_point">
                <div class="partners_one_point_logo">
                    <? $pach = CFile::ResizeImageGet($arItem['DETAIL_PICTURE'], array('width'=>133, 'height'=>133), BX_RESIZE_IMAGE_PROPORTIONAL, true);   ?>
                    <img src="<?= $pach['src'] ?>">
                </div>
                <div class="partners_one_point_text">
                    <a href="<?= $arItem['DETAIL_PAGE_URL'] ?>"><?= $arItem['NAME'] ?></a>
                    <p><?= $arItem['~PREVIEW_TEXT'] ?></p>
                </div>
            </div>
            <? if($i % 3 == 0): ?>
            </div>
            <div class="partners_one_row">
            <? endif; ?>
        <? endforeach; ?>
        </div>
<? endforeach; ?>