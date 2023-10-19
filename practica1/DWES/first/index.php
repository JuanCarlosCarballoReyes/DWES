<?php


require('BasicFileManager.php');
require('classes/Request.php');
require('classes/Files.php');

$result = Request::request('result');
$message = '';

if($result!='') {
    $message = 'Error';
     if($result == '1') {
        $message = 'Ok';
    }
}

$dirPath = 'root';
$folder = Request::request('folder');
$folderText = '';
if ($folder!=''){
    $dirPath .= '/' . $folder;
    $folderText = '<h2>'. $folder . '</h2>';
    $folderText .= '<h2><a href="."> volver </a></h2>';
}

$files = scandir($dirPath);

?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        
        <?php if ($message!=''): ?>
            <!--<h1><?= $message ?></h1>
            <h1><?php echo $message; ?></h1>-->
        <?php endif; ?>
        
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <ul>
                <li>
                    <label for="folder">Folder:</label>
                    <input type="text" id="folder" name="folder" value="">
                </li>
                <li>
                    <label for="file">File:</label>
                    <input type="file" required id="file" name="file">
                </li>
                <li>
                    <label for="send">Send:</label>
                    <input type="submit" id="send" value="send">
                </li>
            </ul>
        </form>
        
        <?= $folderText ?>

        <ul>
            <?php
            foreach ($files as $file) {
                $filePath = $dirPath . '/' . $file;
                if (is_file($filePath)) {
                    ?>
                    <li>
                    archivo <?=substr($file, 15) ?>
                    <a href="view.php?image=<?=$filePath ?>" target"viewnormal3">view 3.0</a>
                    <a href="vista.php?html=<?=$filePath ?>" target"vistaHTML">vistaHTML</a>
                    <a href="download.php?image=<?=$filePath ?>">download</a>
                    </li>
                    <?php
                } else if (substr ($file , 0 , 1 ) != '.') {
                    ?>
                    <li>
                        folder <?= $file ?>
                        <a href="?folder=<?= $file ?>">view content</a>
                    </li>
                    <?php
                }
            }
            ?>
        </ul>
    </body>
</html>