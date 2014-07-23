<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <title><? $APPLICATION->ShowTitle() ?></title>
        <? $APPLICATION->ShowHead(); ?>

        <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

        <script src="/js/easy.js"></script>
        <script src="/js/default.js"></script>
        <script src="/js/start_page.js"></script>
        <script src="/js/header.js"></script>
        <script src="/js/musical_nav.js"></script>
        <script src="/js/musical_story.js"></script>
        <script src="/js/share.js"></script>
        <script src="/js/setSub.js"></script>

        <link href="/css/font.css" rel="stylesheet">
        <link href="/css/default.css" rel="stylesheet">
        <link href="/css/start_page.css" rel="stylesheet">
        <link href="/css/header.css" rel="stylesheet">
        <link href="/css/musical_nav.css" rel="stylesheet">
        <link href="/css/musical_story.css" rel="stylesheet">
        <link href="/css/footer.css" rel="stylesheet">

    </head>

    <body>
        <div id="panel">
            <? $APPLICATION->ShowPanel(); ?>
        </div>
        <div class="wrapper">

            <div class="start_page_wrapper"><!--Отдельный компонент-->
                <div class="start_page_wrapper_in">
                    <div class="social_and_contakts">
                        <div class="social_and_contakts_in">
                            <a class="contakts_info">
                                <img src="/images/contakts_info_logo.png">
                                <span>Контактная информация</span>
                            </a>

                            <div class="share_and_describe">
                                <a class="share">
                                    <span class="ico"></span>
                                    <span>
                                        Рассказать
                                    </span>
                                </a>
                                <a class="describe">
                                    Подписаться
                                </a>

                            </div>

                            <div class="social_links_block">
                                <a class="vk" href="" onclick="Share.vkontakte('http://bb.dev.rocketstudio.ru/', 'Билеты на мюзикл КРАСАВИЦА И ЧУДОВИЩЕ', 'http://bb.dev.rocketstudio.ru/images/soc_img.jpeg', 'Мюзикл КРАСАВИЦА И ЧУДОВИЩЕ снова в Москве. Лучшие билеты по тел. 788 46 46.  С 18 октября 2014 года.')">

                                </a>
                                <a class="od" href="" onclick="Share.odnoklassniki('http://bb.dev.rocketstudio.ru/', 'Мюзикл КРАСАВИЦА И ЧУДОВИЩЕ снова в Москве. Лучшие билеты по тел. 788 46 46.  С 18 октября 2014 года.')">

                                </a>
                                <a class="tw" href="" onclick="Share.twitter('http://bb.dev.rocketstudio.ru/', 'Мюзикл КРАСАВИЦА И ЧУДОВИЩЕ снова в Москве. Лучшие билеты по тел. 788 46 46.  С 18 октября 2014 года.')">

                                </a>
                                <a class="fb" href="" onclick="Share.facebook('http://bb.dev.rocketstudio.ru/', 'Билеты на мюзикл КРАСАВИЦА И ЧУДОВИЩЕ', 'http://bb.dev.rocketstudio.ru/images/soc_img.jpeg', 'Самая долгожданная премьера десятилетия – Мюзикл «Призрак Оперы» Эндрю Ллойд-Уэббера! Уже этой осенью, в театре МДМ')">

                                </a>
                            </div>

                        </div>
                    </div>

                    <div class="menu_home">
                        <div class="menu_home_in">
                            <div class="left_part_menu">
                                <a class="active">
                                    <span>О МЮЗИКЛЕ</span>
                                </a>
                                <a href="/shares/">
                                    <span>АКЦИИ</span>
                                </a>
                                <a href="/news/">
                                    <span>НОВОСТИ</span>
                                </a>

                            </div>
                            <div class="right_part_menu">
                                <a class="tickets_link_home" href="/views/">
                                    <span>МНЕНИЯ</span> 
                                </a>
                                <a class="tickets_link_home" href="/partners/">
                                    <span>ПАРТНЕРЫ</span> 
                                </a>
                                <a class="tickets_link_home" href="/tickets/">
                                    <span>БИЛЕТЫ</span> 
                                    <img src="/images/menu_hover_bg.png">
                                </a>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>




                    <a class="logo_home" href=""><img src="images/logo_home.png"></a>

                    <p class="home_sub_title">
                        Любовь и волшебство<br>
                        возвращаются в  Москву
                    </p>

                    <div class="home_bottom_effect">
                        <a href="#two_slide"><img src="/images/home_bottom_effect.png"></a>
                    </div>
                </div>
            </div>

            <div class="header_wrapper" id="two_slide"><!--Отдельный компонент-->
                <div class="header_wrapper_in">
                    <div class="social_and_contakts social_and_contakts_inside">
                        <div class="social_and_contakts_in">
                            <a class="contakts_info">
                                <img src="/images/contakts_info_logo.png">
                                <span>Контактная информация</span>
                            </a>

                            <div class="share_and_describe">
                                <a class="share">
                                    <span class="ico"></span>
                                    <span>
                                        Рассказать
                                    </span>
                                </a>
                                <a class="describe">
                                    Подписаться
                                </a>

                            </div>

                            <div class="social_links_block">
                                <a class="vk" href="" onclick="Share.vkontakte('http://bb.dev.rocketstudio.ru/', 'Билеты на мюзикл КРАСАВИЦА И ЧУДОВИЩЕ', 'http://bb.dev.rocketstudio.ru/images/soc_img.jpeg', 'Мюзикл КРАСАВИЦА И ЧУДОВИЩЕ снова в Москве. Лучшие билеты по тел. 788 46 46.  С 18 октября 2014 года.')">

                                </a>
                                <a class="od" href="" onclick="Share.odnoklassniki('http://bb.dev.rocketstudio.ru/', 'Мюзикл КРАСАВИЦА И ЧУДОВИЩЕ снова в Москве. Лучшие билеты по тел. 788 46 46.  С 18 октября 2014 года.')">

                                </a>
                                <a class="tw" href="" onclick="Share.twitter('http://bb.dev.rocketstudio.ru/', 'Мюзикл КРАСАВИЦА И ЧУДОВИЩЕ снова в Москве. Лучшие билеты по тел. 788 46 46.  С 18 октября 2014 года.')">

                                </a>
                                <a class="fb" href="" onclick="Share.facebook('http://bb.dev.rocketstudio.ru/', 'Билеты на мюзикл КРАСАВИЦА И ЧУДОВИЩЕ', 'http://bb.dev.rocketstudio.ru/images/soc_img.jpeg', 'Самая долгожданная премьера десятилетия – Мюзикл «Призрак Оперы» Эндрю Ллойд-Уэббера! Уже этой осенью, в театре МДМ')">

                                </a>
                            </div>

                        </div>
                    </div>


                    <a href="" class="header_wrapper_logo"><img src="/images/header_wrapper_logo.png"></a>

                    <div class="kontakts_info_block">
                        <a class="close_kontakts_info"></a>

                        <div class="phones_and_address">

                            <div class="left_address">

                                <div class="left_address_in">

                                    <span>
                                        Телефон для справок <br>
                                        +7 495 788 4646
                                    </span>

                                    <span>
                                        Телефон для справок <br>
                                        +7 495 788 4646
                                    </span>

                                </div>

                            </div>

                            <div class="right_address">

                                <div class="phones_and_address_img">
                                    <img src="images/phones_and_address.png">
                                </div>

                                <div class="right_address_in">

                                    <span>
                                        <h2>Театр Россия</h2>
                                        Пушкинская площадь, 2 <br>
                                        м. Тверская, Пушкинская, Чеховская
                                    </span>

                                    <span>
                                        Постановщик <br>
                                        Stage Entertainment
                                    </span>

                                </div>


                            </div>


                            <div class="clear"></div>
                        </div>

                        <h3 class="central_phone">
                            Телефон центрального офиса в Москве: <br>
                            <span>+7 495 780 35 53</span>
                        </h3>

                        <div class="for_type_partner">

                            <div>

                                <h3>По вопросам рекламы:</h3>

                                <p>
                                    Владимир Касымов, Ведущий менеджер <br>
                                    департамента маркетинга <br>
                                    Reklama@stage-enteraiment.ru
                                </p>

                            </div>

                            <div>

                                <h3>Для прессы:</h3>

                                <p>
                                    Светлана Водяная, PR-директор <br>
                                    Svetlana.Voyanaya@stage-enteraiment.ru
                                </p>

                                <p>
                                    Маргарита Котова, PR-менеджер
                                    Margarita.Kotova@stage-entertainment.ru
                                </p>

                            </div>

                            <div>

                                <h3>Сотрудничество и партнерство:</h3>

                                <p>
                                    Дмитрий Филиппов, менеджер по работе <br>
                                    с партнерами и спонсорами <br>
                                    Dmitry.Filippov@stage-entertainment.ru
                                </p>

                            </div>

                        </div>


                    </div>

                    <div class="describe_block">
                        <a class="close_kontakts_info"></a>


                        <form class="form_describe">

                            <p>
                                Подпишитесь и получайте свежие <br>
                                новости о наших мюзиклах
                            </p>

                            <input placeholder="Ваш e-mail адрес" type="text">
                            <input value="Отправить" type="button">

                            <label>
                                <input type="checkbox">
                                <span></span>
                            </label>

                            <p>
                                Получать информацию о мюзиклах <br>
                                компании Stage Entertainment
                            </p>

                        </form>

                    </div>

                    <div class="header_wrapper_nav">
                        <a class="active">О МЮЗИКЛЕ</a>
                        <a href="/shares/">АКЦИИ</a>
                        <a href="/news/">НОВОСТИ</a>
                        <a href="/views/">МНЕНИЯ</a>
                        <a href="/partners/">ПАРТНЕРЫ</a>
                    </div>
                    <div class="tickets_block">
                        <a href="/tickets/">БИЛЕТЫ</a>
                    </div>
                </div>
            </div>