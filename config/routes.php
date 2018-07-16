<?php
$request_uri = explode('/', explode('?', $_SERVER['REQUEST_URI'], 2)[0]);
list($_base, $_model, $_action, $_param) = $request_uri;

switch ($_model) {
    case '':

        $clientsController = new \App\ClientsController();
        $clients = $clientsController->index();

        $_content = 'client/index.html.php';
        break;
    case 'client':
        switch ($_action) {
            case '':

                $clientsController = new \App\ClientsController();
                $clients = $clientsController->index();

                $_content = 'client/index.html.php';
                break;
            case 'show':

                $clientsController = new \App\ClientsController();
                $client = $clientsController->show($_param);

                $_content = 'client/show.html.php';
                break;
            case 'new':
                $_content = 'client/new.html.php';
                break;
            case 'edit':

                $clientsController = new \App\ClientsController();
                $client = $clientsController->edit($_param);

                $_content = 'client/edit.html.php';
                break;

            case 'create':

                $clientsController = new \App\ClientsController();
                $clients = $clientsController->create($_POST);

                $_content = 'client/index.html.php';
                break;

            case 'update':

                $clientsController = new \App\ClientsController();
                $clients = $clientsController->update($_param, $_POST);

                $_content = 'client/index.html.php';
                break;

            case 'delete':

                $clientsController = new \App\ClientsController();
                $clients = $clientsController->delete($_param);

                $_content = 'client/index.html.php';
                break;

            default:
                header('HTTP/1.0 404 Not Found');
                $_content = '404.html.php';
                break;
        }
        break;
    default:
        header('HTTP/1.0 404 Not Found');
        $_content = '404.html.php';
        break;
}