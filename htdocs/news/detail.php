<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("НОВОСТИ");
?>

    <? $APPLICATION->IncludeComponent("bb:rs.news_detail", "main", Array()); ?>       

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>