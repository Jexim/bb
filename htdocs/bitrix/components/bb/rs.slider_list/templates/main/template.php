<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<div class="foto_carousel_block"><!-- каруселька -->

    <div class="mycont">

        <ul class="mycarousel">
            <? foreach ($arResult['ITEM'] as $key => $arItem): ?>
                <li data-id="<?= $key + 1 ?>" class="foto_carousel_current">
                    <img src="<?= CFile::GetPath($arItem['DETAIL_PICTURE']) ?>">
                </li>
            <? endforeach; ?>                        
        </ul>

    </div>

</div>

<div class="big_foto_from_carousel">

    <img src="<?= CFile::GetPath($arResult['ITEM'][0]['DETAIL_PICTURE']) ?>">

</div>