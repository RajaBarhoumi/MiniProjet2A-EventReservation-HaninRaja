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
    
    public function reserve() {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $reservation = new Reservation($this->db);
        $reservation->event_id = $_POST['event_id'];
        $reservation->name = $_POST['name'];
        $reservation->email = $_POST['email'];
        $reservation->phone = $_POST['phone'];

        if ($reservation->create()) {
            echo "Réservation confirmée !";
        } else {
            echo "Erreur lors de la réservation.";
        }
    }
    }
}
?>