<?php include './config/database.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <div class="container">
      <div class="row">
      <div class="col-3">
        <img style="max-width: 100%; height: auto;" src="./assets/logo-full.png" alt="">
      </div>
      <div class="col-9">
        <form action="register.php" method="post">
            <h1>Log In</h1>
            <div class="form-floating mb-3">
              <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="user_id">
              <label for="floatingInput">User Id</label>
            </div>
            <div class="form-floating">
              <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="user_password">
              <label for="floatingPassword">Password</label>
            </div>
            <br>
            <button class="btn btn-primary" type="submit" value="submit" name="submit">Login</button>
        </form>
      </div>
      </div>
    </div>
</body>
</html>