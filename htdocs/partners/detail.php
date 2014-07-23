<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("ПАРТНЕРЫ");
?>
<link href="/css/partner_one.css" rel="stylesheet">
<script src="/js/partner_one.js"></script>

<div class="partner_one_wrapper"><!--Отдельный компонент-->
    <div class="partner_one_wrapper_in">
        <div class="musical_nav_wrapper one_partner_nav"><!--Отдельный компонент-->

            <div class="partners_nav_strucure">

                <a href=""><img src="/images/partners_nav_wrapper_logo.png"></a>

                <a href="http://www.bolshoi.ru/partners/signup/" target="_blank" class="stay_a_partner">
                    Стать партнером
                </a>

            </div>

        </div>

        <div class="partner_one_content">
            <? $APPLICATION->IncludeComponent("bb:rs.partners_detail", "main", Array()); ?>
        </div>

        <div class="content_bottom_logo">
            <img src="/images/content_bottom_logo.png">
        </div>
    </div>
</div>  
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>