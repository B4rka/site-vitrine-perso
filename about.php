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
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, voluptatum? Officiis veniam
                        tenetur, eveniet aliquam adipisci ad commodi nulla repudiandae nihil, hic laborum non! Id
                        laboriosam fugiat molestias velit libero.</p>
                </div>

                <!-- <div class="read-button"><a href="#">En savoir plus</a></div> -->
            </div>
            <div class="article">
                <div class="article-img"><img src="/image/julien.jpg" alt=""></div>
                <div class="article-title">
                    <h3>Julien</h3>
                </div>
                <div class="article-content">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, voluptatum? Officiis veniam
                        tenetur, eveniet aliquam adipisci ad commodi nulla repudiandae nihil, hic laborum non! Id
                        laboriosam fugiat molestias velit libero.</p>
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
                <a href="index.html">Accueil</a>
                <a href="beers.html">Nos bières</a>
                <a href="events.html">Evènements</a>
                <a href="contacts.html">Nous contacter</a>
                <a href="#top">A propos de nous</a>
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