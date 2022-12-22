<?php 
    include("../classes/database.class.php");
    include("../classes/admins.class.php");
    include("../controllers/admins.controller.php");

    if(isset($_POST['update']) && isset($_GET['id'])){

        $username = $_POST['username'];
        $password = $_POST['password'];

        
       
        $id = intval($_GET["id"]);

        $admin = new AdminsController;

        $result = $admin->updateAdmin($id, $username, $password);

        if ($result) {

            header("location: ../admins.php");
        }
        else{

            header("location: ../admins.php");
        }      

    }
?>