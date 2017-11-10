<?php



define("DB_SERVER", "localhost");
    define("DB_USERNAME", "root");
    define("DB_PASSWORD", "");
    define("DB_DATABASE", "cps_490");

  $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
  $query = "SELECT COUNT(*) FROM customer";
  $result = mysqli_query($db,$query);
  $rows = mysqli_fetch_row($result);

/*   $userID=$rows[0]; */
  $userID=2;
  $query2 = "SELECT username FROM customer WHERE customer_id= $userID";
  $answer = mysqli_query($db,$query2);


  $userName_m=tester1; 



$query = "INSERT INTO customer_measurements
(customer_id,username,gender_clothing,bust,waist,hips,thigh,chest,waist_mas,inseam)
VALUES
('$userID','$userName_m','$gender_c','$bust','$waist','$hips','$thigh','$chest','$waist_mas','$inseam');";


$customers = mysqli_query($db,$query);



mysqli_close($db);
header('Location: profile.html');
exit();
?>
