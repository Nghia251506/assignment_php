<?php

class ArticleController extends Controller
{
    public function list()
    {
        $ArticleModel = $this->model('ArticleModel');
        $article = $ArticleModel->getAllArticles();
        $this->view('shows/list', ['shows' => $article]);
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $title = $_POST['title'];
            $content = $_POST['content'];
            $image_url = $_POST['image_url'];
            $video_url = $_POST['video_url'];
            $created_by = $_SESSION['id'];

            $articleModel = $this->model('ArticleModel');
            $articleModel->addProduct($title, $content, $image_url, $video_url, $created_by);

            header("Location: /articles/list");
        } else {
            $this->view('articles/add');
        }
    }
}
