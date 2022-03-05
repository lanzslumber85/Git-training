<?php
  if (!isset($_GET["nama"]) || !isset($_GET["jurusan"]) || !isset($_GET["nrp"]) || !isset($_GET["email"])) {
    header("Location: welcome.php");
    exit;
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile Pelajar</title>
</head>
<body>

  <?php
    echo <<<END
      <li><img src=$_GET[gambar] /></li>
      <li>$_GET[nama]</li>
      <li>$_GET[jurusan]</li>
      <li>$_GET[nrp]</li>
      <li>$_GET[email]</li>
    END;
  ?>  

  <p><a href="senaraiPelajar.php">Back</a></p>
</body>
</html>