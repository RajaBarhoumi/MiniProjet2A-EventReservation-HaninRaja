<?php
function route($action, $db)
{
    $eventController = new EventController($db);

    switch ($action) {
        case 'list':
            $eventController->listEvents();
            break;
        case 'details':
            $id = $_GET['id'] ?? null;
            $eventController->showDetails($id);
            break;
        case 'reserve':
            $eventController->reserve();
            break;

        case 'admin_login':
            $adminController->login();
            break;

        case 'logout':
            session_destroy();
            header("Location: index.php");
            break;

        case 'admin_dashboard':
            $adminController->dashboard();
            break;

        default:
            $eventController->listEvents();
            break;
    }
}
