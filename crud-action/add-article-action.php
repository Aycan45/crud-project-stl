<?php 

    include("../classes/database.class.php");
    include("../classes/articles.class.php");
    include("../controllers/articles.controller.php");


    if (isset($_POST['add'])) {

        $article = new ArticleController;
        
        $title = $_POST['title'];
        $text = $_POST['text'];
        $category = $_POST['category'];
            
        $article->addArticle($title, $text, $category);
        echo 'Article added succesfully';
        header('refresh: 2 url=../articles.php');
        
    }




?>