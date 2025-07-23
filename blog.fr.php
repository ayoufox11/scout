<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Scout</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="nav-container">
                <div class="nav-logo">
                    <h2>🏕️ Scout</h2>
                </div>
                <ul class="nav-menu">
                    <li><a href="index.fr.php">Accueil</a></li>
                    <li><a href="discussions.fr.php">Discussions</a></li>
                    <li><a href="blog.fr.php" class="active">Blog</a></li>
                    <li><a href="shop.fr.php">Boutique</a></li>
                    <li><a href="members.fr.php">Espace membres</a></li>
                    <li><a href="login.fr.php">Connexion</a></li>
                    <li><a href="register.fr.php">Inscription</a></li>
                    <li><a href="#about">À propos</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <div class="lang-switcher" style="margin-left: 1rem; font-size:1.1rem;">
                    <a href="blog.php" style="color:#fff; text-decoration:none;">AR</a> |
                    <a href="blog.fr.php" style="font-weight:bold; color:#fff; text-decoration:none;">FR</a>
                </div>
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <!-- تم إزالة أزرار اللغة هنا -->
            </div>
        </nav>
    </header>
    <main>
        <section class="blog-header">
            <div class="container">
                <h1>Blog du Scout</h1>
                <p>Découvre les derniers articles et conseils dans l'univers du scoutisme.</p>
            </div>
        </section>
        <section class="blog-categories">
            <div class="container">
                <div class="categories-filter">
                    <button class="category-btn active" data-category="all">Tous les articles</button>
                    <button class="category-btn" data-category="camping">Camping</button>
                    <button class="category-btn" data-category="navigation">Navigation</button>
                    <button class="category-btn" data-category="survival">Survie</button>
                    <button class="category-btn" data-category="leadership">Leadership</button>
                    <button class="category-btn" data-category="tips">Conseils</button>
                </div>
            </div>
        </section>
        <section class="featured-article">
            <div class="container">
                <div class="featured-card">
                    <div class="featured-image">
                        <img src="images/A group of young scouts hiking through a lush green forest, smiling and enjoying their adventure together..png" alt="Randonnée">
                        <div class="featured-badge">À la une</div>
                    </div>
                    <div class="featured-content">
                        <h2>Randonnée en forêt : conseils pour débutants</h2>
                        <p>Découvrez comment bien préparer votre première randonnée en forêt avec notre guide complet pour les scouts débutants.</p>
                        <div class="article-meta">
                            <span>🗓️ 10 juin 2024</span>
                            <span>👤 Admin</span>
                        </div>
                        <div class="article-stats">
                            <span>💬 5 commentaires</span>
                            <span>👁️ 120 vues</span>
                        </div>
                        <a href="#" class="btn btn-primary btn-small">Lire l'article</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="blog-articles">
            <div class="container">
                <div class="articles-grid">
                    <div class="blog-card">
                        <div class="article-image">
                            <img src="images/A group of scouts gathered around a campfire in a forest clearing, sharing stories and roasting marshmallows.-2.png" alt="Feu de camp">
                            <div class="category-badge">Camping</div>
                        </div>
                        <div class="article-content">
                            <h3>Les secrets d'un feu de camp réussi</h3>
                            <p>Apprenez à allumer et entretenir un feu de camp en toute sécurité lors de vos sorties scouts.</p>
                        </div>
                        <div class="article-footer">
                            <span class="read-time">⏱️ 3 min</span>
                            <a href="#" class="read-more">Lire plus</a>
                        </div>
                    </div>
                    <div class="blog-card">
                        <div class="article-image">
                            <img src="images/A group of scouts building a shelter using ropes and branches in a lush green forest..png" alt="Abri nature">
                            <div class="category-badge">Survie</div>
                        </div>
                        <div class="article-content">
                            <h3>Construire un abri naturel</h3>
                            <p>Les étapes pour construire un abri efficace avec les ressources de la forêt.</p>
                        </div>
                        <div class="article-footer">
                            <span class="read-time">⏱️ 4 min</span>
                            <a href="#" class="read-more">Lire plus</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
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
            </div>
        </div>
    </footer>
    <script src="js/script.js"></script>
</body>
</html> 