<?php
$temp="true";
$var=$_GET['catid'];
// echo $var;
include 'database.php';
$records = mysqli_query($conn,"SELECT * FROM cart WHERE cartid = (SELECT MAX(cartid) FROM cart)");
$id=0;
while($data = mysqli_fetch_array($records))
{
	$id=$data['cartid'];
}
if($var==$id)
{
	$sql = "delete from cart where cartid='$var'";
		if (mysqli_query($conn, $sql)) 
		{
			echo "Record Deleted Successfully";
			// header("Location:/cart.php");
		}
		else
		{
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
}
else
{
	$sql = "delete from cart where cartid='$var'";
	if (mysqli_query($conn, $sql)) 
	{
		echo "Record Deleted Successfully";
	}
	else
	{
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	for($i=$var+1;$i<=$id;$i++)
	{
		echo "id ti be updates".$i;
		echo "<br>";
		$v=$i-1;
		echo "id to be store".$v."<br>";
		$sql = "update category set catid='$v' where catid='$i'";
		if (mysqli_query($conn, $sql)) 
		{
			$temp="true";
		}
		else
		{
			$temp="false";
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}
	if($temp=="true")
	{
		header("Location:cart.php");
	}
	else
	{
		
	}
}
?>