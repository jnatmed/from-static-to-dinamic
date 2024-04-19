<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <?php require __DIR__.'/parts/head.view.php' ?>
</head>

<body>

    <header>

        <h1><?= $titulo ?> : <?= ucfirst($author->fields['nombre']) ?> </h1>
    
        <?php require __DIR__ .'/parts/nav.view.php'; ?>

    </header>

    <main>

        <p>Nombre: <?= $author->fields['nombre'] ?></p>
        <p>Correo <a href="mailto:"><?= $author->fields['email'] ?></a></p>                               

    </main>

</body>

</html>

