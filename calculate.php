<?php
define("DB_SERVER", "localhost");
    define("DB_USERNAME", "root");
    define("DB_PASSWORD", "");
    define("DB_DATABASE", "cps_490");

  $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);


/* Select row by user ID number */

/* Select brand from brand ID */

/* Do a query with top size */

/* Do a query with botton size */
$customers = mysqli_query($db,$query);
  mysqli_close($db);
  ?>
