<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boutique - Scout</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
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
                    <li><a href="index.fr.php">Accueil</a></li>
                    <li><a href="discussions.fr.php">Discussions</a></li>
                    <li><a href="blog.fr.php">Blog</a></li>
                    <li><a href="shop.fr.php" class="active">Boutique</a></li>
                    <li><a href="members.fr.php">Espace membres</a></li>
                    <li><a href="login.fr.php">Connexion</a></li>
                    <li><a href="register.fr.php">Inscription</a></li>
                    <li><a href="#about">À propos</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <div class="lang-switcher" style="margin-left: 1rem; font-size:1.1rem;">
                    <a href="shop.php" style="color:#fff; text-decoration:none;">AR</a> |
                    <a href="shop.fr.php" style="font-weight:bold; color:#fff; text-decoration:none;">FR</a>
                </div>
                <!-- تم إزالة أزرار اللغة هنا -->
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <!-- Shop Header -->
        <section class="shop-header">
            <div class="container">
                <h1>Boutique Scout</h1>
                <p>Tous les équipements et accessoires scouts dont vous avez besoin</p>
            </div>
        </section>
        <!-- Shop Filters -->
        <section class="shop-filters">
            <div class="container">
                <div class="filters-container">
                    <div class="filter-group">
                        <label for="category-filter">Catégorie :</label>
                        <select id="category-filter">
                            <option value="">Toutes les catégories</option>
                            <option value="camping">Camping</option>
                            <option value="navigation">Navigation</option>
                            <option value="survival">Survie</option>
                            <option value="clothing">Vêtements</option>
                            <option value="accessories">Accessoires</option>
                        </select>
                    </div>
                    <div class="filter-group">
                        <label for="price-filter">Prix :</label>
                        <select id="price-filter">
                            <option value="">Tous les prix</option>
                            <option value="0-100">0 - 100 €</option>
                            <option value="100-300">100 - 300 €</option>
                            <option value="300-500">300 - 500 €</option>
                            <option value="500+">500+ €</option>
                        </select>
                    </div>
                </div>
            </div>
        </section>
        <!-- Produits -->
        <section class="products-section">
            <div class="container">
                <div class="products-grid">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="images/A small gathering of people preparing a shelter in a vibrant, green woodland..png" alt="Tente">
                        </div>
                        <div class="product-info">
                            <h3>Tente scout 4 personnes</h3>
                            <p>Idéale pour les camps scouts et les aventures en plein air.</p>
                            <div class="product-price">
                                <span class="current-price">450 €</span>
                            </div>
                            <div class="product-actions">
                                <button class="btn btn-primary">Ajouter au panier</button>
                            </div>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-image">
                            <img src="images/A bright red sleeping bag laid out on the grass in a serene forest setting..png" alt="Sac de couchage">
                        </div>
                        <div class="product-info">
                            <h3>Sac de couchage</h3>
                            <p>Confortable et chaud pour toutes les saisons.</p>
                            <div class="product-price">
                                <span class="current-price">120 €</span>
                            </div>
                            <div class="product-actions">
                                <button class="btn btn-primary">Ajouter au panier</button>
                            </div>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-image">
                            <img src="images/A stainless steel water bottle with a sleek design resting on a wooden picnic table surrounded by greenery..png" alt="Gourde">
                        </div>
                        <div class="product-info">
                            <h3>Gourde inox</h3>
                            <p>Solide, légère et écologique.</p>
                            <div class="product-price">
                                <span class="current-price">25 €</span>
                            </div>
                            <div class="product-actions">
                                <button class="btn btn-primary">Ajouter au panier</button>
                            </div>
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
                <!-- Boutons de langue supprimés ici -->
            </div>
        </div>
    </footer>
    <script src="js/script.js"></script>
</body>
</html> 