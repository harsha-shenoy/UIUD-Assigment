<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Slots Status</title>
 <link rel="stylesheet" href="display_slots.css"> 
</head>
<body>
 

<?php

$state = $_POST['state'];
$district = $_POST['district'];
$date = $_POST['date'];

?>

<h3> State:</h3>  <?php echo $state ?> 
<h3> District:  </h3> <?php echo $district ?> 
<h3> Date: </h3> <?php echo $date ?>

<h2>Slots Status</h2>

<table>
  <tr>
    <th>Hospital</th>
    <th>Available Slots</th>
    <th>Booked Slots</th>
    <th>Total Slots</th>
  </tr>
  <tr>
    <td>A</td>
    <td>0</td>
    <td>200</td>
    <td>134</td>
  </tr>
  <tr>
    <td>CB</td>
    <td>120</td>
    <td>250</td>
    <td>050</td>
  </tr>
  <tr>
    <td>C</td>
    <td>230</td>
    <td>170</td>
    <td>250</td>
  </tr>
  <tr>
    <td>D</td>s
    <td>154</td>
    <td>050</td>
    <td>230</td>
  </tr>
  <tr>
    <td>E</td>
    <td>203</td>
    <td>175</td>
    <td>17</td>
  </tr>
</table>


</body>
</html>



