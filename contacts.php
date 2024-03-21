<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <html lang="fr">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/style/contacts.css">
    <title>Les 3 Wilders | Contact</title>
</head>

<body>
    <header>
        <?php include './header.php';?>
    </header>
    <main>
        <div class="titre">
            <div class="page-title">
                <p>Contact</p>
            </div>
        </div>
        <div class="thumbnail">
            <div class="info-bloc">
                <div class="info-resa">
                    <div class="location-info">
                        <h3>Les 3 wilders</h3>
                        <ul>
                            <li>47 Route de l'Hôpital</li>
                            <li>67000 Strasbourg</li>
                            <li><br><i class="bi bi-phone"></i> 03 12 34 56 78</li>
                            <li><i class="bi bi-envelope-at"></i>
                            Rien-a-voir-ici@brasserie-wilders.com</li>
                        </ul>
                    </div>
                    <div class="reservation">
                        <h3>Contact / Réservation</h3>
                        <form action="mail-form.php#reservation" method="post">
                            <div class="form-group">
                                <label for="name">Votre nom :</label>
                                <input type="text" id="name" name="name" required>
                            </div>

                            <div class="form-group">
                                <label for="email">Votre e-mail :</label>
                                <input type="email" id="email" name="email" required>
                            </div>

                            <div class="form-group">
                                <label for="message">Votre message :</label>
                                <textarea name="message" id="message" rows="4" required></textarea>
                            </div>

                            <div class="form-group">
                                <div class="form-button"><input type="submit" value="Envoyer">
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
                <div class="maps">
                    <h3>Comment nous trouver ?</h3>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1320.0437232125673!2d7.751144975445671!3d48.569873924398635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4796c9a8c0dab0e1%3A0x8b3f8b814bc1bf7c!2s47%20Rte%20de%20l&#39;H%C3%B4pital%2C%2067100%20Strasbourg!5e0!3m2!1sfr!2sfr!4v1710240544498!5m2!1sfr!2sfr"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
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