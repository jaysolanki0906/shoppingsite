<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="register.php" method="post">
    <h3>First name</h3>
    <input type="text" name="first_name" required  ><br>
    <h3>last name</h3>
    <input type="text" name="last_name" required><br>
    <h3>email</h3>
    <input type="email" name="email" required value="<?php echo $email; ?>"><br>
    <h3>password</h3>
    <input type="password" name="password_1" required ><br>
    <h3>confirm password</h3>
    <input type="password" name="password_2" required><br>
    <input type="submit" value="Submit" name="reg_user">
    </form>
</body>
</html>