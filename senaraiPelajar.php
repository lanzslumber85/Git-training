<?php require_once 'dataMahasiswa.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Senarai Pelajar</title>
</head>
<body>

  <h1>Daftar Mahasiswa</h1>
  <?php foreach($mahasiswa as $list) : ?>
    <ul>            
      <?php echo <<<END
        <li><a href="profilePelajar.php?gambar=$list[gambar]&nama=$list[nama]&jurusan=$list[jurusan]&nrp=$list[nrp]&email=$list[email]">$list[nama]</a></li>
        END;
      ?>
    </ul>
  <?php endforeach; ?>
</body>
</html>