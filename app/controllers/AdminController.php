<?php
class AdminController
{
    private $db;
    private $adminModel;
    private $eventModel;

    public function __construct($db)
    {
        $this->db = $db;
        $this->adminModel = new Admin($db);
        $this->eventModel = new Event($db);
    }

    private function checkAuth()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        if (!isset($_SESSION['admin_id'])) {
            header("Location: index.php?action=admin_login");
            exit();
        }
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $user = $this->adminModel->login($_POST['username'], $_POST['password']);
            if ($user) {
                session_start();
                $_SESSION['admin_id'] = $user['id'];
                header("Location: index.php?action=admin_dashboard");
            } else {
                echo "Identifiants incorrects.";
            }
        }
        include_once '../app/views/admin/login.php';
    }

    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();
        header("Location: index.php?action=admin_login");
        exit();
    }

    public function dashboard()
    {
        $this->checkAuth();
        $stmt = $this->eventModel->readAll();
        $events = $stmt->fetchAll(PDO::FETCH_ASSOC);
        include_once '../app/views/admin/dashboard.php';
    }
    public function deleteEvent($id)
    {
        $this->checkAuth();
        if ($this->eventModel->delete($id)) {
            header("Location: index.php?action=admin_dashboard");
        }
    }

    public function saveEvent()
    {
        $this->checkAuth();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->eventModel->id = !empty($_POST['id']) ? $_POST['id'] : null;
            $this->eventModel->title = $_POST['title'];
            $this->eventModel->description = $_POST['description'];
            $this->eventModel->date = $_POST['date'];
            $this->eventModel->location = $_POST['location'];
            $this->eventModel->seats = $_POST['seats'];

            $this->eventModel->image = $_POST['image'] ?? 'default.jpg';
            if ($this->eventModel->id) {
                if ($this->eventModel->update()) {
                    header("Location: index.php?action=admin_dashboard&msg=updated");
                }
            } else {
                if ($this->eventModel->create()) {
                    header("Location: index.php?action=admin_dashboard&msg=created");
                }
            }
            exit();
        }
    }

    public function showEventForm($id = null)
    {
        $this->checkAuth();
        $event = null;
        if ($id) {
            $event = $this->eventModel->getById($id);
            if (!$event) {
                echo "Événement introuvable.";
                return;
            }
        }

        include_once '../app/views/admin/form_event.php';
    }
}
