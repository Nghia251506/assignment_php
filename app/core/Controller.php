<?php

class Controller {
    // Phương thức để tải model
    public function model($model) {
        require_once "app/models/$model.php";
        return new $model();
    }

    // Phương thức để tải view
    public function view($view, $data = []) {
        extract($data); // Trích xuất mảng dữ liệu thành các biến riêng lẻ
        require_once "app/views/$view.php";
    }
}
