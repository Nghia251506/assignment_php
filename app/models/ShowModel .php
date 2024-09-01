<?php

class ShowModel extends Model {
    public function getAllShows() {
        $sql = "SELECT * FROM shows";
        return $this->db->query($sql)->fetch_all(MYSQLI_ASSOC);
    }

    public function addShow($title, $description, $date, $location, $price, $category, $created_by) {
        $stmt = $this->db->prepare("INSERT INTO shows (title, description, date, location, price, category, created_by) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssi", $title, $description, $date, $location, $price, $category, $created_by);
        return $stmt->execute();
    }

    // Other CRUD operations for shows
}
