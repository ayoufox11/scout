<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>متجر الكشفية - موقع الكشفية</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="nav-container">
                <div class="nav-logo">
                    <h2>🏕️ الكشفية</h2>
                </div>
                <div class="lang-switcher" style="margin-left: 1rem; font-size:1.1rem;">
                    <a href="shop.php" style="font-weight:bold; color:#fff; text-decoration:none;">AR</a> |
                    <a href="shop.fr.php" style="color:#fff; text-decoration:none;">FR</a>
                </div>
                <ul class="nav-menu">
                    <li><a href="index.php">الرئيسية</a></li>
                    <li><a href="discussions.php">المناقشات</a></li>
                    <li><a href="blog.php">المدونة</a></li>
                    <li><a href="shop.php" class="active">التسوق</a></li>
                    <li><a href="members.php">مساحة الأعضاء</a></li>
                    <li><a href="login.php">تسجيل الدخول</a></li>
                    <li><a href="register.php">إنشاء حساب</a></li>
                    <li><a href="#about">من نحن</a></li>
                    <li><a href="#contact">اتصل بنا</a></li>
                </ul>
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
                <h1>متجر الكشفية</h1>
                <p>جميع معدات وأدوات الكشفية التي تحتاجها</p>
            </div>
        </section>

        <!-- Shop Filters -->
        <section class="shop-filters">
            <div class="container">
                <div class="filters-container">
                    <div class="filter-group">
                        <label for="category-filter">الفئة:</label>
                        <select id="category-filter">
                            <option value="">جميع الفئات</option>
                            <option value="camping">التخييم</option>
                            <option value="navigation">الملاحة</option>
                            <option value="survival">مهارات البقاء</option>
                            <option value="clothing">الملابس</option>
                            <option value="accessories">الإكسسوارات</option>
                        </select>
                    </div>
                    <div class="filter-group">
                        <label for="price-filter">السعر:</label>
                        <select id="price-filter">
                            <option value="">جميع الأسعار</option>
                            <option value="0-100">0 - 100 ريال</option>
                            <option value="100-300">100 - 300 ريال</option>
                            <option value="300-500">300 - 500 ريال</option>
                            <option value="500+">500+ ريال</option>
                        </select>
                    </div>
                    <div class="filter-group">
                        <label for="sort-filter">ترتيب:</label>
                        <select id="sort-filter">
                            <option value="popular">الأكثر شعبية</option>
                            <option value="price-low">السعر: من الأقل للأعلى</option>
                            <option value="price-high">السعر: من الأعلى للأقل</option>
                            <option value="newest">الأحدث</option>
                        </select>
                    </div>
                </div>
            </div>
        </section>

        <!-- Products Grid -->
        <section class="products-section">
            <div class="container">
                <div class="products-grid">
                    <!-- Product 1 -->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="images/A small gathering of people preparing a shelter in a vibrant, green woodland..png" alt="خيمة كشفية">
                            <div class="product-badge">جديد</div>
                        </div>
                        <div class="product-info">
                            <h3>خيمة كشفية 4 أشخاص</h3>
                            <p>خيمة مقاومة للماء والرياح، مناسبة لجميع الظروف الجوية</p>
                            <div class="product-rating">
                                <span class="stars">⭐⭐⭐⭐⭐</span>
                                <span class="rating-text">(15 تقييم)</span>
                            </div>
                            <div class="product-price">
                                <span class="current-price">450 ريال</span>
                                <span class="old-price">550 ريال</span>
                            </div>
                            <div class="product-actions">
                                <button class="btn btn-primary add-to-cart">أضف للسلة</button>
                                <button class="btn btn-secondary wishlist">❤️</button>
                            </div>
                        </div>
                    </div>

                    <!-- Product 2 -->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="images/A bright red sleeping bag laid out on the grass in a serene forest setting..png" alt="كيس نوم">
                            <div class="product-badge sale">خصم 20%</div>
                        </div>
                        <div class="product-info">
                            <h3>كيس نوم دافئ</h3>
                            <p>كيس نوم عازل للحرارة، مناسب لدرجات الحرارة المنخفضة</p>
                            <div class="product-rating">
                                <span class="stars">⭐⭐⭐⭐⭐</span>
                                <span class="rating-text">(28 تقييم)</span>
                            </div>
                            <div class="product-price">
                                <span class="current-price">120 ريال</span>
                                <span class="old-price">150 ريال</span>
                            </div>
                            <div class="product-actions">
                                <button class="btn btn-primary add-to-cart">أضف للسلة</button>
                                <button class="btn btn-secondary wishlist">❤️</button>
                            </div>
                        </div>
                    </div>

                    <!-- Product 3 -->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="images/A black compass resting on a rustic wooden table surrounded by green foliage..png" alt="بوصلة">
                        </div>
                        <div class="product-info">
                            <h3>بوصلة احترافية</h3>
                            <p>بوصلة دقيقة مع إضاءة LED، مثالية للملاحة الليلية</p>
                            <div class="product-rating">
                                <span class="stars">⭐⭐⭐⭐</span>
                                <span class="rating-text">(42 تقييم)</span>
                            </div>
                            <div class="product-price">
                                <span class="current-price">85 ريال</span>
                            </div>
                            <div class="product-actions">
                                <button class="btn btn-primary add-to-cart">أضف للسلة</button>
                                <button class="btn btn-secondary wishlist">❤️</button>
                            </div>
                        </div>
                    </div>

                    <!-- Product 4 -->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="images/A blue hiking backpack resting on a rocky surface surrounded by tall trees in a forest..png" alt="حقيبة ظهر">
                        </div>
                        <div class="product-info">
                            <h3>حقيبة ظهر 60 لتر</h3>
                            <p>حقيبة ظهر كبيرة مع جيوب متعددة، مثالية للرحلات الطويلة</p>
                            <div class="product-rating">
                                <span class="stars">⭐⭐⭐⭐⭐</span>
                                <span class="rating-text">(33 تقييم)</span>
                            </div>
                            <div class="product-price">
                                <span class="current-price">280 ريال</span>
                            </div>
                            <div class="product-actions">
                                <button class="btn btn-primary add-to-cart">أضف للسلة</button>
                                <button class="btn btn-secondary wishlist">❤️</button>
                            </div>
                        </div>
                    </div>

                    <!-- Product 5 -->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="images/A camping lantern glowing softly in a dark forest setting surrounded by trees..png" alt="أداة إشعال النار">
                        </div>
                        <div class="product-info">
                            <h3>فانوس كشفي LED</h3>
                            <p>فانوس كشفي مع إضاءة LED قوية، مثالي للمعسكرات الليلية</p>
                            <div class="product-rating">
                                <span class="stars">⭐⭐⭐⭐</span>
                                <span class="rating-text">(19 تقييم)</span>
                            </div>
                            <div class="product-price">
                                <span class="current-price">65 ريال</span>
                            </div>
                            <div class="product-actions">
                                <button class="btn btn-primary add-to-cart">أضف للسلة</button>
                                <button class="btn btn-secondary wishlist">❤️</button>
                            </div>
                        </div>
                    </div>

                    <!-- Product 6 -->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="images/A stainless steel water bottle with a sleek design resting on a wooden picnic table surrounded by greenery..png" alt="قارورة ماء">
                            <div class="product-badge">الأكثر مبيعاً</div>
                        </div>
                        <div class="product-info">
                            <h3>قارورة ماء 1 لتر</h3>
                            <p>قارورة ماء معزولة تحافظ على درجة حرارة الماء لمدة 24 ساعة</p>
                            <div class="product-rating">
                                <span class="stars">⭐⭐⭐⭐⭐</span>
                                <span class="rating-text">(67 تقييم)</span>
                            </div>
                            <div class="product-price">
                                <span class="current-price">95 ريال</span>
                            </div>
                            <div class="product-actions">
                                <button class="btn btn-primary add-to-cart">أضف للسلة</button>
                                <button class="btn btn-secondary wishlist">❤️</button>
                            </div>
                        </div>
                    </div>

                    <!-- Product 7 -->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="images/A detailed map spread out on a rustic wooden table with a compass and hiking gear beside it..png" alt="خريطة طبوغرافية">
                        </div>
                        <div class="product-info">
                            <h3>خريطة طبوغرافية</h3>
                            <p>خريطة طبوغرافية مفصلة لمنطقة الرياض والمناطق المحيطة</p>
                            <div class="product-rating">
                                <span class="stars">⭐⭐⭐⭐</span>
                                <span class="rating-text">(14 تقييم)</span>
                            </div>
                            <div class="product-price">
                                <span class="current-price">45 ريال</span>
                            </div>
                            <div class="product-actions">
                                <button class="btn btn-primary add-to-cart">أضف للسلة</button>
                                <button class="btn btn-secondary wishlist">❤️</button>
                            </div>
                        </div>
                    </div>

                    <!-- Product 8 -->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="images/A red first aid kit with various medical supplies neatly organized inside, placed on a wooden surface outdoors..png" alt="حقيبة إسعافات أولية">
                        </div>
                        <div class="product-info">
                            <h3>حقيبة إسعافات أولية</h3>
                            <p>حقيبة إسعافات أولية شاملة لجميع الحالات الطارئة</p>
                            <div class="product-rating">
                                <span class="stars">⭐⭐⭐⭐⭐</span>
                                <span class="rating-text">(23 تقييم)</span>
                            </div>
                            <div class="product-price">
                                <span class="current-price">180 ريال</span>
                            </div>
                            <div class="product-actions">
                                <button class="btn btn-primary add-to-cart">أضف للسلة</button>
                                <button class="btn btn-secondary wishlist">❤️</button>
                            </div>
                        </div>
                    </div>
                    <!-- Product 9 -->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="images/A hiker with a large backpack walking along a mountain trail surrounded by tall trees and vibrant foliage..png" alt="معدات التخييم">
                        </div>
                        <div class="product-info">
                            <h3>معدات التخييم الشاملة</h3>
                            <p>مجموعة كاملة من معدات التخييم للمبتدئين والمحترفين</p>
                            <div class="product-rating">
                                <span class="stars">⭐⭐⭐⭐⭐</span>
                                <span class="rating-text">(89 تقييم)</span>
                            </div>
                            <div class="product-price">
                                <span class="current-price">750 ريال</span>
                                <span class="old-price">900 ريال</span>
                            </div>
                            <div class="product-actions">
                                <button class="btn btn-primary add-to-cart">أضف للسلة</button>
                                <button class="btn btn-secondary wishlist">❤️</button>
                            </div>
                        </div>
                    </div>

                    <!-- Product 10 -->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="images/A group of scouts building a shelter using ropes and branches in a lush green forest..png" alt="أدوات البناء">
                        </div>
                        <div class="product-info">
                            <h3>أدوات بناء المأوى</h3>
                            <p>مجموعة أدوات احترافية لبناء المأوى في الطبيعة</p>
                            <div class="product-rating">
                                <span class="stars">⭐⭐⭐⭐</span>
                                <span class="rating-text">(31 تقييم)</span>
                            </div>
                            <div class="product-price">
                                <span class="current-price">320 ريال</span>
                            </div>
                            <div class="product-actions">
                                <button class="btn btn-primary add-to-cart">أضف للسلة</button>
                                <button class="btn btn-secondary wishlist">❤️</button>
                            </div>
                        </div>
                    </div>

                    <!-- Product 11 -->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="images/A group of individuals practicing CPR techniques on training mannequins in a well-lit classroom..png" alt="دورة إسعافات أولية">
                        </div>
                        <div class="product-info">
                            <h3>دورة إسعافات أولية</h3>
                            <p>دورة تدريبية شاملة في الإسعافات الأولية للكشافة</p>
                            <div class="product-rating">
                                <span class="stars">⭐⭐⭐⭐⭐</span>
                                <span class="rating-text">(45 تقييم)</span>
                            </div>
                            <div class="product-price">
                                <span class="current-price">250 ريال</span>
                            </div>
                            <div class="product-actions">
                                <button class="btn btn-primary add-to-cart">أضف للسلة</button>
                                <button class="btn btn-secondary wishlist">❤️</button>
                            </div>
                        </div>
                    </div>

                    <!-- Product 12 -->
                    <div class="product-card">
                        <div class="product-image">
                            <img src="images/A group of young scouts hiking through a lush green forest, smiling and enjoying their adventure together..png" alt="رحلة كشفية">
                        </div>
                        <div class="product-info">
                            <h3>رحلة كشفية جماعية</h3>
                            <p>رحلة كشفية لمدة يومين في الغابات الطبيعية مع مدربين محترفين</p>
                            <div class="product-rating">
                                <span class="stars">⭐⭐⭐⭐⭐</span>
                                <span class="rating-text">(67 تقييم)</span>
                            </div>
                            <div class="product-price">
                                <span class="current-price">400 ريال</span>
                            </div>
                            <div class="product-actions">
                                <button class="btn btn-primary add-to-cart">أضف للسلة</button>
                                <button class="btn btn-secondary wishlist">❤️</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Load More Button -->
                <div class="load-more">
                    <button class="btn btn-secondary">عرض المزيد</button>
                </div>
            </div>
        </section>

        <!-- Shopping Cart Sidebar -->
        <div id="cart-sidebar" class="cart-sidebar">
            <div class="cart-header">
                <h3>🛒 سلة التسوق</h3>
                <button class="close-cart" onclick="toggleCart()">✕</button>
            </div>
            <div class="cart-items">
                <div class="cart-item">
                    <img src="images/A small gathering of people preparing a shelter in a vibrant, green woodland..png" alt="خيمة">
                    <div class="item-details">
                        <h4>خيمة كشفية 4 أشخاص</h4>
                        <p>450 ريال</p>
                        <div class="quantity-controls">
                            <button class="qty-btn">-</button>
                            <span class="quantity">1</span>
                            <button class="qty-btn">+</button>
                        </div>
                    </div>
                    <button class="remove-item">✕</button>
                </div>
            </div>
            <div class="cart-total">
                <div class="total-line">
                    <span>المجموع:</span>
                    <span>450 ريال</span>
                </div>
                <button class="btn btn-primary checkout-btn">إتمام الشراء</button>
            </div>
        </div>

        <!-- Cart Toggle Button -->
        <button id="cart-toggle" class="cart-toggle" onclick="toggleCart()">
            🛒 <span class="cart-count">1</span>
        </button>
    </main>

    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>🏕️ الكشفية</h3>
                    <p>نحن نؤمن بقوة الطبيعة في تنمية الشخصية وبناء القادة المستقبليين.</p>
                </div>
                <div class="footer-section">
                    <h4>روابط سريعة</h4>
                    <ul>
                        <li><a href="index.php">الرئيسية</a></li>
                        <li><a href="discussions.php">المناقشات</a></li>
                        <li><a href="blog.php">المدونة</a></li>
                        <li><a href="shop.php">التسوق</a></li>
                        <li><a href="members.php">Espace membres</a></li>
                        <li><a href="login.php">Connexion</a></li>
                        <li><a href="register.php">Inscription</a></li>
                        <li><a href="index.php#about">من نحن</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>اتصل بنا</h4>
                    <p>📧 info@scout.com</p>
                    <p>📞 +966 50 123 4567</p>
                    <p>📍 الرياض، المملكة العربية السعودية</p>
                </div>
                <div class="footer-section">
                    <h4>تابعنا</h4>
                    <div class="social-links">
                        <a href="#" class="social-link">📘</a>
                        <a href="#" class="social-link">📷</a>
                        <a href="#" class="social-link">🐦</a>
                        <a href="#" class="social-link">📺</a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 موقع الكشفية. جميع الحقوق محفوظة.</p>
                <!-- تم إزالة أزرار اللغة هنا -->
            </div>
        </div>
    </footer>

    <script src="js/script.js"></script>
    <script>
        function toggleCart() {
            const cart = document.getElementById('cart-sidebar');
            cart.classList.toggle('active');
        }

        // Add to cart functionality
        document.querySelectorAll('.add-to-cart').forEach(button => {
            button.addEventListener('click', function() {
                alert('تم إضافة المنتج إلى السلة!');
                const cartCount = document.querySelector('.cart-count');
                cartCount.textContent = parseInt(cartCount.textContent) + 1;
            });
        });

        // Wishlist functionality
        document.querySelectorAll('.wishlist').forEach(button => {
            button.addEventListener('click', function() {
                this.classList.toggle('active');
                if (this.classList.contains('active')) {
                    this.innerHTML = '❤️';
                    alert('تم إضافة المنتج إلى المفضلة!');
                } else {
                    this.innerHTML = '🤍';
                }
            });
        });
    </script>
</body>
</html> 