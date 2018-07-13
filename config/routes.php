<?php

$request_uri = explode('/', explode('?', $_SERVER['REQUEST_URI'], 2)[0]);
list($_base, $_model, $_action, $_param) = $request_uri;

switch ($_model) {
    case '':
        $_content = 'client/index.php';
        break;
    case 'client':
        switch ($_action) {
            case '':
                $_content = 'client/index.php';
                break;
            case 'show':
                $_content = 'client/show.php';
                break;
            case 'new':
                $_content = 'client/new.php';
                break;
            case 'edit':
                $_content = 'client/edit.php';
                break;
            default:
                header('HTTP/1.0 404 Not Found');
                $_content = '404.php';
                break;
        }
        break;
    default:
        header('HTTP/1.0 404 Not Found');
        $_content = '404.php';
        break;
}