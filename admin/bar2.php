<?php 
include 'database.php';
$q="SELECT category.catname,SUM(QUANTITY) from cart,category,product WHERE category.catid=product.catid AND product.PID=cart.PID GROUP BY cart.QUANTITY;";

$res=mysqli_query($conn,$q);
// while($data=mysqli_fetch_array($res)){
//     echo $data['catname']."    ".$data["SUM(QUANTITY)"];
// }

$data=mysqli_fetch_array($res);
$data=+1;
// echo $data['catname'];
print_r($data);

?>