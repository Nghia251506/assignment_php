<?php

class ProductController extends Controller {
    public function list() {
        $productModel = $this->model('ProductModel');
        $products = $productModel->getAllProducts();
        $this->view('products/list', ['products' => $products]);
    }

    public function add() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'];
            $description = $_POST['description'];
            $price = $_POST['price'];
            $image_url = $_POST['image_url'];

            $productModel = $this->model('ProductModel');
            $productModel->addProduct($name, $description, $price, $image_url);

            header("Location: /product/list");
        } else {
            $this->view('products/add');
        }
    }
}
