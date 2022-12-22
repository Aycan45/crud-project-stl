<?php

if (isset($_POST['login'])) {

    
    $username = $_POST['username'];
    $password = $_POST['password'];

    session_start();

    
    $_SESSION['username'] = $username;


    include('../classes/database.class.php');
    include('../classes/login.class.php');
    include('../controllers/login.controller.php');

    $login = new LoginController($username, $password);
    $login->loginUser();


}


?>