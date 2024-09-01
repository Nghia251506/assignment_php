<?php

class UserModel extends Model {
    public function getAllUsers() {
        $sql = "SELECT * FROM users";
        return $this->db->query($sql)->fetch_all(MYSQLI_ASSOC);
    }

    // Other CRUD operations for users
}
