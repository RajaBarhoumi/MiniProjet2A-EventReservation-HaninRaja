<?php
function route($action, $db) {
    $eventController = new EventController($db);
    
    switch ($action) {
        case 'list':
            $eventController->listEvents();
            break;

            default:
            $eventController->listEvents();
            break;
    }
}