<?php 

    class Articles extends DataBase{

        protected function getAllArticles(){

            $statement = $this->connect()->query("SELECT * FROM articles");

            if ($statement->rowCount() > 0) {
                
                while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                    $articles[] = $row;
                }

                return $articles;

            }


        }


        protected function setArticle($title, $text, $category)
        {
            $statement = $this->connect()->prepare("INSERT INTO articles (`title`, `text`, `category`) VALUES (:title, :text, :category);");  
            
            $statement->bindValue('title', $title, PDO::PARAM_STR);
    
            $statement->bindValue('text', $text, PDO::PARAM_STR);

            $statement->bindValue('category', $category, PDO::PARAM_STR);
    
            try {
                if (!$statement->execute()) {
                    $statement = null;
                    header("location: ./index.php?error=stmtfailed1");
                    exit();
                }
            } catch (Exception $e) {
                echo $e->getMessage();
                exit();
            }
    
            $statement=null;
        }

        protected function editArticle($id , $title, $text, $category)
        {
            $statement = $this->connect()->prepare("UPDATE articles SET title=:title, text=:text, category=:category WHERE id=:id ");  
            
            $statement->bindValue("id", $id, PDO::PARAM_INT);

            $statement->bindValue('title', $title, PDO::PARAM_STR);
    
            $statement->bindValue('text', $text, PDO::PARAM_STR);

            $statement->bindValue('category', $category, PDO::PARAM_STR);
    
            try {
                if (!$statement->execute()) {
                    $statement = null;
                    header("location: ./index.php?error=stmtfailed1");
                    exit();
                }
            } catch (Exception $e) {
                echo $e->getMessage();
                exit();
            }
    
            $statement=null;
        }

    }

?>