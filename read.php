<?php
    
    include_once('lib/Imap_parser.php');

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

    // get inbox. Array
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
    
</body>
</html>