<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>موقع الكشفية - الصفحة الرئيسية</title>
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
                    <a href="index.php" style="font-weight:bold; color:#fff; text-decoration:none;">AR</a> |
                    <a href="index.fr.php" style="color:#fff; text-decoration:none;">FR</a>
                </div>
                <ul class="nav-menu">
                    <li><a href="index.php" class="active">الرئيسية</a></li>
                    <li><a href="discussions.php">المناقشات</a></li>
                    <li><a href="blog.php">المدونة</a></li>
                    <li><a href="shop.php">التسوق</a></li>
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
                <!-- تم إزالة زر اللغة من هنا -->
            </div>
        </nav>
    </header>

    <main>
        <!-- Hero Section -->
        <section class="hero">
            <div class="hero-content">
                <h1>مرحباً بكم في عالم الكشفية</h1>
                <p>اكتشف الطبيعة، تعلم المهارات، وابنِ شخصية قوية معنا</p>
                <div class="hero-buttons">
                    <a href="discussions.php" class="btn btn-primary">انضم للمناقشات</a>
                    <a href="shop.php" class="btn btn-secondary">تسوق الآن</a>
                </div>
            </div>
          
        </section>

        <!-- Features Section -->
        <section class="features">
            <div class="container">
                <h2 class="section-title">ما نقدمه</h2>
                <div class="features-grid">
                    <div class="feature-card">
                        <div class="feature-image">
                            <img src="images/A group of scouts gathered around a campfire in a forest clearing, sharing stories and roasting marshmallows..png" alt="التخييم">
                        </div>
                        <h3>التخييم</h3>
                        <p>تعلم فن التخييم وإقامة المعسكرات في الطبيعة</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-image">
                            <img src="images/A detailed map spread out on a rustic wooden table with a compass and hiking gear beside it..png" alt="الملاحة">
                        </div>
                        <h3>الملاحة</h3>
                        <p>اكتشف مهارات الملاحة والخرائط والاتجاهات</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-image">
                            <img src="images/A group of scouts building a shelter using ropes and branches in a lush green forest..png" alt="البقاء">
                        </div>
                        <h3>البقاء</h3>
                        <p>تعلم مهارات البقاء في الطبيعة والنجاة</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-image">
                            <img src="images/A group of scouts engaged in a leadership training workshop outdoors, collaborating on a team-building exercise..png" alt="القيادة">
                        </div>
                        <h3>القيادة</h3>
                        <p>طور مهارات القيادة والعمل الجماعي</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="about">
            <div class="container">
                <div class="about-content">
                    <div class="about-text">
                        <h2>من نحن</h2>
                        <p>نحن مجموعة متخصصة في الكشفية نهدف إلى تنمية مهارات الشباب وتعليمهم قيم العمل الجماعي والمسؤولية تجاه البيئة. نقدم برامج متنوعة تشمل التخييم والملاحة ومهارات البقاء.</p>
                        <p>تأسست مجموعتنا عام 2020 وتمكنا من تدريب أكثر من 500 شاب وشابة على مهارات الكشفية المختلفة.</p>
                    </div>
                    <div class="about-stats">
                        <div class="stat">
                            <h3>500+</h3>
                            <p>متدرب</p>
                        </div>
                        <div class="stat">
                            <h3>50+</h3>
                            <p>معسكر</p>
                        </div>
                        <div class="stat">
                            <h3>20+</h3>
                            <p>مدرب</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Latest News -->
        <section class="news">
            <div class="container">
                <h2 class="section-title">أحدث الأخبار</h2>
                <div class="news-grid">
                    <article class="news-card">
                        <div class="news-image">
                            <img src="images/A group of scouts gathered around a campfire in a forest clearing, sharing stories and roasting marshmallows..png" alt="معسكر جديد">
                        </div>
                        <div class="news-content">
                            <h3>معسكر الربيع القادم</h3>
                            <p>انضم إلينا في معسكر الربيع القادم في جبال الألب. ستعلم مهارات التخييم المتقدمة والملاحة.</p>
                            <a href="#" class="read-more">اقرأ المزيد</a>
                        </div>
                    </article>
                    <article class="news-card">
                        <div class="news-image">
                            <img src="images/A group of scouts engaged in a leadership training workshop outdoors, collaborating on a team-building exercise..png" alt="تدريب جديد">
                        </div>
                        <div class="news-content">
                            <h3>دورة تدريب المدربين</h3>
                            <p>افتتاح دورة تدريب المدربين الجديدة. تعلم كيف تصبح مدرب كشفي محترف.</p>
                            <a href="#" class="read-more">اقرأ المزيد</a>
                        </div>
                    </article>
                </div>
            </div>
        </section>
    </main>

    <footer id="contact">
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
                        <li><a href="#about">من نحن</a></li>
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
    <style>
.lang-switcher {
    position: relative;
    display: flex;
    align-items: center;
    margin-right: 0.5rem;
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
@media (max-width: 900px) {
    .lang-switcher { margin-right: 0; }
    .lang-btn { font-size: 0.92rem; min-width: 60px; height: 30px; padding: 2px 7px; }
    .lang-dropdown { min-width: 100px; }
}
@media (max-width: 600px) {
    .lang-switcher { margin: 0.5rem 0 0 0; }
    .lang-btn { font-size: 0.9rem; min-width: 54px; height: 28px; padding: 2px 5px; }
}
</style>
<script>
document.addEventListener('click', function(e) {
    var btn = document.querySelector('.lang-btn');
    var dropdown = document.querySelector('.lang-dropdown');
    if (dropdown && !btn.contains(e.target) && !dropdown.contains(e.target)) {
        dropdown.classList.remove('show');
    }
});
</script>
</body>
</html> 