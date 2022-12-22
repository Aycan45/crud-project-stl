<?php


class Login extends DataBase{

    protected function getUser($username, $password)
    {
        
        $statement = $this->connect()->prepare("SELECT * FROM users WHERE username = :username");  

        $statement->bindValue('username', $username, PDO::PARAM_STR);

        $statement->execute();

        $result = $statement->fetch(PDO::FETCH_ASSOC);

        try {
            if (!$statement->execute()) {
        
                $statement = null;
        
                header("location: ../index.php?error=stmtfailed1");
        
                exit();

            }
        } catch (Exception $e) {

            echo $e->getMessage();
            
            header("location: ../login.php");
        
        }

        if ($statement->rowCount() == 0) {
            
            echo 'User not found';

            
            header("refresh: 3; url=../login.php");

        }
        else if($statement->rowCount() == 1){

            if ($password == $result["password"]) {

                    header("location: ../index.php");

            }
            else {

                echo 'Wrong password';

                header("refresh: 3; url=../login.php");

            }
        }
        
    }

} 



