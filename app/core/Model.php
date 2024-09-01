<?php

class Model {
    protected $db;

    public function __construct() {
        $this->db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        if ($this->db->connect_error) {
            die("Connection failed: " . $this->db->connect_error);
        }
    }

    // Optional: Destructor to close the database connection
    public function __destruct() {
        if ($this->db) {
            $this->db->close();
        }
    }
}
