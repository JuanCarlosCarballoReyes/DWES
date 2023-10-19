<?php
$filePath = isset($_GET['html']) ? $_GET['html'] : '';

if (empty($filePath) || !file_exists($filePath) || !is_file($filePath)) {
    echo "Archivo no válido.";
    exit;
}

$htmlContent = file_get_contents($filePath);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Codigo fuenteL</title>
</head>
<body>
    <h1>Código fuente de la pagina</h1>
    <pre><?php echo htmlentities($htmlContent); ?></pre>
    
</body>
</html>