<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <html lang="fr">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/style/beers.css">
    <?php include 'tableBiere.php'; ?>
    <title>Les 3 Wilders | Nos bières</title>
</head>

<body>
    <header>
        <?php include './header.php';?>
    </header>

    <main>
        <div class="titre">
            <div class="page-title">
                <p>Les Classiques</p>
            </div>
        </div>
        <section class="classic">
            <?php foreach ($classicBeer as $name => $biere) : ?>
                <article class="<?=$name?>">
                    <img src="/image/bottle-beer.png" alt="bouteille de bière" class="imgbeer">
                    <h2><?=$biere['nom']?></h2>
                    <ul>
                        <li><strong><?=$biere['type']?></strong></li>
                        <li><strong><?=$biere['alcool']?></strong></li>
                        <li class="progress-element">
                            <p class="progress-label"><strong>Amertume</strong></p>
                            <div class="progress-container-amertume">
                                <progress id='p0' value='55' max='100'></progress>
                            </div>
                        </li>
                        <li class="progress-element">
                            <p class="progress-label"><strong>Corps</strong></p>
                            <div class="progress-container-corps">
                                <progress id='p0' value='35' max='100'></progress>
                            </div>
                        </li>
                        <li class="beer-description">
                            <?=$biere['description']?>
                        </li>
                    </ul>
                </article>
            <?php endforeach; ?>
        </section>
        <div class="titre">
            <div class="page-title">
                <p>Les Ephémères</p>
            </div>
        </div>
        <section class="éphémère">
            <?php foreach ($ephemereBeer as $name => $biere) : ?>
                    <article class="<?=$name?>">
                        <img src="/image/bottle-beer.png" alt="bouteille de bière" class="imgbeer">
                        <h2><?=$biere['nom'] ?><?php
                    if ($biere['soldout']===true){
                        echo "<i class='soldout'>SOLD OUT</i>";
                    }
                    ?></h2>
                        <ul>
                            <li><strong><?=$biere['type']?></strong></li>
                            <li><strong><?=$biere['alcool']?></strong></li>
                            <li class="progress-element">
                                <p class="progress-label"><strong>Amertume</strong></p>
                                <div class="progress-container-amertume">
                                    <progress id='p0' value='55' max='100'></progress>
                                </div>
                            </li>
                            <li class="progress-element">
                                <p class="progress-label"><strong>Corps</strong></p>
                                <div class="progress-container-corps">
                                    <progress id='p0' value='35' max='100'></progress>
                                </div>
                            </li>
                            <li class="beer-description">
                                <?=$biere['description']?>
                            </li>
                        </ul>
                    </article>
            <?php endforeach; ?>
        </section>
    </main>
    <footer>
        <?php include 'footer.php'; ?>
    </footer>
    <div class="trademark">
        Coded by Alexandre, Julien and Philippe <br>
        © WildCodeSchool promotion Février 2024
    </div>
</body>
</html>