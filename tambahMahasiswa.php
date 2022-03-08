<?php
require 'functions.php';

if (isset($_POST["submit"])) {
  $nrp = htmlspecialchars($_POST["nrp"]);
  $nama = htmlspecialchars($_POST["nama"]);
  $email = htmlspecialchars($_POST["email"]);
  $jurusan = htmlspecialchars($_POST["jurusan"]);
  $gambar = htmlspecialchars($_POST["gambar"]);

  $resultQuery = query("INSERT INTO mahasiswa (nama, nrp, email, jurusan, gambar) VALUES ('$nama', '$nrp', '$email', '$jurusan', '$gambar')");
  $resultQuerycleardb = querycleardb("INSERT INTO mahasiswa (nama, nrp, email, jurusan, gambar) VALUES ('$nama', '$nrp', '$email', '$jurusan', '$gambar')");

  if ($resultQuerycleardb && $resultQuery) {
    echo <<<END
      <script>
        alert('Add data success.');
        document.location.href = 'index.php';
      </script>
      END;
  } else {
    echo <<<END
      <script>
        alert('Unsuccessful.');
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
  <title>Tambah Mahasiswa</title>
</head>

<body>
  <h1>Tambah Data Mahasiswa</h1>

  <form action="" method="POST">
    <ul>
      <li>
        <label for="nrp">NRP: </label>
        <input type="text" name="nrp" id="nrp" required>
      </li>

      <li>
        <label for="nama">Nama: </label>
        <input type="text" name="nama" id="nama" required>
      </li>

      <li>
        <label for="email">Email: </label>
        <input type="email" name="email" id="email">
      </li>

      <li>
        <label for="jurusan">Jurusan: </label>
        <input type="text" name="jurusan" id="jurusan" required>
      </li>

      <li>
        <label for="gambar">Gambar: </label>
        <input type="file" name="gambar" id="gambar">
      </li>

      <li>
        <button type="submit" name="submit">Tambah</button>
      </li>
    </ul>
  </form>

  <p><a href="index.php">Back</a></p>
</body>

</html>