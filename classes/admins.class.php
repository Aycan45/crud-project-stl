<?php 

    class Admins extends DataBase{
        
        protected function getAllAdmins(){

            $statement = $this->connect()->query("SELECT * FROM users");

            if ($statement->rowCount() > 0) {
                
                while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                    $admins[] = $row;
                }

                return $admins;

            }


        }

        protected function setAdmin($username, $password)
        {
            $statement = $this->connect()->prepare("INSERT INTO users (`username`, `password`) VALUES (:username,:password);");  
            
            $statement->bindValue('username', $username, PDO::PARAM_STR);
    
            $statement->bindValue('password', $password, PDO::PARAM_STR);
    
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
    
        protected function editAdmin($id ,$username, $password)
        {
            $statement = $this->connect()->prepare("UPDATE users SET username=:username, password=:password WHERE id=:id ");  
            
            $statement->bindValue("id", $id, PDO::PARAM_INT);

            $statement->bindValue('username', $username, PDO::PARAM_STR);
    
            $statement->bindValue('password', $password, PDO::PARAM_STR);
    
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