<?php
  
$id = $_POST['id'];
$person = $_POST['person'];
$day = $_POST['day'];
$month = $_POST['month'];
$year =$_POST['year'];

$con = mysqli_connect("localhost", "amans_Ariaan", "Ny9AkNCrl", "amans_database");
//$con = mysqli_connect("localhost", "root", "", "calendar");
$sql = "UPDATE birthdays SET person = '$person', day = '$day' , month = '$month' , year = '$year' WHERE id = '$id'";

$query = mysqli_query($con, $sql);

header('Location: index.php');
