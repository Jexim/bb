<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)): ?>

    <div class="musical_nav_menu">
        <? foreach ($arResult as $arItem): ?>
        <a <? if($arItem['SELECTED']): ?>class="musical_nav_menu_active"<? else: ?> href="<?=$arItem['LINK']?>"<? endif; ?>><?=$arItem['TEXT']?></a>
        <? endforeach; ?>
    </div>
<? endif; ?>