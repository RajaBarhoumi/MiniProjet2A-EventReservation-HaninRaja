<?php
require_once '../app/models/Event.php';

require_once '../app/models/Reservation.php';
class EventController
{
    private $eventModel;
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
        $this->eventModel = new Event($db);
    }

    public function listEvents()
    {
        $stmt = $this->eventModel->readAll();
        $events = $stmt->fetchAll(PDO::FETCH_ASSOC);

        include_once '../app/views/events/list.php';
    }

    public function showDetails($id)
    {
        $event = $this->eventModel->getById($id);
        include_once __DIR__ . '/../views/events/details.php';
    }


    public function reserve()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $reservation = new Reservation($this->db);
            $reservation->event_id = $_POST['event_id'];
            $reservation->name = $_POST['name'];
            $reservation->email = $_POST['email'];
            $reservation->phone = $_POST['phone'];

            if ($reservation->create()) {
                header("Location: index.php?action=details&id=" . $_POST['event_id'] . "&success=1");
                exit();
            } else {
                header("Location: index.php?action=details&id=" . $_POST['event_id'] . "&error=1");
                exit();
            }
        }
    }
}
