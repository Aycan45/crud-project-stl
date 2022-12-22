<?php

include("../classes/database.class.php");
include("../classes/articles.class.php");
include("../controllers/articles.controller.php");


if (isset($_GET['id'])) {
    
    $id = intval($_GET["id"]);

    $article = new ArticleController;

    $result = $article->deleteArticle($id);

    if ($result) {

        header("location: ../articles.php");
    }
    else{

        header("location: ../articles.php");
    }

}    




?>