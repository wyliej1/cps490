<?php
    define("DB_SERVER", "localhost");
    define("DB_USERNAME", "root");
    define("DB_PASSWORD", "");
    define("DB_DATABASE", "cps_490");
    $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
    session_start();
    
    if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id FROM admin WHERE username = '$myusername' and passcode = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
		
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
      }else {
         $error = "Incorrect password";
      }
   }
?>
<html>  
   <head>
      <title>Login Page</title>
   </head>
   <body>
   <div>
      <form action = "" method = "post">
      <td>Username: <input type="text" name="username" id="username" size="11"></td>
      <td>Password: <input type = "password" name = "password" class = "box" /></td>
   </div>
   </body>
</xhtml>
