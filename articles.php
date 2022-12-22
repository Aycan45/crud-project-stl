<?php 
   include("./includes/header.inc.php");
    
   require_once("./includes/auth_user.php");

   include("./classes/database.class.php");
   include("./classes/articles.class.php");
   include("./controllers/articles.controller.php");

   $articles = new ArticleController;

?>
   <a type="button" class="btn btn-success m-3" href="./article-add.php">Add article</a>
 <table class="table table-sm">
       <thead>
           <tr>
               <th scope="col">Title</th>
               <th scope="col">Text</th>
               <th scope="col">Category</th>
           </tr>
       </thead>
   <?php 
        $articles->showAllArticles();
   ?>
 </table>