<?php 

include("../classes/database.class.php");
include("../classes/admins.class.php");
include("../controllers/admins.controller.php");


if (isset($_POST['add'])) {

    $admin = new AdminsController;
    
    $username = $_POST['username'];
    $password= $_POST['password'];
        
    $admin->addAdmin($username, $password);
    echo 'Admin added succesfully';
    header('refresh: 2 url=../admins.php');
      
}

?>