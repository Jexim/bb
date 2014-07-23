<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<? foreach ($arResult['ITEM'] as $arItem): ?>
<div class="one_audio_block">
    <span class="audio_button">
    </span>
    <div class="audio_name_author">
        <h3>
            <p><?= $arItem['NAME'] ?> -------------------------------------------------------------------------------</p><!-- Дополняем эту строчуку сымволом -->
            <span><?= $arItem['PROPERTY_DURATION_VALUE'] ?></span>
        </h3>
        <h4>
            <?= $arItem['PROPERTY_PERFORMER_VALUE'] ?>
        </h4>
    </div>
    <audio class="curr_audio" data-src="<?= CFile::GetPath($arItem['PROPERTY_FILE_VALUE']) ?>"></audio>
    <!--<audio class="ie_audio" data-src="audio/1.mp3"></audio>-->
</div>
<? endforeach; ?>