<?php 
    session_start();
    require "connect.php";

    // if(!isset($_SESSION['c_id'])){
    //     header("Location:login.php");
    // }

    echo $_SESSION['s_id'];
    echo $_SESSION['s_email'];
    echo $_SESSION['s_password'];

    include_once('lib/Imap_parser.php');

    // // create Imap_parser Object
    $email = new Imap_parser();

    $data = array(
        // email account
        'email' => array(
            'hostname' => '{127.0.0.1:143/notls}INBOX',
            'username' => "user3@itmail.com",
            'password' => "1234"
        ),
        // inbox pagination
        'pagination' => array(
            'sort' => 'DESC', // or ASC
            'limit' => 10,
            'offset' => 0
        )
    );

    
    $result = $email->inbox($data);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <?php foreach($result['inbox'] as $row){ ?>
            <h4><?= $row['subject'] ?></h4>
            <h1><?= $row['from'] ?></h1>
            <p><?= $row['message'] ?></p>
        <?php  } ?>
</body>
</html>