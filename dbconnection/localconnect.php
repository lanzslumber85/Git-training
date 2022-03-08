<?php
  $connection_result = 0;
  $conn = mysqli_connect("localhost", "root", "", "phpdasar");
  if ($conn) {
    $connection_result = 1;
  }
