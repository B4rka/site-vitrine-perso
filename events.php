<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/events.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <title>Evènements | Les 3 Wilders</title>
</head>
<header id="top">
    <?php include './header.php';?>
</header>

<body>
    <main>
        <div class="page-title">
            <p>Evènements</p>
        </div>
        <section class="carousel" aria-label="Gallery">
            <ol class="carousel__viewport">
                <!-- Slider 1 -->
                <li id="carousel__slide1" tabindex="0" class="carousel__slide">
                    <div class="article article1">
                        <div class="article-title">
                            <h3>RESOW</h3>
                        </div>
                        <div class="article-img"><img src="/image/resow.jpg" alt="">
                        </div>
                        <div class="article-content">
                            <p>Date : 12/12/24</p>
                            <p>A 19h30 (Plutôt 20h c'est des zicos, lol)</p>
                            <p>Prix d'entrée : 5€</p>
                            <p><a href=""></a><i class="bi bi-youtube"></i> : <a href="#">Cliquez ici</a></p>
                            <p><i class="bi bi-spotify"> : </i><a href="#">Cliquez ici</a></p>
                        </div>

                        <div class="read-button"><a href="index.php#top">En savoir plus</a>
                        </div>
                    </div>
                    <div class="carousel__snapper">
                        <a href="#carousel__slide4" class="carousel__prev">Go to last slide</a>
                        <a href="#carousel__slide2" class="carousel__next">Go to next slide</a>
                    </div>
                </li>
                <!-- Slider 2 -->
                <li id="carousel__slide2" tabindex="0" class="carousel__slide">
                    <div class="article article2">
                        <div class="article-title">
                            <h3>Cult of Sacrifice</h3>
                        </div>
                        <div class="article-img"><img src="/image/cultOfSac.png" alt="">
                        </div>
                        <div class="article-content">
                            <p>Date : 24/12/24</p>
                            <p>A 20h00</p>
                            <p>Prix d'entrée : PAF libre</p>
                            <p><a href=""></a><i class="bi bi-youtube"></i> : <a href="#">Cliquez ici</a></p>
                            <p><i class="bi bi-spotify"> : </i><a href="#">Cliquez ici</a></p>
                        </div>
                        <div class="read-button"><a href="#">En savoir plus</a>
                        </div>
                    </div>
                    <div class="carousel__snapper">
                    </div>
                    <a href="#carousel__slide1" class="carousel__prev">Go to previous slide</a>
                    <a href="#carousel__slide3" class="carousel__next">Go to next slide</a>
                </li>
                <!-- Slider 3 -->
                <li id="carousel__slide3" tabindex="0" class="carousel__slide">
                    <div class="article article3">
                        <div class="article-img"><img src="/image/jivay.png" alt=""></div>
                        <div class="article-title">
                            <h3>Guest brasseur</h3>
                        </div>
                        <div class="article-content">
                            <p><strong><em><u>Le 05/05/24</u></em></strong></p>
                            <p>Venez dégustez les bières de Jivay, le chef du culte de la bière en personne !</p>
                        </div>

                        <div class="read-button"><a href="#">En savoir plus</a></div>
                    </div>
                    <div class="carousel__snapper"></div>
                    <a href="#carousel__slide2" class="carousel__prev">Go to previous slide</a>
                    <a href="#carousel__slide4" class="carousel__next">Go to next slide</a>
                </li>
                <!-- Slider 4 -->
                <li id="carousel__slide4" tabindex="0" class="carousel__slide">
                    <div class="article article4">
                        <div class="article-img"><img src="/image/brassin.jpg" alt=""></div>
                        <div class="article-title">
                            <h3>Nouveau brassin</h3>
                        </div>
                        <div class="article-content">
                            <p><strong><em><u>Le 06/08/24</u></em></strong></p>
                            <p>C'est la fin des vendanges et la bière nouvelle est enfin là !
                                Une multitude de nouvelles bières éphémères vous attendent avec de nouvelles saveurs !
                            </p>
                        </div>

                        <div class="read-button"><a href="#">En savoir plus</a></div>
                    </div>
                    <div class="carousel__snapper"></div>
                    <a href="#carousel__slide3" class="carousel__prev">Go to previous slide</a>
                    <a href="#carousel__slide1" class="carousel__next">Go to first slide</a>
                </li>
            </ol>
            <!-- Boutons de navigation -->
            <aside class="carousel__navigation">
                <ol class="carousel__navigation-list">
                    <li class="carousel__navigation-item">
                        <a href="#carousel__slide1" class="carousel__navigation-button">Go to slide 1</a>
                    </li>
                    <li class="carousel__navigation-item">
                        <a href="#carousel__slide2" class="carousel__navigation-button">Go to slide 2</a>
                    </li>
                    <li class="carousel__navigation-item">
                        <a href="#carousel__slide3" class="carousel__navigation-button">Go to slide 3</a>
                    </li>
                    <li class="carousel__navigation-item">
                        <a href="#carousel__slide4" class="carousel__navigation-button">Go to slide 4</a>
                    </li>
                </ol>
            </aside>
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

</php>