<!DOCTYPE html>
<html lang="en-PH">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Group 12</title>
</head>
<body>

    <?php

    $filepath = 'group12.txt'; // file path

    echo file_get_contents("group12.txt"); 

    echo file_put_contents("group12.txt", "we are group 12", FILE_APPEND);

    echo file_exists("group12.txt") ? 'file is already exist' : 'file does not exist';
    
    print_r(file("group12.txt"));
    ?>
</body>
</html>