<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <html lang="fr">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/style/about.css">
    <title>Les 3 Wilders | A propos de nous</title>
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
            <div class="article">
                <div class="article-img"><img src="/image/Alexandre.jpg" alt=""></div>
                <div class="article-title">
                    <h3>Alexandre</h3>
                </div>
                <div class="article-content">
                    <p>Sa curiosité insatiable l'a souvent conduit à explorer les nuances infinies des brasseries
                        artisanales. Bien qu'il préfère généralement la solitude, les rencontres autour d'une bonne
                        bière lui permettent de se libérer de sa coquille, révélant un côté sociable et chaleureux.</p>
                </div>

                <!-- <div class="read-button"><a href="#">En savoir plus</a></div> -->
            </div>
            <div class="article">
                <div class="article-img"><img src="/image/julien.jpg" alt=""></div>
                <div class="article-title">
                    <h3>Julien</h3>
                </div>
                <div class="article-content">
                    <p>Passionné de tout type d'alcool, musicien à ses heures perdues et amoureux des bonnes choses. Il est forcément partant pour ce genre de projet avec un enthousiasme et une énergie digne d'un grimpeur dans le parc du Yosemite. </p>
                </div>
                <!-- <div class="read-button"><a href="#">En savoir plus</a></div> -->
            </div>
            <div class="article">
                <div class="article-img"><img src="/image/phil.jpg" alt=""></div>
                <div class="article-title">
                    <h3>Philippe</h3>
                </div>
                <div class="article-content">
                    <p>Passioné de jeux vidéos depuis tout petit ainsi que mordu de musique et de cinéma, Philippe aime
                        aussi
                        la bière. Il s'est donc mis en tête d'en fabriquer. Mais seulement des bonnes. Et des
                        artisanales.
                        Pleines d'amour et de savoir-faire.
                    </p>
                </div>
                <!-- <div class="read-button"><a href="#">En savoir plus</a></div> -->
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

</html>