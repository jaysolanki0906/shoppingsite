<?php 
echo "<br><br><br><br>";
include 'header.php';
include 'database.php';
if(session_status() === PHP_SESSION_NONE){ session_start();}

$i=0;
// $records = mysqli_query($conn,"SELECT * FROM category WHERE CARTID = (SELECT MAX(CARTID) FROM cart)");


?>

<!DOCTYPE html>
<html lang="en">
<head></head>
<body>
    <table>
    <tr>
    <?php
    
    $records = mysqli_query($conn,"select * from category");

while($data = mysqli_fetch_array($records))
	{
        $i++;
        
        if($i>5){
            ?> <tr><?php
        }
      ?>

         <td><br>&emsp;<a href='prod_from_cat.php?catid=<?php echo $data['catid'];?>'><img src= '<?php
         
         echo $data['cat_img'] ?>' height='250px' width='250px'>&emsp;
    </a><br><br><center><?php echo $data['catname']?> </center>
    </td>
    
<?php

if($i>5){
   ?> </tr><?php
    
}
if($i>5){
    $i=0;
}
}
    
?>
</table>
       
</body>
</html>