<?php
function route($action, $db)
{
    $eventController = new EventController($db);
    $adminController = new AdminController($db);
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
        case 'add_event':
            $adminController->showEventForm();
            break;

        case 'edit_event':
            $id = $_GET['id'] ?? null;
            $adminController->showEventForm($id);
            break;

        case 'save_event':
            $adminController->saveEvent();
            break;

        case 'delete_event':
            $id = $_GET['id'] ?? null;
            $adminController->deleteEvent($id);
            break;

        default:
            $eventController->listEvents();
            break;
    }
}
