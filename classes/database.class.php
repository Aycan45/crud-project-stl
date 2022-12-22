<?php

class DataBase{

    protected function connect(){

        try{
            
            $username = "root";
            
            $password = "";

            $databasehelper = new PDO("mysql:host=localhost; dbname=crud" , $username, $password);

            $databasehelper->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $databasehelper;

        }
        catch (PDOException $exc){
            
            echo "Error:". $exc->getMessage()."! </br>";
            
            die();
        }
    }


}


?>