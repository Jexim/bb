<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<img src="<?= CFile::GetPath($arResult['ELEMENT']['DETAIL_PICTURE']) ?>">

<h1><?= $arResult['ELEMENT']['NAME'] ?></h1>
<?= $arResult['ELEMENT']['~DETAIL_TEXT'] ?>