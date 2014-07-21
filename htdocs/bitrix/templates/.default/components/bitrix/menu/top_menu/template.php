<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?if (!empty($arResult)): ?>
    <?$i==0?>
    <div class="menu_home_in">
    <? foreach ($arResult as $arItem): ?>
        <? $i++ ?>
        <? if($i == 1): ?>
            <div class="left_part_menu">
        <? endif; ?>
        <? if($i<4): ?>
            <a href="<?=$arItem['LINK']?>">
                <span><?=$arItem['TEXT']?></span>
            </a>
        <? endif; ?>
        <? if($i == 4): ?>   
            </div>
            <div class="right_part_menu">
        <? endif; ?>
        <? if($i>=4): ?>
            <a class="tickets_link_home" href="<?=$arItem['LINK']?>">
                <span><?=$arItem['TEXT']?></span> 
                <? if($i==count($arResult)): ?>
                <img src="/images/menu_hover_bg.png">
                <? endif; ?>
            </a>
        <? endif; ?>
    <? endforeach; ?>
                </div>
        <div class="clear"></div>
    </div>



	
<? endif; ?>