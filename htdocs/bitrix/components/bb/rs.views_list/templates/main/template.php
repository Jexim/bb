<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<? $i=0; ?>
<? foreach ($arResult['ITEM'] as $arItem): ?>
    <? $i++; ?>
    <? if($i % 2 == 0): ?>
    <div class="opinion_one_block right_text_opinion"><!-- блок с текстом в правой части -->
        <div class="opinion_one_block_in_left">
            <div class="opinion_left">
            </div>
        </div>
        <div class="opinion_one_block_in_right">
            <div class="opinion_center">
                <span class="right_text_opinion_border">
                    <span>
                        <img src="<?= CFile::GetPath($arItem['DETAIL_PICTURE']) ?>">
                    </span>
                </span>
            </div>
            <div class="opinion_right">
                <h1><?= $arItem['NAME'] ?></h1>
                <p><?= $arItem['DETAIL_TEXT'] ?></p>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <? else: ?>
        <div class="opinion_one_block right_text_opinion"><!-- блок с текстом в левой части -->

            <div class="opinion_one_block_in_left">

                <div class="opinion_left">

                    <h1><?= $arItem['NAME'] ?></h1>
                    <p><?= $arItem['DETAIL_TEXT'] ?></p>

                </div>

            </div>

            <div class="opinion_one_block_in_right">

                <div class="opinion_center">

                    <span class="left_text_opinion_border">

                        <span>
                            <img src="<?= CFile::GetPath($arItem['DETAIL_PICTURE']) ?>">
                        </span>

                    </span>

                </div>

                <div class="opinion_right">

                </div>

            </div>

            <div class="clear"></div>
        </div>
    <? endif; ?>
<? endforeach; ?>