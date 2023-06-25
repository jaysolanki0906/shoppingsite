<html>
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
h1
{
	font-family: Brush Script MT, Brush Script Std, cursive;
	font-style: oblique;
	height: 80%
}
input[type=submit]
{
	background-color: #488AC7;
	border: 3px solid black;
}

input:hover{
	color:black;
	font-family: solid black;
	background-color:lightblue;
}
body
{
	background-color:#B6B6B4;
}
</style>
</head>
<body>
<?php include 'header.php';?>
<form method="post">	
<br><br><center>
	<h1>Insert the new category of the product</h1>
	<br><br>
	<h4>Enter image of category</h4>
	<input type="file" name="image">

	<h4>Enter the new category</h4>
	<br>
	<input type="text" name="newcat"><br>
	<br>
	<input type="submit" name="submit">
	</center>
</form>
<?php
if(isset($_POST["submit"]))
{
include 'database.php';
$records = mysqli_query($conn,"SELECT * FROM category WHERE catid = (SELECT MAX(catid) FROM category)");
$id=0;
$img = '';
while($data = mysqli_fetch_array($records))
{
	$id=$data['catid'];
}
$id=$id+1;
$img = $_POST['image'];
$cat=$_POST['newcat'];
$sql = "INSERT INTO category (catid, catname, cat_img) VALUES ('$id','$cat','images/$img')";
		if (mysqli_query($conn, $sql)) 
		{
			echo "New record created successfully";
		}
		else
		{
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
}
?>
</body>
</html>