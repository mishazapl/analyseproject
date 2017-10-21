<?php

/**
 * Данный документ отвечает за автоматическое открытие красных
 * пунктов.
 */

/**
 * Tic
 */

if (trim($checkYandexTic) == 'fail' || trim($checkYandexTic) == 'info') {
    print '<script>' . '$("#tic").css(\'display\', \'block\')' . '</script>';
}

/**
 * YandexPage
 */

if ($yandexPageRed != '') {
    print '<script>' . '$("#page").css(\'display\', \'block\')' . '</script>';
}

/**
 * Google Page
 */

if ($googlePageRed != '') {
    print '<script>' . '$("#google").css(\'display\', \'block\')' . '</script>';
}

/**
 * Yandex Rank
 */

if (trim($yandexRank) == '6 из 6' || trim($yandexRank) == '5 из 6') {
} elseif (trim($yandexRank) == '4 из 6' || trim($yandexRank) == '3 из 6') {
    print '<script>' . '$("#rank").css(\'display\', \'block\')' . '</script>';
} else {
    print '<script>' . '$("#rank").css(\'display\', \'block\')' . '</script>';
}

/**
 * Mobile
 */

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
    print '<script>' . '$("#mobile").css(\'display\', \'block\')' . '</script>';
}

/**
 * Analytics
 */

if ($systemAnalyseDesk == '') {
    print '<script>' . '$("#analytics").css(\'display\', \'block\')' . '</script>';
}

/**
 * Inner Link
 */

if ($innerLink == 'Внутренние ссылки не найдены.') {
    print '<script>' . '$("#inner").css(\'display\', \'block\')' . '</script>';
}

/**
 * Coomon Link
 */

if (trim($comonLink) == 'Внешние ссылки не найдены.') {
} else {
    print '<script>' . '$("#coomon").css(\'display\', \'block\')' . '</script>';
}

/**
 * MicroMarkup
 */

if ($schemaOrgDesk == '') {
    print '<script>' . '$("#micro").css(\'display\', \'block\')' . '</script>';
}

/**
 * Redirect
 */

if (trim($redirectWww) == 'Перенаправление не настроено.') {
    print '<script>' . '$("#redirect").css(\'display\', \'block\')' . '</script>';
}

/**
 * Robots Txt
 */

if (trim($robotsTxt) == 'Файл robots.txt не найден.') {
    print '<script>' . '$("#robots").css(\'display\', \'block\')' . '</script>';
}

/**
 * Sitemap
 */

if (trim($siteMap) == 'Карта сайта не найдена.') {
    print '<script>' . '$("#sitemap").css(\'display\', \'block\')' . '</script>';
}

/**
 * Favicon
 */

if (strlen($favicon) == 67) {
} else {
    print '<script>' . '$("#favicon").css(\'display\', \'block\')' . '</script>';
}

/**
 * Page 404
 */

if (trim($page404) == 'Все отлично, получен код 404.') {
} else {
    print '<script>' . '$("#404").css(\'display\', \'block\')' . '</script>';
}

/**
 * Speed Download
 */

print '<script>' . '$("#speed").css(\'display\', \'block\')' . '</script>';

/**
 * Title
 */

if (trim($titleLink) == 'Не найдено.') {
    print '<script>' . '$("#title").css(\'display\', \'block\')' . '</script>';
}

/**
 * Description
 */

if (trim($headerLinkDesk) == 'Не найдено.') {
    print '<script>' . '$("#desk").css(\'display\', \'block\')' . '</script>';
}

/**
 * Headers
 */

if ($checkHeaderPage == 'fail') {
    print '<script>' . '$("#header").css(\'display\', \'block\')' . '</script>';
}

/**
 * The number words
 */

if ($checkNumberWord == 'fail') {
    print '<script>' . '$("#numbWord").css(\'display\', \'block\')' . '</script>';
}

/**
 * Nausea
 */

if ($checkNausea == 'fail') {
    print '<script>' . '$("#nausea").css(\'display\', \'block\')' . '</script>';
}

/**
 * Social Activity
 */

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
    print '<script>' . '$("#social").css(\'display\', \'block\')' . '</script>';
}

/**
 * Yandex Catalog
 */

if (trim($yandexCatalog) == 'Нет') {
    print '<script>' . '$("#catalog").css(\'display\', \'block\')' . '</script>';
}
