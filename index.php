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

                <div class="read-button"><a href="beers.html#anae">En savoir plus</a></div>
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
                <div class="read-button"><a href="events.html#carousel__slide2">En savoir plus</a></div>
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
        <section class="footer-container">
            <div class="footer-logo">
                <img src="./image/logo nom.png" class="footer-logo" alt="">
            </div>
            <aside class="infos">
                <p><i class="bi bi-house-door-fill"></i>742 Evergreen Terrace, 12345, Narnia</p>
                <a><i class="bi bi-envelope-fill"></i>Rien-a-voir-ici@brasserie-wilders.com</a>
                <p><i class="bi bi-phone-fill"></i>03.12.34.56.78</p>
            </aside>
            <nav class="footer-section">
                <h3>Sections :</h3>
                <a href="#top">Accueil</a>
                <a href="beers.html">Nos bières</a>
                <a href="events.html">Evènements</a>
                <a href="contacts.html">Nous contacter</a>
                <a href="about.html">A propos de nous</a>
            </nav>
            <aside class="footer-horaires">
                <h3>Horaires d'ouverture</h3>
                <p>La semaine : 15h-22h</p>
                <p>Le vendredi : 17h-00h</p>
                <p>Le samedi : 17h-03h</p>
                <p>Le dimanche : fermé</p>
            </aside>
            <nav class="footer-reseaux">
                <h3>Réseaux sociaux :</h3>
                <div class="network-icons">
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                </div>
                <img src="./image/logoab_eurofeuille_biologique.png" class="network-image" alt="">
            </nav>
        </section>
    </footer>
    <div class="trademark">
        Coded by Alexandre, Julien and Philippe <br>
        © WildCodeSchool promotion Février 2024
    </div>
</body>

</html>