    <?php

    require('BasicFileManager.php');
    require('classes/Request.php');
    require('classes/Files.php');
    
    $folder = Request::request('folder');
    
    if($folder == '') {
        $folder = '.';
    }
    
    $bfm = new BasicFileManager();
    $result = $bfm->set('file', 'root/' . $folder);
    
    //Redirect - no está bien escrito, ya que hay que hacer un Location a una ruta absoluta
    
    header('Location: index.php?result=' . $result );
    

