<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scout - Accueil</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
.lang-switcher {
    position: relative;
    display: flex;
    align-items: center;
    margin-left: 0.5rem;
}
.lang-btn {
    background: #fff;
    color: #3b1f56;
    border: 1px solid #3b1f56;
    border-radius: 5px;
    padding: 3px 10px 3px 8px;
    font-weight: 600;
    cursor: pointer;
    font-size: 0.95rem;
    display: flex;
    align-items: center;
    gap: 0.3rem;
    min-width: 70px;
    height: 32px;
    transition: box-shadow 0.2s;
    box-shadow: 0 1px 4px rgba(59,31,86,0.04);
}
.lang-btn:focus { outline: none; }
.lang-dropdown {
    display: none;
    position: absolute;
    left: 0;
    top: 110%;
    background: #fff;
    min-width: 120px;
    box-shadow: 0 2px 8px rgba(59,31,86,0.12);
    border-radius: 6px;
    z-index: 1002;
}
.lang-dropdown.show { display: block; }
.lang-dropdown a {
    color: #3b1f56;
    padding: 8px 12px;
    display: block;
    text-decoration: none;
    font-weight: 500;
    font-size: 0.95rem;
    border-bottom: 1px solid #eee;
    transition: background 0.2s;
}
.lang-dropdown a:last-child { border-bottom: none; }
.lang-dropdown a:hover { background: #f0f0f0; }
@media (max-width: 900px) {
    .lang-switcher { margin-left: 0; }
    .lang-btn { font-size: 0.92rem; min-width: 60px; height: 30px; padding: 2px 7px; }
    .lang-dropdown { min-width: 100px; }
}
@media (max-width: 600px) {
    .lang-switcher { margin: 0.5rem 0 0 0; }
    .lang-btn { font-size: 0.9rem; min-width: 54px; height: 28px; padding: 2px 5px; }
}
.lang-btn {
    background: #fff;
    color: #3b1f56;
    border: 1px solid #3b1f56;
    border-radius: 5px;
    padding: 3px 12px;
    font-weight: 600;
    cursor: pointer;
    font-size: 0.89rem;
    display: inline-flex;
    align-items: center;
    gap: 0.3rem;
    text-decoration: none;
    transition: background 0.2s, color 0.2s;
}
.lang-btn.active-lang, .lang-btn:active {
    background: #3b1f56;
    color: #fff;
    pointer-events: none;
}
.lang-btn:hover:not(.active-lang) {
    background: #f0f0f0;
}
</style>
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="nav-container">
                <div class="nav-logo">
                    <h2>🏕️ Scout</h2>
                </div>
                <ul class="nav-menu">
                    <li><a href="index.fr.php" class="active">Accueil</a></li>
                    <li><a href="discussions.fr.php">Discussions</a></li>
                    <li><a href="blog.fr.php">Blog</a></li>
                    <li><a href="shop.fr.php">Boutique</a></li>
                    <li><a href="members.fr.php">Espace membres</a></li>
                    <li><a href="login.fr.php">Connexion</a></li>
                    <li><a href="register.fr.php">Inscription</a></li>
                    <li><a href="#about">À propos</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <div class="lang-switcher" style="margin-left: 1rem; font-size:1.1rem;">
                    <a href="index.php" style="color:#fff; text-decoration:none;">AR</a> |
                    <a href="index.fr.php" style="font-weight:bold; color:#fff; text-decoration:none;">FR</a>
                </div>
                <!-- تم إزالة زر اللغة من هنا -->
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <!-- Hero Section -->
        <section class="hero">
            <div class="hero-content">
                <h1>Bienvenue dans l'univers du scoutisme</h1>
                <p>Explore la nature, apprends des compétences, et développe ta personnalité avec nous.</p>
                <div class="hero-buttons">
                    <a href="discussions.fr.php" class="btn btn-primary">Rejoindre les discussions</a>
                    <a href="shop.fr.php" class="btn btn-secondary">Boutique</a>
                </div>
            </div>
        </section>
        <!-- Features Section -->
        <section class="features">
            <div class="container">
                <h2 class="section-title">Nos activités</h2>
                <div class="features-grid">
                    <div class="feature-card">
                        <div class="feature-image">
                            <img src="images/A group of scouts gathered around a campfire in a forest clearing, sharing stories and roasting marshmallows..png" alt="Camping">
                        </div>
                        <h3>Camping</h3>
                        <p>Apprends l'art du camping et l'organisation de camps en pleine nature.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-image">
                            <img src="images/A detailed map spread out on a rustic wooden table with a compass and hiking gear beside it..png" alt="Navigation">
                        </div>
                        <h3>Navigation</h3>
                        <p>Découvre les compétences de navigation, de lecture de cartes et d'orientation.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-image">
                            <img src="images/A group of scouts building a shelter using ropes and branches in a lush green forest..png" alt="Survie">
                        </div>
                        <h3>Survie</h3>
                        <p>Apprends les techniques de survie et d'autonomie en pleine nature.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Section -->
        <section class="about" id="about">
            <div class="container">
                <div class="about-content">
                    <div class="about-text">
                        <h2>À propos du scoutisme</h2>
                        <p>Le scoutisme est une aventure éducative qui vise à développer l'autonomie, la responsabilité et l'esprit d'équipe chez les jeunes à travers des activités en plein air.</p>
                        <p>Rejoins-nous pour vivre des expériences inoubliables et acquérir des compétences utiles pour la vie !</p>
                    </div>
                    <div class="about-stats">
                        <div class="stat">
                            <h3>+100</h3>
                            <p>Membres actifs</p>
                        </div>
                        <div class="stat">
                            <h3>20</h3>
                            <p>Événements annuels</p>
                        </div>
                        <div class="stat">
                            <h3>15</h3>
                            <p>Encadrants</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- News Section -->
        <section class="news">
            <div class="container">
                <h2 class="section-title">Actualités & Événements</h2>
                <div class="news-grid">
                    <div class="news-card">
                        <div class="news-image">
                            <img src="images/A group of scouts gathered around a campfire in a forest clearing, sharing stories and roasting marshmallows.-1.png" alt="Camp d'été">
                        </div>
                        <div class="news-content">
                            <h3>Camp d'été 2024</h3>
                            <p>Préparez-vous pour notre grand camp d'été avec des activités variées et des aventures inoubliables !</p>
                            <a href="#" class="read-more">En savoir plus</a>
                        </div>
                    </div>
                    <div class="news-card">
                        <div class="news-image">
                            <img src="images/A group of scouts engaged in a leadership training workshop outdoors, collaborating on a team-building exercise..png" alt="Formation leadership">
                        </div>
                        <div class="news-content">
                            <h3>Formation leadership</h3>
                            <p>Participez à nos ateliers pour développer vos compétences en leadership et en gestion d'équipe.</p>
                            <a href="#" class="read-more">En savoir plus</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer id="contact">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>🏕️ Scout</h3>
                    <p>Nous croyons au pouvoir de la nature pour former des leaders et des citoyens responsables.</p>
                </div>
                <div class="footer-section">
                    <h4>Liens rapides</h4>
                    <ul>
                        <li><a href="index.fr.php">Accueil</a></li>
                        <li><a href="discussions.fr.php">Discussions</a></li>
                        <li><a href="blog.fr.php">Blog</a></li>
                        <li><a href="shop.fr.php">Boutique</a></li>
                        <li><a href="members.fr.php">Espace membres</a></li>
                        <li><a href="login.fr.php">Connexion</a></li>
                        <li><a href="register.fr.php">Inscription</a></li>
                        <li><a href="#about">À propos</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Contact</h4>
                    <p>📧 info@scout.com</p>
                    <p>📞 +33 1 23 45 67 89</p>
                    <p>📍 Paris, France</p>
                </div>
                <div class="footer-section">
                    <h4>Suivez-nous</h4>
                    <div class="social-links">
                        <a href="#" class="social-link">📘</a>
                        <a href="#" class="social-link">📸</a>
                        <a href="#" class="social-link">🐦</a>
                        <a href="#" class="social-link">▶️</a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Scout. Tous droits réservés.</p>
                <!-- Boutons de langue supprimés ici -->
            </div>
        </div>
    </footer>
    <script src="js/script.js"></script>
</body>
</html> 