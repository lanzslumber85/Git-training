<?php
  require_once 'connectWithDB.php';
  require_once 'functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Admin</title>
</head>
<body>

  <?php
    if ($connection_result) {
      echo "DB connected!";
    } else {
      echo "DB not connected!";
    }
  ?>

<?php
    $resultQuery = query("SELECT * FROM mahasiswa ORDER BY id DESC");
  ?>

  <h1>Daftar Mahasiswa</h1>

  <p>
    <form action="" method="POST">
      <input type="text" name="keyword" size="30" autofocus placeholder="masukkan keyword carian" autocomplete="">
      <button type="submit" name="cari">Search</button>
    </form>
  </p>

  <?php
    if (isset($_POST["cari"])) {

      $keywordCarian = $_POST["keyword"];
      // echo "line40 index.php: ".$keywordCarian."<br>";    

      $resultQuery = cari("SELECT * FROM mahasiswa WHERE nama LIKE '%$keywordCarian%' OR nrp LIKE '%$keywordCarian%'");
      
    }
  ?>
  
  <p><a href="tambahMahasiswa.php">Tambah mahasiswa</a></p>

  

  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>ID</th>
      <th>Action</th>
      <th>Gambar</th>
      <th>NRP</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Jurusan</th>
    </tr>

    <?php
      while ($dataRow = mysqli_fetch_assoc($resultQuery)) {
        echo <<<END
          <tr>
            <td>$dataRow[id]</td>
            <td><a href="ubah.php?id=$dataRow[id]">Edit</a> | <a href="buangdata.php?id=$dataRow[id]" onclick="return confirm('Confirm?');">Delete</a></td>
            <td><img src="img/$dataRow[gambar]" alt="profile_picture"></td>
            <td>$dataRow[nrp]</td>
            <td>$dataRow[nama]</td>
            <td>$dataRow[email]</td>
            <td>$dataRow[jurusan]</td>
          </tr>
        END;
      }
    ?>
  </table>
</body>
</html>