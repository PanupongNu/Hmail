<?php
    ob_start();
    session_start();

    require "connect.php";

    // if(isset($_SESSION['s_id'])){
    //     header("Location: index.php");
    // }

    if(isset($_POST['submit'])){
        $username = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM hm_accounts WHERE accountaddress = '$username' AND accountpassword = '$password' ";

        $result = mysqli_query($con, $sql);

        if(mysqli_num_rows($result)){
            $row = mysqli_fetch_assoc($result);

            $_SESSION['s_id'] = $row['accountid'];
            $_SESSION['s_email'] = $row['accountaddress'];
            $_SESSION['s_password'] = $row['accountpassword'];

            header("Location: index.php");
        }else{
            echo "<script>alert('Email or Password ของท่านไม่ถูกต้อง')</script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
 
    <link rel="stylesheet" href="login.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log in</title>
</head>
<body>
    <h1>Login</h1>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
    <input type="text" name="email" placeholder="Email"><br>
    <input type="password" name="password" placeholder="Password"><br>
    <input type="submit" name="submit" value="Login">
    </form>
    
</body>
</html>
<?php 
    ob_end_flush();
?>