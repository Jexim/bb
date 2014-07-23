<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("АКЦИИ");
?>

<div class="promo_page_wrapper"><!--Отдельный компонент-->
    <div class="promo_page_wrapper_in">
        <div class="musical_nav_wrapper"><!--Отдельный компонент-->
            <a href=""><img src="/images/promo_nav_wrapper_logo.png"></a>
        </div>

        <div class="promo_page_content">
            <? $APPLICATION->IncludeComponent("bb:rs.shares_detail", "main", Array()); ?>
        </div>
    </div>
</div>    
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>