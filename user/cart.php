<?php echo "<br><br><br>" . error_reporting(0); ?> 
<?php
$var1=0;
//session_start();
$inidc=0;
$total=0;
include 'header.php';
include 'database.php';
  

// $inid=$_GET['inid'];
// if(isset($_GET['inid']))
// {
// $inidc=$_GET['inid'];
// }
// 	if($inidc>0)
// 	{
	$var=$_GET['pid'];
	$var1=$_GET['cate'];
	// echo "var1".$var1;
	// echo $inidc;

	// $temp=$_GET['cate'];

	// $tempvar=$_GET['tempvar'];
	$proname="";
	$proimg="";
	echo "<br><br><br>";
	// echo "var=".$var;
	
	$records = mysqli_query($conn,"SELECT * FROM cart WHERE CARTID = (SELECT MAX(CARTID) FROM cart)");
	$id=0;
	while($data = mysqli_fetch_array($records))
	{
		$id=$data['CARTID'];
	}
	$id=$id+1;
	// echo $id;
	$records1 = mysqli_query($conn,"select Distinct p.PRODUCT_NAME,i.image,p.PRODUCT_PRICE,p.PID from product p,img i WHERE p.PID=i.PID and i.imgid=1 and p.PID='$var' GROUP BY p.PID");
	while($data1 = mysqli_fetch_array($records1))
	{
		$proname=$data1['PRODUCT_NAME'];
		$price_temp=$data1['PRODUCT_PRICE'];

		$proimg=$data1['image'];
		
	
	}

	$kus=$price_temp*$var1;

	$sql = "INSERT INTO cart (CARTID, PID,QUANTITY,STATUS,PRODUCT_NAME,PRODUCT_IMAGE, price_product, total_price) VALUES ('$id','$var','$var1','unpaid','$proname','$proimg', '$price_temp', '$kus')";

	// echo $sql;
	// echo $data1['quantity'];

	if (mysqli_query($conn, $sql)) 
	{
		// echo "New record created successfully";
	}
	else
	{
		// echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	// }

?>
<html>
<head>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;0
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
a:link {
  text-decoration: none;
}

a:visited {
  text-decoration: none;
}

a:hover {
  text-decoration: underline;
}

a:active {
  text-decoration: underline;
}
</style>
</head>
<body>

<table id="customers">
  <tr>
	<th>CARTID</th>
	<th>PID</th>
	<th>PRODUCT_NAME</th>
	<th>PRODUCT_IMAGE</th>
	<th>QUANITY</th>
	<th>PRODUCT_PRICE</th>
	<th>TOTAL_PRICE</th>
	
	<th>DELETE</th>
  </tr>

  <?php
	
	$records = mysqli_query($conn,"SELECT * FROM cart ORDER BY CARTID");
	while($data = mysqli_fetch_array($records))
	{
		?><tr>
			<td><?php echo $data['CARTID'];  ?></td>
			<td><?php echo $data['PID'];?></td>
			<td><?php echo $data['PRODUCT_NAME'];?></td>
			
			<td><img src="<?php echo $data['PRODUCT_IMAGE'];?>" Style="width:20%;"></td>
			<td><?php echo $data['QUANTITY'];?></td>
			<td><?php echo $data['price_product'];?></td>
			<td><?php echo $data['QUANTITY']*$data['price_product'];?></td>
			<?php $total+=$data['price_product'];?>
			<td><h6><a href="deletecat_user.php?catid=<?php echo $data['CARTID'];?>">REMOVE</a></h6></td>
			
		</tr>
		<?php
	}
	
?>
<tr>
	<td>total is &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
	<td colspan="6" ><h4 style="text-align:right; font-family:solid;"><b><?php echo"$total";?></b></h4></td>
	<td><a href="payment.php"> <button>Pay</button>	</a></td>
</tr>
</body>
</html>