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

      if($_SERVER["REQUEST_METHOD"]=="POST"){
    require_once('../dbConnect.php');
        $regno =  $_SESSION['regno'];
    if(isset($_POST["sarojini"])){
      $blockname="sarojini";
      $rowSQL = mysqli_query($conn, "SELECT MAX( roomno ) AS max FROM `user` WHERE block='$blockname' AND gender='female';" );
      $row = mysqli_fetch_array( $rowSQL );
      $largestNumber = $row['max'];
      if($largestNumber==0){
        $largestNumber=1;
      }
      $result=mysqli_query($conn,"SELECT count($largestNumber) as total from user where block='$blockname' AND gender='female';");
    $data=mysqli_fetch_assoc($result);
    $count= $data['total'];
    if($count<3){
      $roomno=$largestNumber;
    }
    else{
        $roomno=$largestNumber+1;
    }
    }
    $sql="UPDATE `user` SET `block`='$blockname' where regno='$regno'";
    $query=mysqli_query($conn,$sql);
    $sql="UPDATE `user` SET `roomno`='$roomno' where regno='$regno'";
    $query1=mysqli_query($conn,$sql);
    if($query && $query1){
      echo 'Entry successful';
      header('Location: studentdashboard.php');
    }
    else{
      echo "error occoured";
    }
    }
       ?>
<?php include '../header.php';?>


<form class="" action="lhregistration.php" method="post">
    <section class="cards">
<article class="card card--4">

  <div class="card__img"></div>
  <a href="#" class="card_link">
     <div class="card__img--hover"></div>
   </a>
  <div class="card__info">
    <span class="card__category"></span>
    <h3 class="card__title">Girls Hostel</h3>
      <input type="submit" name="sarojini" id="sarojini" class="card__by" value="submit">
  </div>
</article>
  </section>
</form>

  </body>
</html>
