<?php
    $con = mysqli_connect("localhost", "amans_Ariaan", "Ny9AkNCrl", "amans_database");
    error_reporting(0);
    if (mysqli_connect_errno()) {
    echo "no connection";
  }

//error_reporting(0);

    if (isset($_GET['delete']) and isset($_GET['id'])) {
      $delete = $_GET['delete'];
      $id = $_GET['id'];
    } else {
      $delete = '';
      $id = '';
    }

    if ($delete) {
      mysqli_query($con, "DELETE FROM birthdays WHERE id = '$id'");
    }
  $sql = "SELECT * FROM birthdays ORDER BY day;";
  $result = mysqli_query($con, $sql)
  or die(mysqli_error($con));
  $birthdays = mysqli_fetch_all($result, MYSQLI_ASSOC);
  $months = cal_info(1);
  $months = $months['months'];
?>

<!doctype html> 

<html>
  <head>
    <title>Verjaardagskalender</title>
      <link href="main.css" rel="stylesheet" type="text/css">
  </head>
<body>
<p><a href="add.php"> Toevoegen </a></p>
 <?php
  $i = 1;
  foreach ($months as $month) {
    echo "<h1>" . $month . "</h1>" . "<br>";
    foreach ($birthdays as $birthday) {
      if ($birthday['month'] == $i) {
          ?> <a href='wijzig.php?id=<?=$birthday['id']?>'> <?=$birthday['person'];?> </a>
     <?=" is jarig op de " ,
     $birthday['day'] . "e, is geboren in " .  " " .    
     $birthday['year']; ; ?>  <a href='index.php?delete=true&id=<?=$birthday['id'];?>'>x</a> <br> <?php 
      }
    }
    $i++;
  } 
  ?>


</body>
</html>