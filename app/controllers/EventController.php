<?php
require_once '../app/models/Event.php';
class EventController {
    private $eventModel;
    private $db;

    public function __construct($db) {
        $this->db = $db;
        $this->eventModel = new Event( $db );
    }

    public function listEvents() {
        $stmt = $this->eventModel->readAll();
        $events = $stmt->fetchAll(PDO::FETCH_ASSOC);

        include_once '../app/views/events/list.php';
    }
}
?>