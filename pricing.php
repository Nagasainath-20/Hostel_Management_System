<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pricing</title>
    <link rel="stylesheet" href="css\pricing.css">

    <script type="text/javascript">
      function change(){
        window.location.href ="signin.php";
      }
      function rtohome(){
        window.location.href ="index.php";
      }
    </script>
  </head>

  <body>
    <div class="Nav" id="Nav1">
      <div class="NavbarContainer">
        <img src="images/logo.png" alt="" class="NavLogo" onclick="rtohome()">
        <div class="MobileIcon">
        <i class="fa fa-bars"></i>
        </div>
        <ul class="NavMenu ">   
          <li class="NavItem"><a id="linkcolor1" class="NavLinks" href="index.php">Home</a></li>
        </ul>
        <div class="NavBtn">
        </div>

      </div>
    </div>



    <div class="pricingcontainer">
      <div class="pricingwrapper">
        <div class="columns">
  <ul class="price">
    <li class="header">1.8K Block</li>
    <div class="imagewrapper">
    <img style="height:150px; width:150px;" src="images/1.8k.jpg" alt="">
    </div>

    <li class="grey">2.5k/ Month</li>
    <!-- <li>Best Internet</li>
    <li>Central AC block</li>
    <li>Best Mess</li>
    <li>World class facilities</li> -->
    <li class="grey"><a href="signin.php" class="button">Select</a></li>
  </ul>
</div>


<div class="columns">
<ul class="price">
<li class="header">1K block</li>
<div class="imagewrapper">
<img style="height:150px; width:150px;" src="images/1k.jpeg" alt="">
</div>

<li class="grey">2.2k/ Month</li>
<!-- <li>AC block</li>
<li>Common reading room</li>
<li>Indoor games</li>
<li>GYM</li> -->
<li class="grey"><a href="signin.php" class="button">Select</a></li>
</ul>
</div>

<div class="columns">
<ul class="price">
<li class="header">Blocks</li>
<div class="imagewrapper">
<img style="height:150px; width:150px;" src="images/blocks.jpeg" alt="">
</div>

<li class="grey">1.8k/ Month</li>
<!-- <li>Ac block</li>
<li>Gym</li>
<li>Swimming pool</li>
<li>AC Gym</li> -->
<li class="grey"><a href="signin.php" class="button">Select</a></li>
</ul>
</div>


<div class="columns">
<ul class="price">
<li class="header">Sarojini block</li>
<div class="imagewrapper">
<img style="height:150px; width:150px;" src="images/girls.jpeg" alt="">
</div>

<li class="grey">2k/ Month</li>
<!-- <li>Non-Ac block</li>
<li>8 ball pool </li>
<li>comfortable living area</li>
<li>Free wifi</li> -->
<li class="grey"><a href="signin.php" class="button">Select</a></li>
</ul>
</div>

      </div>
    </div>

  </body>
</html>
