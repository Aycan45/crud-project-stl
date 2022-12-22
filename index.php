<?php 
    include("./includes/header.inc.php");  
    require_once("./includes/auth_user.php");
?>

<h1 class="text-center mt-3">Hello, <?php echo $_SESSION['username'];?>!</h1>