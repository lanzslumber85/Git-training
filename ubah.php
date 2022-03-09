<?php
require_once 'functions.php';

$nrp = $_GET["nrp"];

$resultQuery = query("SELECT * FROM mahasiswa WHERE nrp=$nrp");
if ($resultQuery) {
  $dataRow = mysqli_fetch_assoc($resultQuery);
}




if (isset($_POST["submit"])) {
  $nrp = htmlspecialchars($_POST["nrp"]);
  $nama = htmlspecialchars($_POST["nama"]);
  $email = htmlspecialchars($_POST["email"]);
  $jurusan = htmlspecialchars($_POST["jurusan"]);
  $gambar = htmlspecialchars($_POST["gambar"]);

  $resultQuery = query("UPDATE mahasiswa SET nrp = '$nrp', nama = '$nama', email = '$email', jurusan = '$jurusan', gambar = '$gambar' WHERE nrp = $nrp");

  if ($resultQuery) {
    echo <<<END
      <script>
        alert('Ubah data success.');
        document.location.href = 'index.php';
      </script>
      END;
  } else {
    echo <<<END
      <script>
        alert('Ubah data tidak berjaya.');
      </script>
      END;
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data Mahasiswa</title>
</head>

<body>
  <h1>Ubah Data Mahasiswa</h1>

  <form action="" method="POST">

    <p>
      <label for="nrp">NRP: </label>
      <input type="text" name="nrp" id="nrp" value="<?php echo $dataRow["nrp"] ?>" required>
    </p>

    <p>
      <label for="nama">Nama: </label>
      <input type="text" name="nama" id="nama" value="<?php echo $dataRow["nama"] ?>" required>
    </p>

    <p>
      <label for="email">Email: </label>
      <input type="email" name="email" id="email" value="<?php echo $dataRow["email"] ?>">
    </p>

    <p>
      <label for="jurusan">Jurusan: </label>
      <input type="text" name="jurusan" id="jurusan" value="<?php echo $dataRow["jurusan"] ?>" required>
    </p>

    <p>
      <label for="gambar">Gambar: </label>
      <input type="text" name="gambar" id="gambar" value="<?php echo $dataRow["gambar"] ?>">
    </p>

    <p>
      <button type="submit" name="submit">Ubah</button>
    </p>

  </form>

  <p><a href="index.php">Back</a></p>
</body>

</html>