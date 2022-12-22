<?php
 include("./includes/header.inc.php");
 require_once("./includes/auth_user.php");
?>
<body>
    <div class="row justify-content-center m-5">
        <div class="col-5">
            <h2>Update admin</h2>
            <form action="./crud-action/update-admin-action.php?id=<?= $_GET["id"]?>" method="POST">
                <label for="username" class="form-label">Username:</label>
                <div class="mb-3">
                    <input type="text" name="username" class="col-8 p-1">
                </div>
                <label for="password" class="form-label">Password:</label>
                <div class="mb-3">
                    <input type="password" name="password" class="col-8 p-1">
                </div>
                <div class="col-7 mx-auto">
                    <input type="submit" name="update" class="btn btn-primary col-5" value="Update admin">
                </div>
            </form>
        </div>
    </div>
</body>
<?php

?>