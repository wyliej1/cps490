<?php
define("DB_SERVER", "localhost");
    define("DB_USERNAME", "root");
    define("DB_PASSWORD", "");
    define("DB_DATABASE", "cps_490");



  $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
  $query = "SELECT COUNT(*) FROM customer";
  $result = mysqli_query($db,$query);
  $rows = mysqli_fetch_row($result);
  $userID=$rows[0];





  ?>
