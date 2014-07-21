<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<? foreach ($arResult['ITEM'] as $arItem): ?>
    <div class="musical_orchestra_one">
        <div class="musical_orchestra_one_left">
            <p>
                <?= $arItem['NAME'] ?>
            </p>
        </div>
        <div class="musical_orchestra_one_right">
            <p>
                <?= $arItem['DETAIL_TEXT'] ?>
            </p>
        </div>

        <div class="clear"></div>
    </div>
<? endforeach; ?>