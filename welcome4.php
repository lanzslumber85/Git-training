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
    echo <<<END
      <h1>Selamat datang, $_POST[nama]</h1>
    END;
  ?>
  
  <p><a href="welcome3.php">Back</a></p>
</body>
</html>