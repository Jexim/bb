<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("НОВОСТИ");
?>
<script src="/js/news.js"></script>
<link href="/css/news.css" rel="stylesheet">

<div class="news_wrapper"><!--Отдельный компонент-->
    <div class="news_wrapper_in">
        <? $APPLICATION->IncludeComponent("bb:rs.news_list", "main", Array('YEAR' => 2015)); ?>   
    </div>
</div>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>