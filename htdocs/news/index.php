<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("НОВОСТИ");
?>
<script src="/js/news.js"></script>
<link href="/css/news.css" rel="stylesheet">

<div class="news_wrapper"><!--Отдельный компонент-->
    <? $APPLICATION->IncludeComponent("bb:rs.news_list", "main", Array()); ?>                     
</div>
    <? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>