<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
</head>

<body>
  <h1>Login Admin</h1>

  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
    <label for="username">Username: </label>
    <input type="text" name="username" id="username">
    <label for="password">Password: </label>
    <input type="password" name="password" id="password">
    <button type="submit" name="submit">Login</button>
  </form>

  <?php
  if (isset($_POST["submit"])) {
    if ($_POST["username"] === "admin" && $_POST["password"] === "123") {
      header("Location: adminpage.php");
      exit;
    } else {
      $error = true;
    }
  }
  ?>

  <?php
  if (isset($error)) {
    echo <<<END
        <p style="color: red; font-style: italic">Username or password salah!</p>
      END;
  }
  ?>

</body>

</html>