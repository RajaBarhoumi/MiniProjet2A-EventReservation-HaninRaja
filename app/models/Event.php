<?php
class Event {
    private $conn;
    private $table_name = "events";

    public $id;
    public $title;
    public $description;
    public $date;
    public $location;
    public $seats;
    public $image;

    public function __construct($db) {
        $this->conn = $db;
    }
    public function readAll() {
        $query = "SELECT * FROM " . $this->table_name . " ORDER BY date ASC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function getById($id) {
        $query = "SELECT * FROM " . $this->table_name . " WHERE id = :id LIMIT 0,1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }   
    public function create() {
        $query = "INSERT INTO " . $this->table_name . " 
                  SET title=:title, description=:description, date=:date, 
                      location=:location, seats=:seats, image=:image";

        $stmt = $this->conn->prepare($query);
        $this->title = htmlspecialchars(strip_tags($this->title));
        $this->description = htmlspecialchars(strip_tags($this->description));
        $stmt->bindParam(':title', $this->title);
        $stmt->bindParam(':description', $this->description);
        $stmt->bindParam(':date', $this->date);
        $stmt->bindParam(':location', $this->location);
        $stmt->bindParam(':seats', $this->seats);
        $stmt->bindParam(':image', $this->image);

        if($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function update() {
        $query = "UPDATE " . $this->table_name . " 
                  SET title=:title, description=:description, date=:date, 
                      location=:location, seats=:seats, image=:image 
                  WHERE id=:id";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':id', $this->id);
        $stmt->bindParam(':title', $this->title);
        $stmt->bindParam(':description', $this->description);
        $stmt->bindParam(':date', $this->date);
        $stmt->bindParam(':location', $this->location);
        $stmt->bindParam(':seats', $this->seats);
        $stmt->bindParam(':image', $this->image);

        if($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function delete($id) {
        $query = "DELETE FROM " . $this->table_name . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);

        if($stmt->execute()) {
            return true;
        }
        return false;
    } 
}
?>