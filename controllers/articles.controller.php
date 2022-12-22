<?php 

    class ArticleController extends Articles{

        public function showAllArticles(){

            $articles= $this->getAllArticles();

            foreach((array) $articles as $article){
            ?>
                <tbody>
                    <tr>
                    <td><?= $article['title']?></td>
                    <td><?= $article['text']?></td>
                    <td><?= $article['category']?></td>
                    <td><a href="./update-article.php?id=<?= $article["ID"]?>" class="btn btn-info">Update</a></td>
                    <td><a href="./crud-action/delete-article-action.php?id=<?= $article["ID"]?>" class="btn btn-danger">Delete</a></td>
                    </tr>
                    <tr>
                </tbody>

            <?php
            }

        }


        public function addArticle($title, $text, $category){
        
            if ($this->emptyInput($title, $text, $category) == true) {
                header("location: ./article-add.php?error=emptyinput");
                exit();
            }
            else
                $this->setArticle($title, $text, $category);
    
        }

        public function deleteArticle($id){

            $statement = $this->connect()->prepare("DELETE FROM articles WHERE ID = :id");

            $statement->bindValue("id", $id, PDO::PARAM_INT);

            $result = $statement->execute();

            if ($result) {
                return true;
            }
            else{
                return false;
            }


        }

        public function updateArticle($id , $title, $text, $category){
        
            if ($this->emptyInput($title, $text, $category) == true) {
                header("location: ./admin-edit.php?error=emptyinput");
                exit();
            }
            else
                $this->editArticle($id, $title, $text, $category);
    
        }

        private function emptyInput($title, $text, $category)
        {
    
            if (!$title) {
                return false;
            }
            if (!$text) {
                return false;
            }
            if (!$category) {
                return false;
            }
        }

    }
    


?>