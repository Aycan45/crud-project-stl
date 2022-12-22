<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login CRUD</title>
</head>
<body>
    <h2 class="text-center mt-5">PHP MVC CRUD project</h2>
    <div class="card col-6 mx-auto mt-5" >
        <div class="card-body">
            <h5 class="card-title">Admin Login Panel</h5>
            <form method="POST" action="./form-actions/login-action.php">
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" name="username" >
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <button type="submit" name="login" class="btn btn-primary mt-2">Log in</button>
            </form>
        </div>
    </div>
</body>
</html>