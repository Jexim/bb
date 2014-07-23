<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("ПАРТНЕРЫ");
?>
<link href="/css/partners.css" rel="stylesheet">
<script src="/js/partners.js"></script>

<div class="partners_wrapper"><!--Отдельный компонент-->
    <div class="partners_wrapper_in">
        <div class="musical_nav_wrapper"><!--Отдельный компонент-->
            <div class="partners_nav_strucure">
                <a href=""><img src="/images/partners_nav_wrapper_logo.png"></a>
                <a href="http://www.bolshoi.ru/partners/signup/" target="_blank" class="stay_a_partner">
                    Стать партнером
                </a>
            </div>
        </div>
        <div class="partners_content">
            <? $APPLICATION->IncludeComponent("bb:rs.partners_list", "main", Array()); ?>
        </div>
    </div>
</div>    
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>