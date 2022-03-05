<?php
  require 'functions.php';

  $id = $_GET["id"];
  
  $query = "DELETE FROM mahasiswa WHERE id=$id";

  $resultQuery = query($query);

  if ($resultQuery) {
    echo <<<END
    <script>
      alert('Row deleted.');
      document.location.href = 'index.php';
    </script>
    END;
  } else {
    echo <<<END
    <script>
      alert('Failed to delete row.');
      document.location.href = 'index.php';
    </script>
    END;
  }
?>