<?php 
    include("./includes/header.inc.php");
    
    require_once("./includes/auth_user.php");

    include("./classes/database.class.php");
    include("./classes/admins.class.php");
    include("./controllers/admins.controller.php");

    $admins = new AdminsController;

?>
    <a type="button" class="btn btn-success m-3" href="./admin-add.php">Add admin</a>
  <table class="table table-sm">
        <thead>
            <tr>
                <th scope="col">Username</th>
                <th scope="col">Password</th>
            </tr>
        </thead>
    <?php 
         $admins->showAllAdmins();
    ?>
  </table>