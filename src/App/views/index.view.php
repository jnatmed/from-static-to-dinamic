<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titulo ?></title>
</head>
<body>

    <header>
        <h1><?= $titulo ?><h1>
    
        <?php require __DIR__ .'/parts/nav.view.php'; ?>        
    </header>
    
    <main>
        <h1><?= $main ?><h1>
    </main>
</body>
</html>