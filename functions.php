<?php

require_once 'dbconnection/localconnect.php';

function query($query)
{
  global $conn;
  // echo "line7 functions.php: ".$query."<br>";

  $result = mysqli_query($conn, $query);

  if (!$result) {
    echo mysqli_error($conn);
  }

  return $result;
}

function cari($query)
{
  global $conn;
  // echo "line21 fucntions.php: " . $query . "<br>";

  $result = mysqli_query($conn, $query);

  if (!$result) {
    echo mysqli_error($conn);
  }

  return $result;
}

function tambah() {
  
}
