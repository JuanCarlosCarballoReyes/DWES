<?php

    require('classes/Request.php');
    require('classes/Files.php');

    $image = Request::request('image');
    Files::file($image);
    
  
