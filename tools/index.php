<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="keywords"
          content="анализ сайта, инструменты вебмастера, позиции сайта, оптимизация, проверка домена, продвижение сайтов, анализ контента, whois, pagerang, ТиЦ, cy, проверка pr, вебмастеру, бесплатно, раскрутка, статьи, webmaster, утилиты, сайт, раскрутка сайта"/>

    <?php require_once __DIR__ . '/../assets/library/ToolsLibrary.php' ?>

    <title>Анализ сайта - Инструменты - Инструменты для вебмастера и оптимизатора, анализ сайта, проверка ТиЦ и
        PR</title>
</head>
<body>

<div class="container result-page">
    <div class="row result-logo">
        <div class="col-xs-12">
            <a href="/">
                <img src="../assets/imgs/logo.png" width="100%" style="max-width: 226px" alt="Гвоздь">
            </a>
        </div>
    </div>
</div>


<div class="container result-page">
    <form action="<?php $_SERVER['SCRIPT_NAME'] ?>" method="POST">
        <div class="row">
            <div class="search-container col-md-12">
                <div class="row">
                    <div class="col-xs-9">
                        <input type="text" class="search-input" name="url"
                               placeholder="Введите домен сайта, например: vk.com">
                    </div>
                    <div class="col-xs-3" style="position: relative;">
                        <button class="search-btn" name="analys">Анализ</button>
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" value="do" name="doactiontool">
    </form>
</div>

<div class="container result-page">
    <h1>Анализ сайта <span><?php print $link ?></span></h1>

    <div class="row row-results">
        <div class="col-md-5">
            <?php print $test = "<img src=\"http://mini.site-shot.com/1024x768/360/jpeg/?$link\" width=\"300\" height=\"270\" alt=\"Скрин сайта\">" ?>
        </div>
        <div class="col-md-7">
            <h3>
                Проверено <b>более 26</b> пунктов, из них:
            </h3>
            <div class="row">
                <div class="col-sm-4">
                    <div class="row result-errors">
                        <div class="col-xs-4 text-center result-img">
                            <img src="../assets/imgs/analysis_error.png" width="100%" style="max-width: 54px;"
                                 alt="Ошибки">
                        </div>
                        <div class="col-xs-8">
                            <h3>
                                <?php print $red ?>
                            </h3>
                            <strong>
                                ошибки
                            </strong>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row result-warnings">
                        <div class="col-xs-4 text-center result-img">
                            <img src="../assets/imgs/analysis_rec.png" width="100%" style="max-width: 54px;"
                                 alt="Ошибки">
                        </div>
                        <div class="col-xs-8">
                            <h3>
                                <?php print $yellow ?>
                            </h3>
                            <strong>
                                рекомендаций
                            </strong>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="row result-success">
                        <div class="col-xs-4 text-center result-img">
                            <img src="../assets/imgs/analysis_success.png" width="100%" style="max-width: 54px;"
                                 alt="Ошибки">
                        </div>
                        <div class="col-xs-8">
                            <h3>
                                <?php print $green ?>
                            </h3>
                            <strong>
                                без ошибок
                            </strong>
                        </div>
                    </div>
                </div>
            </div>

            <h2>
                <a href="#">Заказать консультацию</a><br><br>
                Заказав консультацию вы сможете разобраться в чем проблема вашего сайта, а так же понять пути его
                развития
            </h2>

        </div>
    </div>


    <!--ENTER INFO-->
    <div class="row result-group">
        <h3>Вводные данные</h3>


        <!--YANDEX_CY-->
        <div class="result-item">
            <div class="result-item-short">
                <div class="row">
                    <div class="col-xs-1">
                        <?php

                        if (trim($checkYandexTic) == 'fail' || trim($checkYandexTic) == 'info') {
                            print "<img src=\"../assets/imgs/$redImg\" width=\"100%\" style=\"max-width: 30px;\" alt=\"state\">";
                        } else {
                            print "<img src=\"../assets/imgs/$greenImg\" width=\"100%\" style=\"max-width: 30px;\" alt=\"state\">";
                        }

                        ?>
                    </div>
                    <div class="col-xs-5 result-item-name">
                        Яндекс тиц
                    </div>
                    <div class="col-xs-5 text-right result-item-val">
                        <?php print $yandexTic ?>
                    </div>
                    <div class="col-xs-1 text-right">
                        <a href="javascript:void(0);" class="result-item-more">
                            <i class="fa fa-angle-down fa-2x"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="result-item-full" id="tic">
                <div class="row">
                    <div class="col-xs-offset-1 col-xs-10 result-item-full-content">
                        <?php print $yandexTicDesk ?>
                    </div>
                </div>
            </div>
        </div>


        <!--YANDEX_PAGE-->
        <div class="result-item">
            <div class="result-item-short">
                <div class="row">
                    <div class="col-xs-1">
                        <?php
                        if ($yandexPageRed != '') {
                            print "<img src=\"../assets/imgs/$redImg\" width=\"100%\" style=\"max-width: 30px;\" alt=\"state\">";
                        } else {
                            print "<img src=\"../assets/imgs/$greenImg\" width=\"100%\" style=\"max-width: 30px;\" alt=\"state\">";
                        }
                        ?>
                    </div>
                    <div class="col-xs-5 result-item-name">
                        Страниц в яндекс
                    </div>
                    <div class="col-xs-5 text-right result-item-val">
                        <?php print $yandexPageDesk ?>
                    </div>
                    <div class="col-xs-1 text-right">
                        <a href="javascript:void(0);" class="result-item-more">
                            <i class="fa fa-angle-down fa-2x"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="result-item-full" id="page">
                <div class="row">
                    <div class="col-xs-offset-1 col-xs-10 result-item-full-content">
                        <?php
                        if ($yandexPageRed != '') {
                            print 'Вам нужно оптимизировать страницу ';
                            print '<span style="color: red">' . $yandexPageRed . '</span>';
                        } else {
                            print 'У вас нормальные показатели';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>


        <!--GOOGLE_PAGES-->
        <div class="result-item">
            <div class="result-item-short">
                <div class="row">
                    <div class="col-xs-1">
                        <?php
                        if ($googlePageRed != '') {
                            print "<img src=\"../assets/imgs/$redImg\" width=\"100%\" style=\"max-width: 30px;\" alt=\"state\">";
                        } else {
                            print "<img src=\"../assets/imgs/$greenImg\" width=\"100%\" style=\"max-width: 30px;\" alt=\"state\">";
                        }
                        ?>
                    </div>
                    <div class="col-xs-5 result-item-name">
                        Страниц в Google
                    </div>
                    <div class="col-xs-5 text-right result-item-val">
                        <td class="sth1" valign="center" align="left" style="padding-left: 8px">
                            <?php print $googlePageDesk ?>
                    </div>
                    <div class="col-xs-1 text-right">
                        <a href="javascript:void(0);" class="result-item-more">
                            <i class="fa fa-angle-down fa-2x"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="result-item-full" id="google">
                <div class="row">
                    <div class="col-xs-offset-1 col-xs-10 result-item-full-content">
                        <?php if ($googlePageRed != '') {
                            print 'Вам нужно оптимизировать страницу ';
                            print '<span style="color: red">' . $googlePageRed . '</span>';
                        } else {
                            print 'У вас нормальные показатели';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <!--YANDEX_RANK-->
        <div class="result-item">
            <div class="result-item-short">
                <div class="row">
                    <div class="col-xs-1">

                        <?php

                        if (trim($yandexRank) == '6 из 6' || trim($yandexRank) == '5 из 6') {
                            print "<img src=\"../assets/imgs/$greenImg\" width=\"100%\" style=\"max-width: 30px;\" alt=\"state\">";
                        } elseif (trim($yandexRank) == '4 из 6' || trim($yandexRank) == '3 из 6') {
                            print "<img src=\"../assets/imgs/$yellowImg\" width=\"100%\" style=\"max-width: 30px;\" alt=\"state\">";
                        } else {
                            print "<img src=\"../assets/imgs/$redImg\" width=\"100%\" style=\"max-width: 30px;\" alt=\"state\">";
                        }


                        ?>
                    </div>
                    <div class="col-xs-5 result-item-name">
                        Яндекс Rank
                    </div>
                    <div class="col-xs-5 text-right result-item-val">
                        <?php print $yandexRank ?>
                    </div>
                    <div class="col-xs-1 text-right">
                        <a href="javascript:void(0);" class="result-item-more">
                            <i class="fa fa-angle-down fa-2x"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="result-item-full" id="rank">
                <div class="row">
                    <div class="col-xs-offset-1 col-xs-10 result-item-full-content">
                        <?php print $yandexRankDesk ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--/GROUP-->


    <!--ENTER INFO-->
    <div class="row result-group pushing-top">
        <h3>Техническая оптимизация</h3>

        <!--INTERNAL_LINKS-->
        <div class="result-item">
            <div class="result-item-short">
                <div class="row">
                    <div class="col-xs-1">

                        <?php

                        if (
                            trim($checkViewScrin) == 'fail'
                            ||
                            trim($checkViewPort) == 'fail'
                            ||
                            trim($checksizeElement) == 'fail'
                            ||
                            trim($checksizeWord) == 'fail'
                            ||
                            trim($checkPlugins) == 'fail'
                            ||
                            trim($checkFlowWindow) == 'fail'
                        ) {
                            print "<img src=\"../assets/imgs/$yellowImg\" width=\"100%\" style=\"max-width: 30px;\" alt=\"state\">";
                        } else {
                            print "<img src=\"../assets/imgs/$greenImg\" width=\"100%\" style=\"max-width: 30px;\" alt=\"state\">";
                        }

                        ?>

                    </div>
                    <div class="col-xs-5 result-item-name">
                        Мобильность
                    </div>
                    <div class="col-xs-5 text-right result-item-val">
                    </div>
                    <div class="col-xs-1 text-right">
                        <a href="javascript:void(0);" class="result-item-more">
                            <i class="fa fa-angle-down fa-2x"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="result-item-full" id="mobile">
                <div class="row">
                    <div class="col-xs-offset-1 col-xs-10 result-item-full-content">

                        <?php

                        print $toView . ': ';
                        print '<b>' . $toDesk . '</b><br><br>';

                        ?>

                        Скриншот с сайта на
                        смартфоне: <?php print "<img src=\"http://mini.site-shot.com/480x360/360/jpeg/?$link\" width=\"250\" height=\"200\" alt=\"Скрин сайта\" style=\"border: 1px solid #ccc;\">" . '<br><br>' ?>

                        <?php

                        print $viewPort . ': ';
                        print '<b>' . $viewPortDesk . '</b><br><br>';

                        print $sizeElement . ': ';
                        print '<b>' . $sizeElementDesk . '</b><br><br>';

                        print $sizeText . ': ';
                        print '<b>' . $sizeTextDesk . '</b><br><br>';

                        print $plugins . ': ';
                        print '<b>' . $pluginsDesk . '</b><br><br>';

                        print $flowWindow . ': ';
                        print '<b>' . $flowWindowDesk . '</b><br><br>';


                        ?>
                    </div>
                </div>
            </div>
        </div>

        <!--ANALYTICS-->
        <div class="result-item">
            <div class="result-item-short">
                <div class="row">
                    <div class="col-xs-1">

                        <?php

                        if ($systemAnalyseDesk == '') {
                            print "<img src=\"../assets/imgs/$redImg\" width=\"100%\" style=\"max-width: 30px;\" alt=\"state\">";
                        } else {
                            print "<img src=\"../assets/imgs/$greenImg\" width=\"100%\" style=\"max-width: 30px;\" alt=\"state\">";
                        }

                        ?>
                    </div>
                    <div class="col-xs-5 result-item-name">
                        Система аналитики
                    </div>
                    <div class="col-xs-5 text-right result-item-val">
                        <?php

                        if ($systemAnalyseDesk == '') {
                            print '<span style="color: red">(Нет)</span>';
                        } else {
                            print '<span style="color: green">(Есть)</span>';
                        }

                        ?>
                    </div>
                    <div class="col-xs-1 text-right">
                        <a href="javascript:void(0);" class="result-item-more">
                            <i class="fa fa-angle-down fa-2x"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="result-item-full" id="analytics">
                <div class="row">
                    <div class="col-xs-offset-1 col-xs-10 result-item-full-content">
                        <?php

                        if ($systemAnalyseDesk == '') {
                            print '<span style="color: red">У вас нету системы аналитики</span>';
                        } else {
                            print '<span style="color: green">' . $systemAnalyseDesk . '</span>';
                        }

                        ?>
                    </div>
                </div>
            </div>
        </div>


        <!--INTERNAL_LINKS-->
        <div class="result-item">
            <div class="result-item-short">
                <div class="row">
                    <div class="col-xs-1">
                        <?php

                        if ($innerLink == 'Внутренние ссылки не найдены.') {
                            print "<img src=\"../assets/imgs/$redImg\" width=\"100%\" style=\"max-width: 30px;\" alt=\"state\">";
                        } else {
                            print "<img src=\"../assets/imgs/$greenImg\" width=\"100%\" style=\"max-width: 30px;\" alt=\"state\">";
                        }

                        ?>
                    </div>
                    <div class="col-xs-5 result-item-name">
                        Внутренние ссылки на странице
                    </div>
                    <div class="col-xs-5 text-right result-item-val">
                        <?php print $innerLink ?>
                    </div>
                    <div class="col-xs-1 text-right">
                        <a href="javascript:void(0);" class="result-item-more">
                            <i class="fa fa-angle-down fa-2x"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="result-item-full" id="inner">
                <div class="row">
                    <div class="col-xs-offset-1 col-xs-10 result-item-full-content">
                        <?php print $innerLinkDesk ?>
                    </div>
                </div>
            </div>
        </div>


        <!--EXTERNAL_LINKS-->
        <div class="result-item">
            <div class="result-item-short">
                <div class="row">
                    <div class="col-xs-1">

                        <?php

                        if (trim($comonLink) == 'Внешние ссылки не найдены.') {
                            print "<img src=\"../assets/imgs/$greenImg\" width=\"100%\" style=\"max-width: 30px;\" alt=\"state\">";
                        } else {
                            print "<img src=\"../assets/imgs/$redImg\" width=\"100%\" style=\"max-width: 30px;\" alt=\"state\">";
                        }


                        ?>

                    </div>
                    <div class="col-xs-5 result-item-name">
                        Внешние ссылки со страницы
                    </div>
                    <div class="col-xs-5 text-right result-item-val">
                        <?php print $comonLink ?>
                    </div>
                    <div class="col-xs-1 text-right">
                        <a href="javascript:void(0);" class="result-item-more">
                            <i class="fa fa-angle-down fa-2x"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="result-item-full" id="coomon">
                <div class="row">
                    <div class="col-xs-offset-1 col-xs-10 result-item-full-content">
                        <div style="margin-top: 15px">
                            <?php print $comonLinkDesk ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--SCHEMA.ORG-->
        <div class="result-item">
            <div class="result-item-short">
                <div class="row">
                    <div class="col-xs-1">

                        <?php

                        if ($schemaOrgDesk == '') {
                            print "<img src=\"../assets/imgs/$redImg\" width=\"100%\" style=\"max-width: 30px;\" alt=\"state\">";
                        } else {
                            print "<img src=\"../assets/imgs/$greenImg\" width=\"100%\" style=\"max-width: 30px;\" alt=\"state\">";
                        }
                        ?>

                    </div>
                    <div class="col-xs-5 result-item-name">
                        Наличие микроразметки
                    </div>
                    <div class="col-xs-5 text-right result-item-val">
                        <?php
                        print $schemaOrg;
                        print '<br>';
                        print $schemaOrg2;
                        print '<br><br>';
                        if (trim($openGraphDesk) == '') {
                            print 'Микроразметка Open Graph Не найдена';
                        } else {
                            print 'Микроразметка Open Graph Найдена';
                        }
                        ?>
                    </div>
                    <div class="col-xs-1 text-right">
                        <a href="javascript:void(0);" class="result-item-more">
                            <i class="fa fa-angle-down fa-2x"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="result-item-full" id="micro">
                <div class="row">
                    <div class="col-xs-offset-1 col-xs-10 result-item-full-content">
                        <?php
                        print $openGraph;
                        print '<br>';
                        print $openGraph2;
                        print '<br><br>';
                        print $openGraphDesk;
                        print '<br><br>';
                        print $schemaOrgDesk;
                        ?>
                    </div>
                </div>
            </div>
        </div>


        <!--REDIRECTS-->
        <div class="result-item">
            <div class="result-item-short">
                <div class="row">
                    <div class="col-xs-1">

                        <?php

                        if (trim($redirectWww) == 'Перенаправление не настроено.') {
                            print "<img src=\"../assets/imgs/$redImg\" width=\"100%\" style=\"max-width: 30px;\" alt=\"state\">";
                        } else {
                            print "<img src=\"../assets/imgs/$greenImg\" width=\"100%\" style=\"max-width: 30px;\" alt=\"state\">";
                        }

                        ?>

                    </div>
                    <div class="col-xs-5 result-item-name">
                        Редиректы
                    </div>
                    <div class="col-xs-5 text-right result-item-val">
                        <?php print $redirectWww ?>
                    </div>
                    <div class="col-xs-1 text-right">
                        <a href="javascript:void(0);" class="result-item-more">
                            <i class="fa fa-angle-down fa-2x"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="result-item-full" id="redirect">
                <div class="row">
                    <div class="col-xs-offset-1 col-xs-10 result-item-full-content">
                        <?php print $redirectWwwDesk ?>
                    </div>
                </div>
            </div>
        </div>


        <!--ROBOTS.TXT-->
        <div class="result-item">
            <div class="result-item-short">
                <div class="row">
                    <div class="col-xs-1">

                        <?php

                        if (trim($robotsTxt) == 'Файл robots.txt не найден.') {
                            print "<img src=\"../assets/imgs/$yellowImg\" width=\"100%\" style=\"max-width: 30px;\" alt=\"state\">";
                        } else {
                            print "<img src=\"../assets/imgs/$greenImg\" width=\"100%\" style=\"max-width: 30px;\" alt=\"state\">";
                        }

                        ?>

                    </div>
                    <div class="col-xs-5 result-item-name">
                        Файл robots.txt
                    </div>
                    <div class="col-xs-5 text-right result-item-val">
                        <?php print $robotsTxt ?>
                    </div>
                    <div class="col-xs-1 text-right">
                        <a href="javascript:void(0);" class="result-item-more">
                            <i class="fa fa-angle-down fa-2x"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="result-item-full" id="robots">
                <div class="row">
                    <div class="col-xs-offset-1 col-xs-10 result-item-full-content">
                        <?php print $robotsTxtDesk ?>
                    </div>
                </div>
            </div>
        </div>


        <!--SITEMAP-->
        <div class="result-item">
            <div class="result-item-short">
                <div class="row">
                    <div class="col-xs-1">

                        <?php

                        if (trim($siteMap) == 'Карта сайта не найдена.') {
                            print "<img src=\"../assets/imgs/$yellowImg\" width=\"100%\" style=\"max-width: 30px;\" alt=\"state\">";
                        } else {
                            print "<img src=\"../assets/imgs/$greenImg\" width=\"100%\" style=\"max-width: 30px;\" alt=\"state\">";
                        }

                        ?>

                    </div>
                    <div class="col-xs-5 result-item-name">
                        Наличие Sitemap
                    </div>
                    <div class="col-xs-5 text-right result-item-val">
                        <?php print $siteMap ?>
                    </div>
                    <div class="col-xs-1 text-right">
                        <a href="javascript:void(0);" class="result-item-more">
                            <i class="fa fa-angle-down fa-2x"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="result-item-full" id="sitemap">
                <div class="row">
                    <div class="col-xs-offset-1 col-xs-10 result-item-full-content">
                        <?php print $siteMapDesk ?>
                    </div>
                </div>
            </div>
        </div>


        <!--FAVICON-->
        <div class="result-item">
            <div class="result-item-short">
                <div class="row">
                    <div class="col-xs-1">

                        <?php

                        if (strlen($favicon) == 67) {
                            print "<img src=\"../assets/imgs/$greenImg\" width=\"100%\" style=\"max-width: 30px;\" alt=\"state\">";
                        } else {
                            print "<img src=\"../assets/imgs/$yellowImg\" width=\"100%\" style=\"max-width: 30px;\" alt=\"state\">";
                        }

                        ?>

                    </div>
                    <div class="col-xs-5 result-item-name">
                        Favicon
                    </div>
                    <div class="col-xs-5 text-right result-item-val">
                        <?php print $favicon ?>
                    </div>
                    <div class="col-xs-1 text-right">
                        <a href="javascript:void(0);" class="result-item-more">
                            <i class="fa fa-angle-down fa-2x"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="result-item-full" id="favicon">
                <div class="row">
                    <div class="col-xs-offset-1 col-xs-10 result-item-full-content">
                        <?php print $faviconDesk ?>
                    </div>
                </div>
            </div>
        </div>


        <!--INTERNAL_LINKS-->
        <div class="result-item">
            <div class="result-item-short">
                <div class="row">
                    <div class="col-xs-1">

                        <?php

                        if (trim($page404) == 'Все отлично, получен код 404.') {
                            print "<img src=\"../assets/imgs/$greenImg\" width=\"100%\" style=\"max-width: 30px;\" alt=\"state\">";
                        } else {
                            print "<img src=\"../assets/imgs/$yellowImg\" width=\"100%\" style=\"max-width: 30px;\" alt=\"state\">";
                        }

                        ?>

                    </div>
                    <div class="col-xs-5 result-item-name">
                        Страница 404
                    </div>
                    <div class="col-xs-5 text-right result-item-val">
                        <?php
                        print $page404;
                        print '<br>';
                        print $page404_2;
                        ?>
                    </div>
                    <div class="col-xs-1 text-right">
                        <a href="javascript:void(0);" class="result-item-more">
                            <i class="fa fa-angle-down fa-2x"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="result-item-full" id="404">
                <div class="row">
                    <div class="col-xs-offset-1 col-xs-10 result-item-full-content">
                        <?php
                        print $page404Desk;
                        print '<br>';
                        print $page404Desk_2;
                        ?>
                    </div>
                </div>
            </div>
        </div>


        <!--INTERNAL_LINKS-->
        <div class="result-item">
            <div class="result-item-short">
                <div class="row">
                    <div class="col-xs-1">

                        <?php

                        print "<img src=\"../assets/imgs/$yellowImg\" width=\"100%\" style=\"max-width: 30px;\" alt=\"state\">";

                        ?>

                    </div>
                    <div class="col-xs-5 result-item-name">
                        Скорость загрузки
                    </div>
                    <div class="col-xs-5 text-right result-item-val">
                        <?php print $speedLoad ?>
                    </div>
                    <div class="col-xs-1 text-right">
                        <a href="javascript:void(0);" class="result-item-more">
                            <i class="fa fa-angle-down fa-2x"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="result-item-full" id="speed">
                <div class="row">
                    <div class="col-xs-offset-1 col-xs-10 result-item-full-content">
                        <?php

                        print $cashBrowser . ': ';
                        print ' ';
                        print $cashBrowserDesk . '<br><br>';

                        print $timeRespone . ': ';
                        print ' ';
                        print $timeResponeDesk . '<br><br>';

                        print $gzip . ': ';
                        print ' ';
                        print $gzipDesk . '<br><br>';

                        print $compressImage . ': ';
                        print ' ';
                        print $compressImageDesk . '<br><br>';


                        print $minifyRes . ': ';
                        print ' ';
                        print $minifyResDesk . '<br><br>';

                        print $visibleCont . ': ';
                        print ' ';
                        print $visibleContDesk . '<br><br>';

                        print $jsHtmlCss . ': ';
                        print ' ';
                        print $jsHtmlCssDesk . '<br><br>';

                        print $redirectSpeed . ': ';
                        print ' ';
                        print $redirectSpeedDesk . '<br><br>';

                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--ENTER INFO-->
    <div class="row result-group pushing-top">
        <h3>Текстовая оптимизация</h3>


        <!--INTERNAL_LINKS-->
        <div class="result-item">
            <div class="result-item-short">
                <div class="row">
                    <div class="col-xs-1">

                        <?php

                        if (trim($titleLink) == 'Не найдено.') {
                            print "<img src=\"../assets/imgs/$redImg\" width=\"100%\" style=\"max-width: 30px;\" alt=\"state\">";
                        } else {
                            print "<img src=\"../assets/imgs/$greenImg\" width=\"100%\" style=\"max-width: 30px;\" alt=\"state\">";
                        }

                        ?>


                    </div>
                    <div class="col-xs-5 result-item-name">
                        Title
                    </div>
                    <div class="col-xs-5 text-right result-item-val">
                        <?php print $titleLink ?>
                    </div>
                    <div class="col-xs-1 text-right">
                        <a href="javascript:void(0);" class="result-item-more">
                            <i class="fa fa-angle-down fa-2x"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="result-item-full" id="title">
                <div class="row">
                    <div class="col-xs-offset-1 col-xs-10 result-item-full-content">
                        <?php print $titleLinkDesk ?>
                    </div>
                </div>
            </div>
        </div>


        <!--INTERNAL_LINKS-->
        <div class="result-item">
            <div class="result-item-short">
                <div class="row">
                    <div class="col-xs-1">

                        <?php

                        if (trim($headerLinkDesk) == 'Не найдено.') {
                            print "<img src=\"../assets/imgs/$redImg\" width=\"100%\" style=\"max-width: 30px;\" alt=\"state\">";
                        } else {
                            print "<img src=\"../assets/imgs/$greenImg\" width=\"100%\" style=\"max-width: 30px;\" alt=\"state\">";
                        }

                        ?>

                    </div>
                    <div class="col-xs-5 result-item-name">
                        Description
                    </div>
                    <div class="col-xs-5 text-right result-item-val">
                        <?php print $headerLinkDesk ?>
                    </div>
                    <div class="col-xs-1 text-right">
                        <a href="javascript:void(0);" class="result-item-more">
                            <i class="fa fa-angle-down fa-2x"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="result-item-full" id="desk">
                <div class="row">
                    <div class="col-xs-offset-1 col-xs-10 result-item-full-content">
                        <?php print $headerLinkDesk2 ?>
                    </div>
                </div>
            </div>
        </div>


        <div class="result-item">
            <div class="result-item-short">
                <div class="row">
                    <div class="col-xs-1">

                        <?php

                        if ($checkHeaderPage == 'fail') {
                            print "<img src=\"../assets/imgs/$redImg\" width=\"100%\" style=\"max-width: 30px;\" alt=\"state\">";
                        } else {
                            print "<img src=\"../assets/imgs/$greenImg\" width=\"100%\" style=\"max-width: 30px;\" alt=\"state\">";
                        }

                        ?>

                    </div>
                    <div class="col-xs-5 result-item-name">
                        H1-H6 Заголовки
                    </div>
                    <div class="col-xs-5 text-right result-item-val">
                        <?php print $headersPage ?>
                    </div>
                    <div class="col-xs-1 text-right">
                        <a href="javascript:void(0);" class="result-item-more">
                            <i class="fa fa-angle-down fa-2x"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="result-item-full" id="header">
                <div class="row">
                    <div class="col-xs-offset-1 col-xs-10 result-item-full-content">
                        <?php print $headersPageDesk ?>
                    </div>
                </div>
            </div>
        </div>


        <!--INTERNAL_LINKS-->
        <div class="result-item">
            <div class="result-item-short">
                <div class="row">
                    <div class="col-xs-1">

                        <?php

                        if ($checkNumberWord == 'fail') {
                            print "<img src=\"../assets/imgs/$yellowImg\" width=\"100%\" style=\"max-width: 30px;\" alt=\"state\">";
                        } else {
                            print "<img src=\"../assets/imgs/$greenImg\" width=\"100%\" style=\"max-width: 30px;\" alt=\"state\">";
                        }

                        ?>

                    </div>
                    <div class="col-xs-5 result-item-name">
                        Количество слов
                    </div>
                    <div class="col-xs-5 text-right result-item-val">
                        <?php print $numberWord ?>
                    </div>
                    <div class="col-xs-1 text-right">
                        <a href="javascript:void(0);" class="result-item-more">
                            <i class="fa fa-angle-down fa-2x"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="result-item-full" id="numbWord">
                <div class="row">
                    <div class="col-xs-offset-1 col-xs-10 result-item-full-content">
                        <?php print $numberWordDesk ?>
                    </div>
                </div>
            </div>
        </div>


        <!--INTERNAL_LINKS-->
        <div class="result-item">
            <div class="result-item-short">
                <div class="row">
                    <div class="col-xs-1">

                        <?php

                        if ($checkLongText == 'fail') {
                            print "<img src=\"../assets/imgs/$yellowImg\" width=\"100%\" style=\"max-width: 30px;\" alt=\"state\">";
                        } else {
                            print "<img src=\"../assets/imgs/$greenImg\" width=\"100%\" style=\"max-width: 30px;\" alt=\"state\">";
                        }

                        ?>

                    </div>
                    <div class="col-xs-5 result-item-name">
                        Длина текста
                    </div>
                    <div class="col-xs-5 text-right result-item-val">
                        <?php print $longText ?>
                    </div>
                </div>
            </div>
        </div>


        <!--INTERNAL_LINKS-->
        <div class="result-item">
            <div class="result-item-short">
                <div class="row">
                    <div class="col-xs-1">

                        <?php

                        if ($checkNausea == 'fail') {
                            print "<img src=\"../assets/imgs/$yellowImg\" width=\"100%\" style=\"max-width: 30px;\" alt=\"state\">";
                        } else {
                            print "<img src=\"../assets/imgs/$greenImg\" width=\"100%\" style=\"max-width: 30px;\" alt=\"state\">";
                        }

                        ?>

                    </div>
                    <div class="col-xs-5 result-item-name">
                        Тошнота (без стоп слов)
                    </div>
                    <div class="col-xs-5 text-right result-item-val">
                        <?php print $nausea ?>
                    </div>
                    <div class="col-xs-1 text-right">
                        <a href="javascript:void(0);" class="result-item-more">
                            <i class="fa fa-angle-down fa-2x"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="result-item-full" id="nausea">
                <div class="row">
                    <div class="col-xs-offset-1 col-xs-10 result-item-full-content">
                        <?php print $nauseaDesk ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--ENTER INFO-->
    <div class="row result-group pushing-top">
        <h3>Внешняя оптимизация</h3>


        <div class="result-item">
            <div class="result-item-short">
                <div class="row">
                    <div class="col-xs-1">

                        <?php

                        if (
                            trim($checkSocial) == 'fail'
                            ||
                            trim($checkFacebook) == 'fail'
                            ||
                            trim($checkVkontakte) == 'fail'
                            ||
                            trim($checkGooglePlus) == 'fail'
                            ||
                            trim($checkTwitter) == 'fail'
                        ) {
                            print "<img src=\"../assets/imgs/$yellowImg\" width=\"100%\" style=\"max-width: 30px;\" alt=\"state\">";
                        } else {
                            print "<img src=\"../assets/imgs/$greenImg\" width=\"100%\" style=\"max-width: 30px;\" alt=\"state\">";
                        }

                        ?>

                    </div>
                    <div class="col-xs-5 result-item-name">
                        Социальная активность
                    </div>
                    <div class="col-xs-5 text-right result-item-val">
                        <?php

                        print $socialOnlDesk;
                        print '<br><br>';
                        print $socialOnlDesk2;

                        ?>
                    </div>
                    <div class="col-xs-1 text-right">
                        <a href="javascript:void(0);" class="result-item-more">
                            <i class="fa fa-angle-down fa-2x"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="result-item-full" id="social">
                <div class="row">
                    <div class="col-xs-offset-1 col-xs-10 result-item-full-content">
                        <?php

                        print 'Facebook: ' . '<b>' . $facebook . '</b><br><br>';

                        print 'Vkontakte: ' . '<b>' . $vkontakte . '</b><br><br>';

                        print 'Google+: ' . '<b>' . $googlePlus . '</b><br><br>';

                        print 'Twitter: ' . '<b>' . $twitter . '</b><br><br>';

                        ?>
                    </div>
                </div>
            </div>
        </div>


        <!--INTERNAL_LINKS-->
        <div class="result-item">
            <div class="result-item-short">
                <div class="row">
                    <div class="col-xs-1">

                        <?php

                        if (trim($yandexCatalog) == 'Нет') {
                            print "<img src=\"../assets/imgs/$yellowImg\" width=\"100%\" style=\"max-width: 30px;\" alt=\"state\">";
                        } else {
                            print "<img src=\"../assets/imgs/$greenImg\" width=\"100%\" style=\"max-width: 30px;\" alt=\"state\">";
                        }

                        ?>

                    </div>
                    <div class="col-xs-5 result-item-name">
                        Яндекс каталог
                    </div>
                    <div class="col-xs-5 text-right result-item-val">
                        <?php print $yandexCatalog ?>
                    </div>
                    <div class="col-xs-1 text-right">
                        <a href="javascript:void(0);" class="result-item-more">
                            <i class="fa fa-angle-down fa-2x"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="result-item-full" id="catalog">
                <div class="row">
                    <div class="col-xs-offset-1 col-xs-10 result-item-full-content">
                        <?php print $yandexCatalogDesk ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>