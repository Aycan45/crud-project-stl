<?php 
    include("../classes/database.class.php");
    include("../classes/articles.class.php");
    include("../controllers/articles.controller.php");

    if(isset($_POST['update']) && isset($_GET['id'])){

        $title = $_POST['title'];
        $text = $_POST['text'];
        $category = $_POST['category'];

        
       
        $id = intval($_GET["id"]);


        $article = new ArticleController;

        $result = $article->updateArticle($id, $title, $text, $category);

        if ($result) {

            header("location: ../articles.php");
        }
        else{

            header("location: ../articles.php");
        }      

    }
?>