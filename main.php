<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
  width:70%;
}
</style>
</head>
<body>


<form method="post" action="main.php" enctype="multipart/form-data">
<table>
  <tr>
    <th>BUS ID</th>
    <td><input type="text" name="busid" placeholder="Enter bus id"></td>
  </tr>
  <tr>
  <th>Arrival Place</th> 
    <td><input type="text" name="arrivalplace" placeholder="Enter arrival place"></td>
  </tr>

  <tr>
  <th>Destination Place</th>
    <td><input type="text" name="destinationplace" placeholder="Enter destination place"></td>
  </tr>

  <tr>
  <th>Arrival Time</th>
  <td><input type="text" name="arrivaltime" placeholder="Enter arrival time"></td>
</tr>

<tr>
<th>Destination Time</th>
<td><input type="text" name="destinationtime" placeholder="Enter destination time"></td>
</tr>

<tr>
<th>Distance</th>
<td><input type="text" name="distance" placeholder="distance"></td>
</tr>

<tr>
<th>Price</th>
<td><input type="text" name="price" placeholder=""></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" name="submit" value="submit" ></td>
</tr>


</table>
</form>

</body>
</html>


<?php

session_start();

if($_SESSION['uid'])
{
  echo $_SESSION['uid'];
}
else
{
  header('location:admin.php');
}
?>
  <?php


if(isset($_POST['submit']))
{
  include('config.php');
  $busid=$_POST['busid'];
  $arrivalplace=$_POST['arrivalplace'];
  $destinationplace=$_POST['destinationplace'];
  $arrivaltime=$_POST['arrivaltime'];
  $destinationtime=$_POST['destinationtime'];
  $distance=$_POST['distance'];
  $price=$_POST['price'];
 
  $insert = "insert into schedule(bus_id,arrival_place,destination_place,arrival_time,destination_time,distance,price) values('$busid',' $arrivalplace',' $destinationplace','$arrivaltime',' $destinationtime','$distance','$price') ";
	mysqli_query($link,$insert) or die(mysqli_error($link));
	echo "Insertion is performed Successfully ";
	
	
}	
?>