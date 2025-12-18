<?php
function route($action, $db) {
    $eventController = new EventController($db);
    
    switch ($action) {
        case 'list':
            $eventController->listEvents();
            break;
        case 'details':
            $id = $_GET['id'] ?? null;
            $eventController->showDetails($id);
            break;

            default:
            $eventController->listEvents();
            break;
    }
}