<?php session_start()?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Create Customer Account</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <script type="text/javascript" src="accountValidator.js"></script>
         <link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet"/>
         <script>
         .body
         { font-family: 'Fira Sans', sans-serif;
           background-color:black;
         }
         </script>

    </head>
    <body>
        <div>Create Account </div>
        <main class="createAccount">

      <h4>Please fill out this form to start shopping. We are excited to start shopping with you! </h4>
      <form id="customerInfo" action="reg.php" method="post" onsubmit="return validateRegistrationForm();">
       <fieldset style="margin-left:25%;width:50%;">
           <legend><em>User Information</em></legend><br>
        <table>

    	  <tr>
            <td>Salutation:</td>
            <td><select name="salute">
              <option>&nbsp;</option>
              <option>Mrs.</option>
              <option>Ms.</option>
              <option>Mr.</option>
            </select></td>
          </tr>
          <tr>
            <td>First Name:</td>
            <td><input type="text" name="firstName" id="firstName" size="40"></td>
          </tr>
          <tr>
            <td>Last Name:</td>
            <td><input type="text" name="lastName" id="lastName" size="40"></td>
          </tr>

          <tr>
            <td>E-mail Address:</td>
            <td><input type="text" name="email" id="email" size="40"></td>
          </tr>
          <tr>
            <td>Phone Number:</td>
            <td><input type="text" name="phone"  id="phone" size="40"></td>
          </tr>
          <tr>
            <td>Username:</td>
            <td><input type="text" name="username"  id="userName" size="40"></td>
          </tr>
          <tr>
            <td>Password:</td>
            <td><input type="text" name="password" id="password" size="40"></td>
          </tr>
          <tr>
           <!-- <td>Confirm Password:</td>
            <td><input type="text" name="password" size="40"></td> !-->
          </tr>

        </table>
            </fieldset>
      <center>  <input type="submit" value="Submit"></center>
      </form>
    </main>
    </body>
</html>
