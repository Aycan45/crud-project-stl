<?php

 session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>
    <title>Admin dashboard</title>
</head>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Admin panel</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="./index.php">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./admins.php">Admins</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./articles.php">Articles</a>
        </li>
            <?php 
                if ($_SESSION['username']) {

            ?>
            <li class="nav-item">
                <a class="nav-link" href="#"><?php echo $_SESSION['username'];?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./form-actions/logout-action.php">Logout</a>
            </li>
            <?php 
                }   
            ?>
        </ul>
    </div>
    </nav>
