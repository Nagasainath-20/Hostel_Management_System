<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title></title>
  <link rel="stylesheet" href="..\css\mhreg.css">

  </head>
  <body>
<?php       session_start(); ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $regno = $_SESSION['regno'];
    require_once('../dbConnect.php');

    if (isset($_POST["18k"])) {
      $blockname = "1.8k";
      $rowSQL = mysqli_query($conn, "SELECT MAX(roomno) AS max FROM `user` WHERE block='$blockname' AND gender='male';");
      $row = mysqli_fetch_array($rowSQL);
      $largestNumber = $row['max'];
      if ($largestNumber == 0) {
          $largestNumber = 1;
      }
      $result = mysqli_query($conn, "SELECT count($largestNumber) as total from user where block='$blockname' AND gender='male';");
      $data = mysqli_fetch_assoc($result);
      $count = $data['total'];
      if ($count < 3) {
          $roomno = $largestNumber;
      } else {
          $roomno = $largestNumber + 1;
      }
  }
  
  if (isset($_POST["1k"])) {
      $blockname = "1k";
      $rowSQL = mysqli_query($conn, "SELECT MAX(roomno) AS max FROM `user` WHERE block='$blockname' AND gender='male';");
      $row = mysqli_fetch_array($rowSQL);
      $largestNumber = $row['max'];
      if ($largestNumber == 0) {
          $largestNumber = 1;
      }
      $result = mysqli_query($conn, "SELECT count($largestNumber) as total from user where block='$blockname' AND gender='male';");
      $data = mysqli_fetch_assoc($result);
      $count = $data['total'];
      if ($count < 1) {
          $roomno = $largestNumber;
      } else {
          $roomno = $largestNumber + 1;
      }
  }
  
  if (isset($_POST["blocks"])) {
      $blockname = "blocks";
      $rowSQL = mysqli_query($conn, "SELECT MAX(roomno) AS max FROM `user` WHERE block='$blockname' AND gender='male';");
      $row = mysqli_fetch_array($rowSQL);
      $largestNumber = $row['max'];
      if ($largestNumber == 0) {
          $largestNumber = 1;
      }
      $result = mysqli_query($conn, "SELECT count($largestNumber) as total from user where block='$blockname' AND gender='male';");
      $data = mysqli_fetch_assoc($result);
      $count = $data['total'];
      if ($count < 3) {
          $roomno = $largestNumber;
      } else {
          $roomno = $largestNumber + 1;
      }
  }
  

    $sql = "UPDATE `user` SET `block`='$blockname' where regno='$regno'";
    $query = mysqli_query($conn, $sql);
    $sql = "UPDATE `user` SET `roomno`='$roomno' where regno='$regno'";
    $query1 = mysqli_query($conn, $sql);

    if ($query && $query1) {
        echo 'Entry successful';
        header('Location: studentdashboard.php');
    } else {
        echo "Error occurred";
    }
}
?>
<?php include '../header.php';?>
<form class="" action="mhregistration.php" method="post">


<section class="cards">
<article class="card card--1">
  <div class="card__img">
  </div>
  <a href="#" class="card_link">
     <div class="card__img--hover"></div>
   </a>
  <div class="card__info">
    <span class="card__category"></span>
    <h3 class="card__title">1.8K Hostel</h3>
    <input type="submit" name="18k" id="18k" class="card__by" value="submit">
  </div>
</article>


<article class="card card--2">

  <div class="card__img"></div>
  <a href="#" class="card_link">
     <div class="card__img--hover"></div>
   </a>
  <div class="card__info">
    <span class="card__category"></span>
    <h3 class="card__title">1K Hostel</h3>
        <input type="submit" name="1k" id="1k" class="card__by" value="submit">
  </div>
</article>

<article class="card card--3">

  <div class="card__img"></div>
  <a href="#" class="card_link">
     <div class="card__img--hover"></div>
   </a>
  <div class="card__info">
    <span class="card__category"> </span>
    <h3 class="card__title">Block Hostel</h3>
      <input type="submit" name="blocks" id="blocks" class="card__by" value="submit">
  </div>
</article>
  </section>
</form>

  </body>
</html>
