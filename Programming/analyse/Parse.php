<?php


/**
 * YandexTic
 */

$yandexTic = liw\Programming\analyse\HandlerAnalyse::parseHeaderText('#yandexCitation .content-test a');

$yandexTicDesk = liw\Programming\analyse\HandlerAnalyse::parseHeaderText('#yandexCitationDescription');

$checkYandexTic = liw\Programming\analyse\HandlerAnalyse::parseHeaderSelect('#yandexCitation > div.check-test.test-body','test-status');


if (trim($checkYandexTic) == 'fail' || trim($checkYandexTic) == 'info') {
    ++$red;
} else {
    ++$green;
}


/**
 * Yandex Page
 */

$yandexPageDesk = liw\Programming\analyse\HandlerAnalyse::parseHeaderText('#yandexIndex .content-test a');

$yandexPageRed = liw\Programming\analyse\HandlerAnalyse::parseHeaderText('#yandexIndex .content-test .red');

if ($yandexPageRed != '') {
    ++$red;
} else {
    ++$green;
}

/**
 * Google Page
 */

$googlePageDesk = liw\Programming\analyse\HandlerAnalyse::parseHeaderText('#googleIndex .content-test a');

$googlePageRed = liw\Programming\analyse\HandlerAnalyse::parseHeaderText('#googleIndex .content-test .red');

if ($googlePageRed != '') {
    ++$red;
} else {
    ++$green;
}

/**
 * Yandex Rank
 */

$yandexRank = liw\Programming\analyse\HandlerAnalyse::parseHeaderText('#yandexRank .content-test');

$yandexRankDesk = liw\Programming\analyse\HandlerAnalyse::parseHeaderText('#yandexRankDescription .success');

if (trim($yandexRank) == '6 из 6' || trim($yandexRank) == '5 из 6') {
    ++$green;
} elseif (trim($yandexRank) == '4 из 6' || trim($yandexRank) == '3 из 6') {
    ++$yellow;
} else {
    ++$red;
}


/**
 *  System Analyse
 */

$systemAnalyseDesk = liw\Programming\analyse\HandlerAnalyse::parseHeaderText('#statisticsSystems .text-img span');

if ($systemAnalyseDesk == '') {
    ++$red;
} else {
    ++$green;
}


/**
 * Inner Link
 */

$innerLink = liw\Programming\analyse\HandlerAnalyse::parseHeaderText('#mainPageInternalLinks .content-test');

$innerLinkDesk = liw\Programming\analyse\HandlerAnalyse::parseHeaderText('#mainPageInternalLinksDescription .description');

if ($innerLink == 'Внутренние ссылки не найдены.') {
    ++$red;
} else {
    ++$green;
}


/**
 * Comon Link
 */

$comonLink = liw\Programming\analyse\HandlerAnalyse::parseHeaderText('#mainPageExternalLinks .content-test');

$comonLinkDesk = liw\Programming\analyse\HandlerAnalyse::parseHeaderText('#mainPageExternalLinksDescription .description');

if (trim($comonLink) == 'Внешние ссылки не найдены.') {
    ++$green;
} else {
    ++$red;
}


/**
 * Title + description
 */

$titleLink = liw\Programming\analyse\HandlerAnalyse::parseHeaderHtml('#mainPageTitle .content-test');

$titleLinkDesk = liw\Programming\analyse\HandlerAnalyse::parseHeaderHtml('#mainPageTitle .success');

if (trim($titleLink) == 'Не найдено.') {
    ++$red;
} else {
    ++$green;
}



$headerLinkDesk = liw\Programming\analyse\HandlerAnalyse::parseHeaderHtml('#mainPageDescription .content-test');

$headerLinkDesk2 = liw\Programming\analyse\HandlerAnalyse::parseHeaderHtml('#mainPageDescriptionDescription .description');

if (trim($headerLinkDesk) == 'Не найдено.') {
    ++$red;
} else {
    ++$green;
}


/**
 * SchemaOrg
 */

$schemaOrg     = liw\Programming\analyse\HandlerAnalyse::parseHeaderText('#microdataSchemaOrg .info-test');
$schemaOrg2    = liw\Programming\analyse\HandlerAnalyse::parseHeaderText('#microdataSchemaOrg .content-test');

$schemaOrgDesk = liw\Programming\analyse\HandlerAnalyse::parseHeaderHtml('#microdataSchemaOrgDescription .success p');

if ($schemaOrgDesk == '') {
    ++$red;
} else {
    ++$green;
}


/**
 * Open Graph
 */

$openGraph     = liw\Programming\analyse\HandlerAnalyse::parseHeaderText('#microdataOpenGraph .info-test');

$openGraph2    = liw\Programming\analyse\HandlerAnalyse::parseHeaderHtml('#microdataOpenGraph .social-group');

$openGraphDesk = liw\Programming\analyse\HandlerAnalyse::parseHeaderHtml('#microdataOpenGraph .success p');


/**
 * Редиректы
 */

$redirectWww = liw\Programming\analyse\HandlerAnalyse::parseHeaderText('#wwwRedirect .content-test');

$redirectWwwDesk = liw\Programming\analyse\HandlerAnalyse::parseHeaderText('#wwwRedirectDescription .description');

if (trim($redirectWww) == 'Перенаправление не настроено.') {
    ++$red;
} else {
    ++$green;
}

/**
 * Robots Txt
 */

$robotsTxt     = liw\Programming\analyse\HandlerAnalyse::parseHeaderText('#robotsTxt .content-test');

$robotsTxtDesk = liw\Programming\analyse\HandlerAnalyse::parseHeaderText('#robotsTxtDescription .description p, #robotsTxtDescription .description ol ');

if (trim($robotsTxt) == 'Файл robots.txt не найден.') {
    ++$yellow;
} else {
    ++$green;
}

/**
 * Sitemap
 */

$siteMap = liw\Programming\analyse\HandlerAnalyse::parseHeaderText('#sitemap .content-test');

$siteMapDesk = liw\Programming\analyse\HandlerAnalyse::parseHeaderText('#sitemapDescription .info p, #sitemapDescription .info ul');

if (trim($siteMap) == 'Карта сайта не найдена.') {
    ++$yellow;
} else {
    ++$green;
}

/**
 * Favicon
 */

$favicon = liw\Programming\analyse\HandlerAnalyse::parseHeaderText('#favicon .content-test');

$faviconDesk = liw\Programming\analyse\HandlerAnalyse::parseHeaderText('#faviconDescription .description p');

if (strlen($favicon) == 67) {
    ++$green;
} else {
    ++$yellow;
}

/**
 * 2 item for 404 page
 */

$page404 = liw\Programming\analyse\HandlerAnalyse::parseHeaderText('#page404StatusCode .content-test');

$page404_2 = liw\Programming\analyse\HandlerAnalyse::parseHeaderText('#page404BackLink .content-test');

$page404Desk = liw\Programming\analyse\HandlerAnalyse::parseHeaderHtml('#page404StatusCodeDescription .description');

$page404Desk_2 = liw\Programming\analyse\HandlerAnalyse::parseHeaderHtml('#page404BackLinkDescription .description');


if (trim($page404) == 'Все отлично, получен код 404.') {
    ++$green;
} else {
    ++$yellow;
}


/**
 * Speed Load
 */

$speedLoad = liw\Programming\analyse\HandlerAnalyse::parseHeaderText('#loadTime .content-test');

++$yellow;


/**
 * Cash Browser
 */


$cashBrowser = liw\Programming\analyse\HandlerAnalyse::parseHeaderHtml('#pageSpeedLeverageBrowserCaching .info-test');

$cashBrowserDesk = liw\Programming\analyse\HandlerAnalyse::parseHeaderHtml('#pageSpeedLeverageBrowserCaching .content-test');

/**
 * Time Respone
 */

$timeRespone = liw\Programming\analyse\HandlerAnalyse::parseHeaderHtml('#pageSpeedServerResponseTime .info-test');

$timeResponeDesk = liw\Programming\analyse\HandlerAnalyse::parseHeaderHtml('#pageSpeedServerResponseTime .content-test');

/**
 * Gzip
 */

$gzip = liw\Programming\analyse\HandlerAnalyse::parseHeaderHtml('#pageSpeedEnableGzipCompression .info-test');

$gzipDesk = liw\Programming\analyse\HandlerAnalyse::parseHeaderHtml('#pageSpeedEnableGzipCompression .content-test');

/**
 * Image compress
 */

$compressImage = liw\Programming\analyse\HandlerAnalyse::parseHeaderHtml('#pageSpeedOptimizeImages .info-test');

$compressImageDesk = liw\Programming\analyse\HandlerAnalyse::parseHeaderHtml('#pageSpeedOptimizeImages .content-test');

/**
 * Resource
 */

$minifyRes = liw\Programming\analyse\HandlerAnalyse::parseHeaderHtml('#pageSpeedMinifyResources .info-test');

$minifyResDesk = liw\Programming\analyse\HandlerAnalyse::parseHeaderHtml('#pageSpeedMinifyResources .content-test');

/**
 * View content
 */

$visibleCont = liw\Programming\analyse\HandlerAnalyse::parseHeaderHtml('#pageSpeedPrioritizeVisibleContent .info-test');

$visibleContDesk = liw\Programming\analyse\HandlerAnalyse::parseHeaderHtml('#pageSpeedPrioritizeVisibleContent .content-test');

/**
 * JS HTML CSS
 */

$jsHtmlCss = liw\Programming\analyse\HandlerAnalyse::parseHeaderText('#pageSpeedMinimizeRenderBlockingResources .info-test');

$jsHtmlCssDesk = liw\Programming\analyse\HandlerAnalyse::parseHeaderText('#pageSpeedMinimizeRenderBlockingResources .content-test');


/**
 * Redirect
 */

$redirectSpeed = liw\Programming\analyse\HandlerAnalyse::parseHeaderHtml('#pageSpeedAvoidLandingPageRedirects .info-test');

$redirectSpeedDesk = liw\Programming\analyse\HandlerAnalyse::parseHeaderHtml('#pageSpeedAvoidLandingPageRedirects .content-test');

/**
 * Headers
 */

$headersPage = liw\Programming\analyse\HandlerAnalyse::parseHeaderHtml('#mainPageHeaders .content-test');

$headersPageDesk = liw\Programming\analyse\HandlerAnalyse::parseHeaderHtml('#mainPageHeadersDescription .description p');

$checkHeaderPage = liw\Programming\analyse\HandlerAnalyse::parseHeaderSelect('#mainPageHeaders > div.check-test.test-body', 'test-status');

if ($checkHeaderPage == 'fail') {
    ++$red;
} else {
    ++$green;
}

/**
 * The number word
 */

$numberWord = liw\Programming\analyse\HandlerAnalyse::parseHeaderHtml('#mainPageWordsCount .content-test');

$numberWordDesk = liw\Programming\analyse\HandlerAnalyse::parseHeaderHtml('#mainPageWordsCountDescription .description p');

$checkNumberWord = liw\Programming\analyse\HandlerAnalyse::parseHeaderSelect('#mainPageWordsCount > div.check-test.test-body', 'test-status');

if ($checkNumberWord == 'fail') {
    ++$yellow;
} else {
    ++$green;
}


/**
 * The number LongText
 */


$longText = liw\Programming\analyse\HandlerAnalyse::parseHeaderHtml('#mainPageTextLength .content-test');

$checkLongText = liw\Programming\analyse\HandlerAnalyse::parseHeaderSelect('#mainPageTextLength > div', 'test-status');

if ($checkLongText == 'fail') {
    ++$yellow;
} else {
    ++$green;
}

/**
 * Nausea percent
 */

$nausea = liw\Programming\analyse\HandlerAnalyse::parseHeaderHtml('#mainPageSickness .content-test');

$nauseaDesk = liw\Programming\analyse\HandlerAnalyse::parseHeaderHtml('#mainPageSicknessDescription .description p');

$checkNausea = liw\Programming\analyse\HandlerAnalyse::parseHeaderSelect('#mainPageSickness > div.check-test.test-body', 'test-status');

if ($checkNausea == 'fail') {
    ++$yellow;
} else {
    ++$green;
}

/**
 * Yandex Catalog
 */

$yandexCatalog = liw\Programming\analyse\HandlerAnalyse::parseHeaderHtml('#yandexCatalog .content-test');

$yandexCatalogDesk = liw\Programming\analyse\HandlerAnalyse::parseHeaderHtml('#yandexCatalogDescription .description p');

if (trim($yandexCatalog) == 'Нет') {
    ++$yellow;
} else {
    ++$green;
}

/**
 * Mobile Version
 */

/**
 * To viewPort
 */

$toView = liw\Programming\analyse\HandlerAnalyse::parseHeaderText('#pageSpeedSizeContentToViewport .info-test');

$toDesk = liw\Programming\analyse\HandlerAnalyse::parseHeaderText('#pageSpeedSizeContentToViewport .content-test');

/**
 * Tag ViewPort
 */

$viewPort = liw\Programming\analyse\HandlerAnalyse::parseHeaderText('#pageSpeedConfigureViewport .info-test');

$viewPortDesk = liw\Programming\analyse\HandlerAnalyse::parseHeaderText('#pageSpeedConfigureViewport .content-test');

/**
 * Size element
 */

$sizeElement = liw\Programming\analyse\HandlerAnalyse::parseHeaderText('#pageSpeedSizeTapTargetsAppropriately .info-test');

$sizeElementDesk = liw\Programming\analyse\HandlerAnalyse::parseHeaderText('#pageSpeedSizeTapTargetsAppropriately  .content-test');

/**
 * Size text
 */

$sizeText = liw\Programming\analyse\HandlerAnalyse::parseHeaderText('#pageSpeedUseLegibleFontSizes .info-test');

$sizeTextDesk = liw\Programming\analyse\HandlerAnalyse::parseHeaderText('#pageSpeedUseLegibleFontSizes  .content-test');

/**
 * Plagins
 */

$plugins = liw\Programming\analyse\HandlerAnalyse::parseHeaderText('#pageSpeedAvoidPlugins .info-test');

$pluginsDesk = liw\Programming\analyse\HandlerAnalyse::parseHeaderText('#pageSpeedAvoidPlugins .content-test');

/**
 * Window flow
 */

$flowWindow = liw\Programming\analyse\HandlerAnalyse::parseHeaderText('#pageSpeedAvoidInterstitials .info-test');

$flowWindowDesk = liw\Programming\analyse\HandlerAnalyse::parseHeaderText('#pageSpeedAvoidInterstitials .content-test');


/**
 * Check Mobile Block
 */

$checkViewScrin = liw\Programming\analyse\HandlerAnalyse::parseHeaderSelect('#pageSpeedSizeContentToViewport > div.check-test.test-body', 'test-status');

$checkViewPort = liw\Programming\analyse\HandlerAnalyse::parseHeaderSelect('#pageSpeedConfigureViewport > div.check-test.test-body', 'test-status');

$checksizeElement = liw\Programming\analyse\HandlerAnalyse::parseHeaderSelect('#pageSpeedSizeTapTargetsAppropriately > div.check-test.test-body', 'test-status');

$checksizeWord = liw\Programming\analyse\HandlerAnalyse::parseHeaderSelect('#pageSpeedUseLegibleFontSizes > div.check-test.test-body', 'test-status');

$checkPlugins = liw\Programming\analyse\HandlerAnalyse::parseHeaderSelect('#pageSpeedAvoidPlugins > div.check-test.test-body', 'test-status');

$checkFlowWindow = liw\Programming\analyse\HandlerAnalyse::parseHeaderSelect('#pageSpeedAvoidInterstitials > div.check-test.test-body', 'test-status');

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
    ++$yellow;
} else {
    ++$green;
}

/**
 * Social Online
 */

$socialOnlDesk = liw\Programming\analyse\HandlerAnalyse::parseHeaderText('#socialCounters .content-test p');
$socialOnlDesk2 = liw\Programming\analyse\HandlerAnalyse::parseHeaderHtml('#socialCounters .content-test table');

/**
 * Facebook
 */

$facebook = liw\Programming\analyse\HandlerAnalyse::parseHeaderHtml('#facebookSocial .content-test');

$vkontakte = liw\Programming\analyse\HandlerAnalyse::parseHeaderHtml('#vkontakteSocial .content-test');

$googlePlus = liw\Programming\analyse\HandlerAnalyse::parseHeaderHtml('#googlePlusSocial .content-test');

$twitter = liw\Programming\analyse\HandlerAnalyse::parseHeaderHtml('#twitterSocial .content-test');



/**
 * Social Check Red or Green!
 */

$checkSocial = liw\Programming\analyse\HandlerAnalyse::parseHeaderSelect('#socialCounters > div.check-test.test-body', 'test-status');

$checkFacebook = liw\Programming\analyse\HandlerAnalyse::parseHeaderSelect('#facebookSocial > div.check-test.test-body', 'test-status');

$checkVkontakte = liw\Programming\analyse\HandlerAnalyse::parseHeaderSelect('#vkontakteSocial > div.check-test.test-body', 'test-status');

$checkGooglePlus = liw\Programming\analyse\HandlerAnalyse::parseHeaderSelect('#googlePlusSocial > div.check-test.test-body', 'test-status');

$checkTwitter = liw\Programming\analyse\HandlerAnalyse::parseHeaderSelect('#twitterSocial > div.check-test.test-body', 'test-status');

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
    ++$yellow;
} else {
    ++$green;
}