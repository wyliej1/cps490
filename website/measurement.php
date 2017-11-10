<?php session_start()?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title> Measurement Form</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet"/>
        <link href="formcss.css" rel="stylesheet"/>
    </head>
    <body>
        <main class="Measurements">
             <h2>  Measurement Form</h2>
      <h4>Please enter in your measurements to the best of your ability. This
      will ensure that we pick out the perfect clothes for you!</h4>
      <form id="femaleMeasurement" action="measure.php" method="post">
           <fieldset style="margin-left:25%;width:50%;">
        <table>
          <tr>
            <td>Gender of Clothing</td>
            <td><input type="text" name="gender_clothing" id="gender_clothing" size="5"></td>
          </tr>
          <tr>
            <td>Bust</td>
            <td><input type="text" name="bust" id="bust" size="5"></td>
          </tr>

           <tr>
            <td>Waist</td>
            <td><input type="text" name="waist" id="waist" size="5"></td>

          </tr>
           <tr>
            <td>Hips</td>
            <td><input type="text" name="hips"id="hips" size="5"></td>
          </tr>
          <tr>
            <td>Thigh</td>
            <td><input type="text" name="thigh" id="thigh" size="5"></td>
          </tr>
          <tr>
            <td>Chest</td>
            <td><input type="text" name="chest" id="chest" size="5"></td>
          </tr>
          <tr>
            <td>Waist</td>
            <td><input type="text" name="waist_mas" id="waist_mas" size="5"></td>
          </tr>
           <tr>
            <td>Inseam</td>
            <td><input type="text" name="inseam" id="inseam" size="5"></td>

          </tr>
           <tr>
           </table>
         </fieldset>
            <center> <input type="submit" value="Submit"></center>
      </form>
          </main>
    </body>
</html>
