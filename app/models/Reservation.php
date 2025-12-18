<?php
class Reservation {
    private $conn;
    private $table_name = "reservations";

    public $event_id;
    public $name;
    public $email;
    public $phone;

    public function __construct($db) {
        $this->conn = $db;
    }

   public function create() {
    $query = "INSERT INTO " . $this->table_name . " 
              SET event_id=:event_id, name=:name, email=:email, phone=:phone";

    $stmt = $this->conn->prepare($query);

    $name  = htmlspecialchars(strip_tags($this->name));
    $email = htmlspecialchars(strip_tags($this->email));
    $phone = htmlspecialchars(strip_tags($this->phone));

    $stmt->bindParam(":event_id", $this->event_id);
    $stmt->bindParam(":name", $name);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":phone", $phone);

    return $stmt->execute();
}

}
?>