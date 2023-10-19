<?php

    require('classes/Request.php');
    
    
    $image = Request::request('image');
    $path_parts= pathinfo($image);
    $name = substr($pathParts['basename'], 15);
    
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
<body>
    <h1><?= $name ?></h1>
    <img src="<?= $image ?>" width="400px"></img>
</body>
</html>