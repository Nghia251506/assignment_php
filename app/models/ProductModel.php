<?php

class ProductModel extends Model {
    public function getAllProducts() {
        $sql = "SELECT * FROM products";
        return $this->db->query($sql)->fetch_all(MYSQLI_ASSOC);
    }

    public function addProduct($name, $description, $price, $image_url) {
        $stmt = $this->db->prepare("INSERT INTO products (name, description, price, image_url) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssds", $name, $description, $price, $image_url);
        return $stmt->execute();
    }

    // Other CRUD operations for products
}
