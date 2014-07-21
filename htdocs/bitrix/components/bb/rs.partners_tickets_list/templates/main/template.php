<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<div class="one_text_block_tickets">
    <img src="/images/news_one_text_bottom_2.png">
    <h2>Групповые заказы</h2>
</div>
<div class="one_text_block_tickets musical_nav_menu">
    
    <? foreach ($arResult['SECTION'] as $key => $arSection): ?>
        <a class="buy_tickets_button buy_tickets_button_<?= $arSection['ID'] ?>" group_tickets="<?= $arSection['ID'] ?>"><?= $arSection['NAME'] ?></a>
    <? endforeach; ?>
</div>

<div class="buy_tickets_all">
    <? foreach ($arResult['SECTION'] as $key => $arSection): ?>
        <div class="buy_tickets_l buy_tickets_<?= $key ?>">
            <div class="one_text_block_tickets">
                <?= $arSection['~DESCRIPTION'] ?>
            </div>

            <div class="buy_tickets_partners">
                <? if (!empty($arResult['ITEM'][$arSection['ID']])): ?>
                    <h2>Наши партнеры</h2>
                    <div class="buy_tickets_partners_row">
                        <? $i == 0 ?>
                        <? foreach ($arResult['ITEM'][$arSection['ID']] as $arItem): ?> 
                            <? $i++ ?>
                            <? if ($i % 3 == 0): ?>
                            </div>
                            <div class="buy_tickets_partners_row">   
                            <? endif; ?>
                            <div class="buy_tickets_one_partner">

                                <div class="buy_one_partner_logo">
                                    <? $pach = CFile::ResizeImageGet($arItem['DETAIL_PICTURE'], array('width' => 133, 'height' => 133), BX_RESIZE_IMAGE_PROPORTIONAL, true); ?>
                                    <img src="<?= $pach['src'] ?>">
                                </div>

                                <div class="buy_one_partner_text">
                                    <a href="<?= $arItem['DETAIL_PAGE_URL'] ?>"><?= $arItem['NAME'] ?></a>
                                    <p><?= $arItem['~PREVIEW_TEXT'] ?></p>
                                </div>

                            </div>
                        <? endforeach; ?>
                    </div>
                <? endif; ?>
                <h3>
                    За дополнительной информацией и по всем интересующим вопросам, пожалуйста, обращайтесь
                    к менеджеру по работе с туристическими агентствами Татьяне Собко:
                </h3>
                <p>
                    тел. +7 (495) 780 35 54 доб. 2045
                </p>
                <p>
                    факс: + 7 (495) 411 71 37
                </p>
            </div>         
        </div>
    <? endforeach; ?>
</div>