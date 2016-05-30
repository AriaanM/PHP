<?php

	$con = mysqli_connect("localhost", "amans_Ariaan", "Ny9AkNCrl", "amans_database");
    //$con = mysqli_connect("localhost", "root", "", "calendar");
  error_reporting(0);
  if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if (isset($_GET['delete'])and isset($_GET['id'])){
  $delete = $_GET['delete'];
  $id = $_GET['id'];
}else {
  $delete = "";
  $sql = "";
} 

if ($delete) {
  mysqli_query($con, "DELETE FROM birthdays WHERE id = '$id'");
} 

$sql = "SELECT FROM  birthday";
$result = mysqli_query($con, $sql);
$output = mysqli_fetch()_all($result, MYSQLI_ASSOC);

?>
<!doctype html>

<html>
<head>
<title>Verjaardagskalender</title>
<link href="main.css" rel="stylesheet" type="text/css">
<meta charset="UTF-8">
</head>
<H1> Are you sure? </H1> 
<a href ="index.php?delete=true&id=<?$data['0'];?>"><button> Yes </button> </a>

<a href ="index.php>"<button> No </button> </a>
