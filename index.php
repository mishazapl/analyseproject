<?php

/**
 * Вывод ошибок.
 */

error_reporting(-1);
$conf['error_level'] = 2;
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

$green = 0;
$yellow = 0;
$red = 0;

$yellowImg = 'icon_warning.png';
$redImg    = 'icon_error.png';
$greenImg  = 'icon_success.png';

require_once __DIR__ . '/vendor/autoload.php';

require_once __DIR__ . '/phpQuery/src/phpQuery.php';


if (isset($_POST['analys']) && !empty($_POST['url'])) {

    if (parse_url($_POST['url'], PHP_URL_HOST) === null) {
        $link = $_POST['url'];
    } else {
        $link = parse_url($_POST['url'], PHP_URL_HOST);
    }
    $ch = curl_init("https://a.pr-cy.ru/$link/");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_POST, false);
    $html = curl_exec($ch);
    curl_close($ch);
    phpQuery::newDocument($html);

    require_once __DIR__ . '/Programming/analyse/Parse.php';

    phpQuery::unloadDocuments();



    require_once __DIR__ . '/tools/index.php';

} else {
    require_once __DIR__ . '/main.php';
}



