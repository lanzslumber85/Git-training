<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <?php
    if (isset($_POST["nama"])) {
      echo <<<END
        <h1>Hello, $_POST[nama]</h1> 
      END;
    } 
  ?>

  <form action="" method="POST">

    Nama: <input type="text" name="nama"><br>
    <p><button type="Submit" name="submit">Hantar</button></p>

  </form>
</body>
</html>