<?php
session_start();

$email = "";
$first_name="";
$password_1 ="";
$password_2 = "";

$errors = array();

$db=mysqli_connect("localhost","root","Kushal1234@","project");


//registeration of a user
if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $first_name = mysqli_real_escape_string($db, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($db, $_POST['last_name']);
    
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 =  $_POST['password_1'];
    $password_2 =  $_POST['password_2'];
}


// form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error into $errors array
  if (empty($first_name)) { 
    array_push($errors, "name is required"); 
    }
    if (empty($last_name)) { 
        array_push($errors, "name is required"); 
        }
  if (empty($email)) { 
    array_push($errors, "Email is required"); 
    }
  if (empty($password_1)) {
    array_push($errors, "Password is required");
    }
  if ($password_1 != $password_2) {
    echo("The two passwords do not match");
	array_push($errors, "The two passwords do not match");
    }

// first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM login WHERE First_Name='$first_name' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['First_Name'] === $first_name) {
        echo("Username already exists <br>");
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
        echo "email already exists";
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $password = $password_1;//encrypt the password before saving in the database

    $sql= "INSERT INTO login(First_Name, email, Password) VALUES('$first_name','$email', '$password')";
     $res = mysqli_query($db, $sql);
     if(!$res){
        echo " not saved";    
     }
    
    $_SESSION['email'] = $email;
    $_SESSION['success'] = "You are now logged in";
    // header('location: index.php');
}


    

?>