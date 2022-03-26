<?php
if (isset($_GET['q']) && $_GET['q']) {
    if(mb_stripos($_GET['q'], '//') !== false || mb_substr($_GET['q'], -1) == '/') {
        while(mb_stripos($_GET['q'], '//') !== false) {
            $_GET['q'] = str_replace('//', '/', $_GET);
        }
        if(mb_substr($_GET['q'], -1) == '/') {
            $_GET['q'] = mb_substr($_GET['q'], 0, strlen($_GET['q']) - 1);
        }
        header('Location: //'.$_SERVER['SERVER_NAME'].'/'.$_GET['q'], true, 301);
        exit();
    }
}
if(!isset($_GET['q']) || !$_GET['q']) {
    return include('home.php');
} else if (file_exists($_GET['q'].'.php')) {
    $canonical = 'https://'.$_SERVER['SERVER_NAME'].'/'.$_GET['q'];
    return include($_GET['q'].'.php');
} else {
    http_response_code(404);
}