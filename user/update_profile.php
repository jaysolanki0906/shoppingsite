<?php
error_reporting(0);
//$var=$_GET['cat'];
session_start();
$var=$_SESSION['id'];

include 'header.php';
include 'database.php';
if(isset($_POST["submit"]))
{
	echo "Hello World";
	$v=$_POST['name'];
	$t=$_POST['id'];
    $a=$_POST['add'];
	$p=$_POST['pswd'];
	$m=$_POST['mobile'];
	$em=$_POST['email'];
	
	
	$sql = "UPDATE registration SET name='$v', Phno='$m', Email='$em', Address='$a', Password='$p' WHERE id='$t'";
	if (mysqli_query($conn, $sql)) 
	{
		header("Location:home.php");
        alert("data is changed sucessfully");
	}
	else
	{
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}
?>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
	<style>
		input[type=text] {
  width: 75%;
  padding: 2px 30px;
  margin: 8px 20;
  box-sizing: border-box;
  font:arial;

		}
 

table{
	border: 1px solid;
	border-radius: 5px;
	border-spacing: 10px;
	font-style: italic;
}
input[type=submit]{
	text-align: center;
	background-color: #04AA6D;
	border: none;
	color: white;
	padding: 5px 50px;
	text-decoration: none;
	margin: 4px 20px;
	cursor: pointer;
  }

	</style>
</head>
<body>
<form method="post">
<?php
$records = mysqli_query($conn,"SELECT * FROM registration where id='$var'");
echo "<table>";
while($data = mysqli_fetch_array($records))
{
?>

<tr>
		<td>Id:<input type="text" value="<?php echo $data['id'];?>" readonly name="id"><br></td>
	</tr>
	<tr>
		<td>Name: <input type="text" value="<?php echo $data['name'];?>" name="name"><br></td>
	</tr>
	<tr>
		<td>Address: <input type="text" value="<?php echo $data['Address'];?>" name="add"><br></td>
	</tr>
	<tr>
		<td>Mobile number: <input type="text"  value="<?php echo $data['Phno'];?>" name="mobile"><br></td>
	</tr>
	<tr>
		<td>New Password: <input type="text" value="<?php echo $data['Password'];?>" name="pswd"><br></td>
	</tr>
	<tr>
		<td>Email: <input type="text" value="<?php echo $data['Email'];?>" name="email"><br></td>
	</tr>
	<tr><td><center><input type="submit" name="submit" value="Update"></center></td>
	</tr>

<?php
echo "</table>";
}
?>
</form>
</body>
</html>