<?php
  // $connection_result = 0;
  // $conn = mysqli_connect("localhost", "root", "mysql", "phpdasar");
  // if ($conn) {
    // $connection_result = 1;
  // }
?>

<?php
  $connection_result = 0;
  //Get Heroku ClearDB connection information
  $cleardb_url = parse_url(getenv("mysql://b74d025e0d4a5b:2421e0c3@us-cdbr-east-05.cleardb.net/heroku_0163e0b24cc7be0?reconnect=true"));
  $cleardb_server = "us-cdbr-east-05.cleardb.net";
  $cleardb_username = "b74d025e0d4a5b";
  $cleardb_password = "2421e0c3";
  $cleardb_db = "heroku_0163e0b24cc7be0";
  $active_group = 'default';
  $query_builder = TRUE;
  // Connect to DB
  $conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
  if ($conn) {
    $connection_result = 1;
  }
?>