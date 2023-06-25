<?php
include 'header.php';
include 'database.php';
$i=0;
echo "<br><br><br><br><br><br>";
$cat=$_GET['catid'];

// $records = mysqli_query($conn,"select Distinct PID from product where $cat=catid");
?> <html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<meta charset="UTF-8" />
	<meta name="viewport"
		content="width=device-width,
				initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible"
		content="ie=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 80%;
  height: 65%;
  background-color:#FFFFFF;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}
.column {
  float: left;
  width: 25%;
  padding: 3px;
}

/* Clear floats after image containers */
.row::after {
  content: "";
  clear: both;
  display: table;
}
h1
{
	font-family: Brush Script MT, Brush Script Std, cursive;
	font-style: oblique;
	height: 80%
}
body
{
	background-color:"black";
}
.card1 {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 150%;
  height: 80%;
  background-color:#FFFFFF;
}

.card1:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container1 {
  padding: 2px 16px;
}
.column1 {
  float: left;
  width: 50%;
  padding: 6px;
}

/* Clearfix (clear floats) */
.row1::after {
  content: "";
  clear: both;
  display: table;
}
#feature{
  display: flex;
  align-items:center;
  justify-content:space-between;
  flex-wrap:wrap;
}
.section-p1{
  padding:40px 80px;
}
#feature .fe-box{
  color: offwhite;
  width:180px;
  text-align:center;
  padding: 25px 15px;
  box-shadow: 20px 20px 34px rgba(0,0,0,0.03);
  border: 1px solid white;
  border-radius: 4px;
  margin: 15px 0;
}

#feature .fe-box:hover{
  box-shadow: 10px 10px 54px rgba(70,62,221,0.1);
}
hr.class-1 {
        border-top: 5px solid #8c8b8b;
    }
	div.a {
  text-align: justify; /* For Edge */
  -moz-text-align-last: right; /* For Firefox prior 58.0 */
  text-align-last: right;
}
</style>
</head>
<body ><br><br>
<table>

<div class="row">
 <?php

$records = mysqli_query($conn,"select Distinct p.PRODUCT_NAME,i.image,p.PRODUCT_PRICE,p.PID from product p,img i WHERE ( $cat=p.catid and p.PID=i.PID ) and i.imgid=1 GROUP BY p.PID");

while($data = mysqli_fetch_array($records)){

    // echo $data['PID']; 

//    echo " <a href=''><img src='$data['image']' height='250px' width='250px'>&emsp; </a>";?>
<div class="column">
<div class="card">
  <img src="<?php echo $data['image'];?>" style="width: 370px; height:350px;">
  <div class="container">
  <br><br>
  <h4><b><?php echo $data['PRODUCT_NAME'];?></b></h4>  
     <hr class="class-1" />
    <h4><b><?php echo $data['PRODUCT_PRICE'];?></b></h4>
	<div class="a"><a href="proddisp.php?pid=<?php echo $data['PID'];?>"><i class="fas fa-eye"></i></a>
	<a href="cart.php?&inid=<?php echo "1"?>&pid=<?php echo $data['PID'];?>&cate=<?php echo "1";?>"><i class="fas fa-shopping-cart"></i></a></div>
    </div>
</div>
	</div>
	<?php 
	if($i==4)
	{
		break;
	}
	} ?>
	</div>
	
	
	</div>
	</div>
    </table>