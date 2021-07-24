<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Covid-19 : Slots Booking</title>
<link rel="stylesheet" href="slotsAvailability.css"> 
</head>
<body>
 


<form class="modal-content animate" action="./display_slots.php" method="post">

<h1> Selecting State District and Date (Slots) using list menus </h1>
</br>
</br>
<p>Please Select the Sate District and Date to Display the slots</p>

<ul>
  <li><a href="index.php">Home</a></li>
  </br>
</br>
  <li>
  <select name="state" id="state">
        <option value="state1">Karnataka</option>
        <option value="state2">Uttar Pradesh</option>
        <option value="state3">Haryana</option>
        <option value="state4">Gujarat</option>
  </select>
  </li>
</br>
</br>
  <li>
     <select name="district" id="district">
        <option value="district1">district1</option>
        <option value="district2">district2</option>
        <option value="district3">district3</option>
        <option value="district4">district4</option>
     </select>
     <br><br>
  </li>
</br>
</br>
  <li><input type="date" id="date" name="date"></li>
  </br>
</br>
  <li><button type="submit">Check Availability</button></li>
  </br>
</br>
</ul>

</form>
</body>
</html>