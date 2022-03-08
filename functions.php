<?php

require_once 'dbconnection/localconnect.php';
require_once 'dbconnection/cleardbconnect.php';

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

function querycleardb($query)
{
  global $cleardbconn;
  // echo "line7 functions.php: ".$query."<br>";

  $resultcleardb = mysqli_query($cleardbconn, $query);

  if (!$resultcleardb) {
    echo mysqli_error($cleardbconn);
  }

  return $resultcleardb;
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

function caricleardb($query)
{
  global $cleardbconn;
  // echo "line21 fucntions.php: " . $query . "<br>";

  $resultcleardb = mysqli_query($cleardbconn, $query);

  if (!$resultcleardb) {
    echo mysqli_error($cleardbconn);
  }

  return $resultcleardb;
}
