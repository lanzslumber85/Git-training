<?php
  require 'functions.php';

  $nrp = $_GET["nrp"];
  
  $query = "DELETE FROM mahasiswa WHERE nrp=$nrp";

  $resultQuery = query($query);
  $resultQuerycleardb = querycleardb($query);

  if ($resultQuerycleardb && $resultQuery) {
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