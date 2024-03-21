<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <html lang="fr">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/style/index.css">
    <title>Les 3 Wilders | acceuil</title>
    <?php include 'tableBiere.php'; ?>
</head>

<body>
    <header>
        <?php include './header.php';?>
    </header>
    <main>
        <div class="titre">
            <div class="page-title">
                <p>News</p>
            </div>
        </div>
        <div class="thumbnail">
            <?php foreach ($news as $name => $data) : ?>
                <div class="article">
                    <div class="article-img"><img src="/image/<?=$data['image']?>" alt="" class="<?=$data['class']?>"></div>
                    <div class="article-title">
                        <h3><?=$data['titre']?></h3>
                    </div>
                    <div class="article-content">
                        <p><?=$data['description']?></p>
                    </div>

                    <div class="read-button"><a href="<?=$data['link']?>">En savoir plus</a></div>
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
</php>