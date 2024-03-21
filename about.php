<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <html lang="fr">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/style/about.css">
    <title>Les 3 Wilders | A propos de nous</title>
    <?php include 'tableBiere.php'; ?>
</head>

<body>
    <header>
        <?php include './header.php';?>
    </header>
    <main>
        <div class="titre">
            <div class="page-title">
                <p>A propos de nous</p>
            </div>
        </div>
        <div class="thumbnail">
            <?php foreach ($about as $name => $data) : ?>
                <div class="article">
                    <div class="article-img"><img src="/image/<?=$name?>.jpg" alt=""></div>
                    <div class="article-title">
                        <h3><?=$data['nom']?></h3>
                    </div>
                    <div class="article-content">
                        <p><?=$data['description']?></p>
                    </div>
                    <!-- <div class="read-button"><a href="#">En savoir plus</a></div> -->
                </div>
            <?php endforeach; ?>
        </div>
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