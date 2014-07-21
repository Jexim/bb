<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("БИЛЕТЫ");
?>
<link href="/css/buy_tickets.css" rel="stylesheet">
<script src="/js/buy_tickets.js"></script>

<div class="buy_tickets_wrapper"><!--Отдельный компонент-->

    <div class="musical_nav_wrapper"><!--Отдельный компонент-->

        <a href=""><img src="/images/tickets_nav_wrapper_logo.png"></a>

        <div class="musical_nav_menu">
            <a href="#online">Заказ онлайн</a>
            <a href="#office">Билетные кассы</a>
            <a href="#partners">Групповые заказы</a>
        </div>

    </div>

    <div class="buy_tickets_content">
        <a name="online">
            <h1>Онлайн</h1>

            <div class="block_for_buy_frame"><!-- блок для вставки фрейма заказа билетов -->
                <iframe src="http://www.parter.ru/tickets.html?affiliate=SEF&fun=erdetail&doc=erdetaila&calendarOverview=view&erid=1141887" width="909" height="629" align="left"></iframe>
            </div>
        </a>
        <a name="office">
            <div class="one_text_block_tickets">

                <img src="/images/news_one_text_bottom_2.png">

                <h2>Билетные кассы</h2>

                <h3>Предпочитаете традиционный способ покупки билетов?</h3>

                <span class="working_time">
                    Наши кассы работают ежедневно <br>
                    с 09:00 до 21:00 без выходных
                </span>
                <? $APPLICATION->IncludeComponent("bb:rs.ticket_office_list", "main", Array()); ?>           

            </div>
        </a>
        <a name="partners">
            <? $APPLICATION->IncludeComponent("bb:rs.partners_tickets_list", "main", Array()); ?>
        </a>
    </div>

</div>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>