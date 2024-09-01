<?php

class ArticleModel extends Model {
    public function getAllArticles() {
        $sql = "SELECT * FROM articles";
        return $this->db->query($sql)->fetch_all(MYSQLI_ASSOC);
    }

    public function addArticle($title, $content, $image_url, $video_url, $created_by) {
        $stmt = $this->db->prepare("INSERT INTO articles (title, content, image_url, video_url, created_by) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssi", $title, $content, $image_url, $video_url, $created_by);
        return $stmt->execute();
    }

    // Other CRUD operations for articles
}
