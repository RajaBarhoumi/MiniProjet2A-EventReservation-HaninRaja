<?php
class AdminController {
    private $db;
    private $adminModel;
    private $eventModel;

    public function __construct($db) {
        $this->db = $db;
        $this->adminModel = new Admin($db);
        $this->eventModel = new Event($db);
    }

    public function login() {
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

    public function logout() {
        session_start();
        session_unset();  
        session_destroy(); 
        header("Location: index.php?action=admin_login");
        exit();
    }
}
?>