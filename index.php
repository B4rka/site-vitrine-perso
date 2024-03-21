<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <html lang="fr">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/style/index.css">
    <title>Les 3 Wilders | acceuil</title>
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
            <div class="article">
                <div class="article-img"><img src="/image/new-anae.jpg" alt="" class="new-anae"></div>
                <div class="article-title">
                    <h3>L'Anaé</h3>
                </div>
                <div class="article-content">
                    <p>On vous a concocté notre dernière éphémère ! Une Rye Amber Ale tout juste sortie de fermentation,
                        parfaite pour ce début de primptemps ! </p>
                </div>

                <div class="read-button"><a href="beers.php#anae">En savoir plus</a></div>
            </div>
            <div class="article">
                <div class="article-img"><img src="/image/cultOfSac.png" alt="" class="cult"></div>
                <div class="article-title">
                    <h3>On va faire du sale !</h3>
                </div>
                <div class="article-content">
                    <p>Enfin ! On a reussi à booker notre petit coup de coeur pour vous le faire partager en sirotant
                        vos bières préférées. On aura l'honneur d'acceuillir <strong>Cult Of Sacrifice</strong> pour
                        bien
                        nettoyer vos esgourdes !</p>
                </div>
                <div class="read-button"><a href="events.php#carousel__slide2">En savoir plus</a></div>
            </div>
            <div class="article">
                <div class="article-img"><img src="/image/cuve.jpg" alt="" class="cuve"></div>
                <div class="article-title">
                    <h3>La grosse Bertha</h3>
                </div>
                <div class="article-content">
                    <p>La fammille s'agrandit ! parce que vous êtes vraiment des gros soulard, vous nous avez forcé à
                        investir dans une grosse cuve de fermentation pour que vous puissiez encore et toujours plus
                        boire. <strong>Encore MERCI !</strong> tout ceci c'est grâce à <strong>vous</strong>, et à votre
                        foie...</p>
                </div>
                <div class="read-button"><a href="#">En savoir plus</a></div>
            </div>
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