

<?php
define("DB_SERVER", "localhost");
    define("DB_USERNAME", "root");
    define("DB_PASSWORD", "");
    define("DB_DATABASE", "cps_490");



  $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
  $query = "SELECT COUNT(*) FROM customer";
  $result = mysqli_query($db,$query);
  $rows = mysqli_fetch_row($result);
  $sql=$rows[0];

 $userID=$sql+1;
  $gender="f";
$query = "INSERT INTO customer
(customer_id,salute,f_name,m_int,l_name,gender_clothing,username,password,email,address,zip_code,city,state,country)

VALUES
('$userID','$salute', '$firstName',NULL,'$lastName','$gender','$userName','$password','$email','address','zip_code','city','state','country');";

$customers = mysqli_query($db,$query);



mysqli_close($db);
header('Location: measurement.php');
exit();
?>
