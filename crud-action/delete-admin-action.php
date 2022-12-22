<?php 
    include("../classes/database.class.php");
    include("../classes/admins.class.php");
    include("../controllers/admins.controller.php");
    
    
    if (isset($_GET['id'])) {
        
        $id = intval($_GET["id"]);
    
        $admin = new AdminsController;
    
        $result = $admin->deleteAdmin($id);
    
        if ($result) {
    
            header("location: ../admins.php");
        }
        else{
    
            header("location: ../admins.php");
        }
    
    }    


?>