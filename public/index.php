<?php
session_start();
require_once '../app/models/Event.php';
require_once '../app/controllers/EventController.php';
require_once '../config/database.php';
require_once '../config/routes.php';

$database = new Database();
$db = $database->getConnection();
$action = $_GET['action'] ?? 'list';
route($action, $db);