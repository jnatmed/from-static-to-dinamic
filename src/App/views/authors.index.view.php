<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <?php require __DIR__.'/parts/head.view.php' ?>
</head>

<body>

    <header>

        <h1><?= $titulo ?><h1>
    
        <?php require __DIR__ .'/parts/nav.view.php'; ?>

    </header>

    <main>

        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($authors as $author) : ?>

                    <tr>
                        <td><a href="/author?id=<?= $author->fields['id'] ?>"><?= $author->fields['nombre'] ?></a></td>                        
                        <td><?= $author->fields['email'] ?></td>
                    </tr>

                <?php endforeach ?>   
            </tbody>

            <tfoot></tfoot>
        </table>

    </main>

</body>

</html>

