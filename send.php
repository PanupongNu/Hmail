<?php 
    if(isset($_POST['submit'])){
        $emailto =$_POST['email1'];
        $emailfrom = $_POST['email2'];
        $subject = $_POST['subject'];
        $message =$_POST['message'];

        
        $headers= "From: ".$emailfrom;
        $to = " ".$emailto;

        mail($to,$subject,$message,$headers);
    
          
        header("Location: send.php");

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> IT - Mail</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="send.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">

</head>
</head>
<body>
  <main>
    <h1>SEND E-MAIL</h1>
    
    <form class="form-control" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        to<br>
        <input type="email"  name="email1" placeholder="to"><br>
        from<br>
        <input type="email" name="email2" placeholder="from"><br>
        subject<br>
        <input type="text" name="subject" placeholder="subject"><br>
        message<br>
        <textarea name="message" placeholder="Message"></textarea><br>
        <button type="submit" name="submit">SEND MAIL</button>
      
    </form>
  </main> 
</body>
</html>