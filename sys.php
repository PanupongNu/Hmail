

<?php 

   

    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $name = $_POST['name'];
        $pass = $_POST['pass'];
        $subject = 'Verification Email';
  

       

        $msg = "$name  , thank you for registering to SignUp System with $email
        Please click the following link to Verify your account : ";
        

        //$admin_email = "admin@itmail.com";
        $headers= "From: "."admin@itmail.com";


        $to = " ".$email;
        mail($to,$subject,$msg,$headers);

        header("Location: verifysent.php");

    }


?>
