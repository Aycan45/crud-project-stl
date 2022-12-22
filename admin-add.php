<?php
 include("./includes/header.inc.php");
 require_once("./includes/auth_user.php");
?>
<body>
    <div class="row justify-content-center m-5">
        <div class="col-5">
            <h2>Add admin</h2>
            <form action="./crud-action/add-admin-action.php" method="POST">
                <label for="username" class="form-label">Username:</label>
                <div class="mb-3">
                    <input type="text" name="username" class="col-8 p-1">
                </div>
                <label for="password" class="form-label">Password:</label>
                <div class="mb-3">
                    <input type="password" name="password" class="col-8 p-1">
                </div>
                <div class="col-7 mx-auto">
                    <input type="submit" name="add" class="btn btn-primary col-5" value="Add admin">
                </div>
            </form>
        </div>
    </div>
</body>
<?php

?>