<?php

class ShowController extends Controller
{
    public function list()
    {
        $ShowModel = $this->model('ShowModel');
        $shows = $ShowModel->getAllShows();
        $this->view('assignment/app/views/shows/list', ['shows' => $shows]);
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $title = $_POST['title'];
            $description = $_POST['description'];
            $date = $_POST['date'];
            $location = $_POST['location'];
            $price = $_POST['price'];
            $category = $_POST['category'];

            $showModel = $this->model('ShowModel');
            $showModel->addProduct($title, $description,$date, $price, $location,$category );

            header("Location: assignment/app/views/shows/list");
        } else {
            $this->view('assignment/app/views/shows/add');
        }
    }
}
