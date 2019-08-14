
<?php 

require 'connect.php';

if(isset($_POST['submit'])){
  $firstname = $_POST['first'];
  $lastname = $_POST['last'];
  $user = $_POST['user'];
  $password = $_POST['pass'];
  $date = date("Y/m/d H:i:sa");
  $time = date("Y/m/d");

  $domain = 'itmail.com';
  $email =$user ."@". $domain;

  $mysql = "INSERT INTO `hm_accounts`
  (`accountdomainid`, `accountadminlevel`, `accountaddress`, `accountpassword`, `accountactive`, `accountisad`, `accountmaxsize`, `accountvacationmessageon`, `accountpwencryption`, `accountforwardenabled`, `accountforwardkeeporiginal`, `accountenablesignature`, `accountlastlogontime`, `accountvacationexpires`, `accountvacationexpiredate`, `accountpersonfirstname`, `accountpersonlastname`)
  VALUES ('1', '0', '$email', '$password', '1', '0', '0', '0', '3', '0','0', '0', NOW(), '0',NOW(), 'user', '1')";
  
  $result = mysqli_query($con,$mysql);
  if($result){
    echo "<script>alert('สมัครสมาชิกเสร็จสิ้น')</script>";
  }else{
    echo "<script>alert('ไม่สามารถสมัครสมาชิกได้')</script>";
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>ITMail</title>
  <link rel="stylesheet" href="Style.css">
  <link href="https://fonts.googleapis.com/css?family=Titillium+Web&display=swap" rel="stylesheet">
</head>
<body>
  <div class="wrap">
    <img src="img/logo.png" height="100" width="100" class="logo">
    <h1>Sign Up Here</h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post"> 
      <input type="text" name="first" placeholder="firstname"><input type="text" name="last" placeholder="lastname"><br>
      <input type="text" name="user" placeholder="username" id="user">@itmail.com <br>
      <input type="password" name="pass" placeholder="password"><br>
      <div class="btn"><input type="submit" name="submit" value="Signup"></div>
    </form>
  </div>
</body>
</html>