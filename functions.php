<?php

  require_once 'connectWithDB.php';

  function query($query) {
    global $conn;

    $result = mysqli_query($conn, $query);
    if (!$result) {
      echo mysqli_error($conn);
    }

    return $result;
  }

  
?>