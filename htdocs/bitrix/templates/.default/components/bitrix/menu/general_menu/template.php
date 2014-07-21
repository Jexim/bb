<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)): ?>
    <?$i==0?>
        <div class="header_wrapper_nav">
    <? foreach ($arResult as $arItem): ?>
        <? $i++ ?>
        <? if($i<count($arResult)): ?>
            <a <? if($arItem['SELECTED']): ?>class="active"<? else: ?> href="<?=$arItem['LINK']?>"<? endif; ?>><?=$arItem['TEXT']?></a>
        <? else: ?>
            </div>
            <div class="tickets_block">
                <a <? if($arItem['SELECTED']): ?>class="active"<? else: ?> href="<?=$arItem['LINK']?>"<? endif; ?>>
                    <?=$arItem['TEXT']?>
                </a>
            </div>
        <? endif; ?>
    <? endforeach; ?>

<? endif; ?>