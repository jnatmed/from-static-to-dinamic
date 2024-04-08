<header>
        <h1><?= $titulo ?><h1>
        <nav>
            <ul>
                <?php foreach ($menu as $item) : ?>                 
                    <li><a href="<?= $item['href'] ?>"><?= $item['name']?></a></li>
                    <?php endforeach; ?>
                </ul>
            </nav>
</header>
