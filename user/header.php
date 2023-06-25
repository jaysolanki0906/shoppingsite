<?php
echo "<br><br><br><br>";
  
session_start();
$id=0;
$id = $_SESSION['id'];
?>
<!DOCTYPE html>
<html>
<title></title>
<head>
  <style>
    a{
      
    }
    .kushal
    {
      text-align:right;
    }
    i
    {
      visibility: visible;
    }
    h3{

    }
    </style>
</head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body id="myPage">

<!-- Sidebar on click -->
<nav class="w3-sidebar w3-bar-block w3-white w3-card w3-animate-left w3-xxlarge" style="display:none;z-index:2" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-display-topright w3-text-teal">Close
    <i class="fa fa-remove"></i>
  </a>
  <a href="#" class="w3-bar-item w3-button">Link 1</a>
  <a href="#" class="w3-bar-item w3-button">Link 2</a>
  <a href="#" class="w3-bar-item w3-button">Link 3</a>
  <a href="#" class="w3-bar-item w3-button">Link 4</a>
  <a href="#" class="w3-bar-item w3-button">Link 5</a>
</nav>

<!-- Navbar -->
<div class="w3-top" style="padding:00px;">
 <div class="w3-bar w3-theme-d2 w3-left-align" style="padding:10px 2px;">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="update_profile.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white"><i style="font-size:30px;"  class="fa" >&#xf2bd</i>
  <a href="home.php?id=1" class="w3-bar-item w3-button w3-teal" style="font-size:21px;"><i class="fa fa-home w3-margin-right" ></i>Home</a>
  <a href="product_display.php" style="font-size:21px;" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Category</a>
  <a href="contact.php" style="font-size:21px;" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Contact Us</a>
  <a href="about.php" style="font-size:21px;" class="w3-bar-item w3-button w3-hide-small w3-hover-white">About </a></h4>

  <h3 class="w3-bar-item w3-button w3-hide-small w3-hover-white w3-center" style=" font-family:Copperplate Gothic Bold;">

  <center style="padding:4px 10px 10px 310px;">WoodHack</center></h3> 
  
  <!-- <a href="update_profile.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">update profile</a> -->

  <?php
    if($id>0){
      echo "<button class='w3-right' style='border-radius:12px'><a href='logout.php' class='w3-bar-item w3-button w3-hide-small w3-hover-white w3-right'>LogOut</a></button>";
    }
    else{
      echo "  <button class='w3-right' style='border-radius:12px'><a href='/php_prgms/project/Login.php' class='w3-bar-item w3-button w3-hide-small w3-hover-white w3-right'>LogIn</a></button>";
    }
  ?>
  <a href="cart.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white w3-right"><i  class="fa fa-lg">&#xf07a;</i></a>
  <a class="w3-bar-item w3-button w3-hide-small w3-hover-white w3-right"><i class="fa fa-search fa-lg"></i></a>
  <input class="w3-bar-item w3-button w3-hide-small w3-hover-white w3-right" style="
    border-radius: 30px;
    color: #088178;
    background-color: white;
    border: solid;
  
" type="text" name="search_product">
    <div class="w3-dropdown-hover w3-hide-small">
    
   
  </div>
  </div>
  </div>
  </body>
</html>