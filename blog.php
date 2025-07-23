<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>المدونة - موقع الكشفية</title>
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
                    <a href="blog.php" style="font-weight:bold; color:#fff; text-decoration:none;">AR</a> |
                    <a href="blog.fr.php" style="color:#fff; text-decoration:none;">FR</a>
                </div>
                <ul class="nav-menu">
                    <li><a href="index.php">الرئيسية</a></li>
                    <li><a href="discussions.php">المناقشات</a></li>
                    <li><a href="blog.php" class="active">المدونة</a></li>
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
            </div>
        </nav>
    </header>

    <main>
        <!-- Blog Header -->
        <section class="blog-header">
            <div class="container">
                <h1>مدونة الكشفية</h1>
                <p>اكتشف أحدث المقالات والنصائح في عالم الكشفية</p>
            </div>
        </section>

        <!-- Blog Categories -->
        <section class="blog-categories">
            <div class="container">
                <div class="categories-filter">
                    <button class="category-btn active" data-category="all">جميع المقالات</button>
                    <button class="category-btn" data-category="camping">التخييم</button>
                    <button class="category-btn" data-category="navigation">الملاحة</button>
                    <button class="category-btn" data-category="survival">مهارات البقاء</button>
                    <button class="category-btn" data-category="leadership">القيادة</button>
                    <button class="category-btn" data-category="tips">نصائح</button>
                </div>
            </div>
        </section>

        <!-- Featured Article -->
        <section class="featured-article">
            <div class="container">
                <div class="featured-card">
                    <div class="featured-image">
                        <img src="images/A group of scouts gathered around a campfire in a forest clearing, sharing stories and roasting marshmallows..png" alt="مقال مميز">
                        <div class="featured-badge">مقال مميز</div>
                    </div>
                    <div class="featured-content">
                        <div class="article-meta">
                            <span class="category">التخييم</span>
                            <span class="date">15 مارس 2024</span>
                            <span class="author">أحمد محمد</span>
                        </div>
                        <h2>دليل شامل للتخييم للمبتدئين</h2>
                        <p>اكتشف أساسيات التخييم من اختيار المكان المناسب إلى إعداد المعسكر وإشعال النار. دليل شامل للمبتدئين في عالم التخييم والكشفية.</p>
                        <div class="article-stats">
                            <span class="views">1,234 مشاهدة</span>
                            <span class="comments">45 تعليق</span>
                            <span class="read-time">8 دقائق قراءة</span>
                        </div>
                        <a href="#" class="btn btn-primary">اقرأ المقال</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Blog Articles -->
        <section class="blog-articles">
            <div class="container">
                <div class="articles-grid">
                    <!-- Article 1 -->
                    <article class="blog-card" data-category="navigation">
                        <div class="article-image">
                            <img src="images/A detailed map spread out on a rustic wooden table with a compass and hiking gear beside it..png" alt="الملاحة">
                            <div class="category-badge">الملاحة</div>
                        </div>
                        <div class="article-content">
                            <div class="article-meta">
                                <span class="date">12 مارس 2024</span>
                                <span class="author">سارة أحمد</span>
                            </div>
                            <h3>كيفية قراءة الخرائط الطبوغرافية</h3>
                            <p>تعلم أساسيات قراءة الخرائط الطبوغرافية وفهم الخطوط الكنتورية والرموز المختلفة المستخدمة في الخرائط.</p>
                            <div class="article-footer">
                                <span class="read-time">6 دقائق</span>
                                <a href="#" class="read-more">اقرأ المزيد</a>
                            </div>
                        </div>
                    </article>

                    <!-- Article 2 -->
                    <article class="blog-card" data-category="survival">
                        <div class="article-image">
                            <img src="images/A group of scouts building a shelter using ropes and branches in a lush green forest..png" alt="مهارات البقاء">
                            <div class="category-badge">مهارات البقاء</div>
                        </div>
                        <div class="article-content">
                            <div class="article-meta">
                                <span class="date">10 مارس 2024</span>
                                <span class="author">محمد علي</span>
                            </div>
                            <h3>بناء المأوى في الطبيعة</h3>
                            <p>دليل عملي لبناء المأوى باستخدام المواد الطبيعية المتوفرة في الغابة والجبال.</p>
                            <div class="article-footer">
                                <span class="read-time">7 دقائق</span>
                                <a href="#" class="read-more">اقرأ المزيد</a>
                            </div>
                        </div>
                    </article>

                    <!-- Article 3 -->
                    <article class="blog-card" data-category="leadership">
                        <div class="article-image">
                            <img src="images/A group of scouts engaged in a leadership training workshop outdoors, collaborating on a team-building exercise..png" alt="القيادة">
                            <div class="category-badge">القيادة</div>
                        </div>
                        <div class="article-content">
                            <div class="article-meta">
                                <span class="date">8 مارس 2024</span>
                                <span class="author">فاطمة حسن</span>
                            </div>
                            <h3>تطوير مهارات القيادة في الكشفية</h3>
                            <p>كيف تصبح قائد كشفي فعال؟ تعلم مهارات القيادة والعمل الجماعي في البيئة الطبيعية.</p>
                            <div class="article-footer">
                                <span class="read-time">5 دقائق</span>
                                <a href="#" class="read-more">اقرأ المزيد</a>
                            </div>
                        </div>
                    </article>

                    <!-- Article 4 -->
                    <article class="blog-card" data-category="tips">
                        <div class="article-image">
                            <img src="images/A red first aid kit with various medical supplies neatly organized inside, placed on a wooden surface outdoors..png" alt="نصائح">
                            <div class="category-badge">نصائح</div>
                        </div>
                        <div class="article-content">
                            <div class="article-meta">
                                <span class="date">6 مارس 2024</span>
                                <span class="author">علي أحمد</span>
                            </div>
                            <h3>حقيبة الإسعافات الأولية للكشافة</h3>
                            <p>ما يجب أن تحتويه حقيبة الإسعافات الأولية للكشافة؟ دليل شامل للمعدات الأساسية.</p>
                            <div class="article-footer">
                                <span class="read-time">4 دقائق</span>
                                <a href="#" class="read-more">اقرأ المزيد</a>
                            </div>
                        </div>
                    </article>

                    <!-- Article 5 -->
                    <article class="blog-card" data-category="camping">
                        <div class="article-image">
                            <img src="images/A bright red sleeping bag laid out on the grass in a serene forest setting..png" alt="التخييم">
                            <div class="category-badge">التخييم</div>
                        </div>
                        <div class="article-content">
                            <div class="article-meta">
                                <span class="date">4 مارس 2024</span>
                                <span class="author">نور محمد</span>
                            </div>
                            <h3>اختيار كيس النوم المناسب</h3>
                            <p>دليل لاختيار كيس النوم المناسب حسب الموسم ودرجة الحرارة ونوع الرحلة.</p>
                            <div class="article-footer">
                                <span class="read-time">6 دقائق</span>
                                <a href="#" class="read-more">اقرأ المزيد</a>
                            </div>
                        </div>
                    </article>

                    <!-- Article 6 -->
                    <article class="blog-card" data-category="navigation">
                        <div class="article-image">
                            <img src="images/A black compass resting on a rustic wooden table surrounded by green foliage..png" alt="الملاحة">
                            <div class="category-badge">الملاحة</div>
                        </div>
                        <div class="article-content">
                            <div class="article-meta">
                                <span class="date">2 مارس 2024</span>
                                <span class="author">حسن علي</span>
                            </div>
                            <h3>استخدام البوصلة في الطبيعة</h3>
                            <p>تعلم كيفية استخدام البوصلة بشكل صحيح والملاحة باستخدام النجوم والشمس.</p>
                            <div class="article-footer">
                                <span class="read-time">5 دقائق</span>
                                <a href="#" class="read-more">اقرأ المزيد</a>
                            </div>
                        </div>
                    </article>

                    <!-- Article 7 -->
                    <article class="blog-card" data-category="survival">
                        <div class="article-image">
                            <img src="images/A camping lantern glowing softly in a dark forest setting surrounded by trees..png" alt="مهارات البقاء">
                            <div class="category-badge">مهارات البقاء</div>
                        </div>
                        <div class="article-content">
                            <div class="article-meta">
                                <span class="date">28 فبراير 2024</span>
                                <span class="author">ريم أحمد</span>
                            </div>
                            <h3>إشعال النار في الظروف الصعبة</h3>
                            <p>تقنيات إشعال النار في الطقس الرطب والظروف الجوية الصعبة.</p>
                            <div class="article-footer">
                                <span class="read-time">7 دقائق</span>
                                <a href="#" class="read-more">اقرأ المزيد</a>
                            </div>
                        </div>
                    </article>

                    <!-- Article 8 -->
                    <article class="blog-card" data-category="tips">
                        <div class="article-image">
                            <img src="images/A stainless steel water bottle with a sleek design resting on a wooden picnic table surrounded by greenery..png" alt="نصائح">
                            <div class="category-badge">نصائح</div>
                        </div>
                        <div class="article-content">
                            <div class="article-meta">
                                <span class="date">26 فبراير 2024</span>
                                <span class="author">أميرة محمد</span>
                            </div>
                            <h3>ترطيب الجسم في الرحلات الطويلة</h3>
                            <p>أهمية شرب الماء وطرق الحفاظ على الترطيب أثناء الرحلات الكشفية الطويلة.</p>
                            <div class="article-footer">
                                <span class="read-time">4 دقائق</span>
                                <a href="#" class="read-more">اقرأ المزيد</a>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- Load More Button -->
                <div class="load-more">
                    <button class="btn btn-secondary">عرض المزيد من المقالات</button>
                </div>
            </div>
        </section>

        <!-- Newsletter Subscription -->
        <section class="newsletter">
            <div class="container">
                <div class="newsletter-content">
                    <h2>اشترك في النشرة الإخبارية</h2>
                    <p>احصل على أحدث المقالات والنصائح في عالم الكشفية مباشرة في بريدك الإلكتروني</p>
                    <form class="newsletter-form">
                        <input type="email" placeholder="أدخل بريدك الإلكتروني" required>
                        <button type="submit" class="btn btn-primary">اشتراك</button>
                    </form>
                </div>
            </div>
        </section>
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
        // Blog category filtering
        document.addEventListener('DOMContentLoaded', function() {
            const categoryButtons = document.querySelectorAll('.category-btn');
            const blogCards = document.querySelectorAll('.blog-card');

            categoryButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove active class from all buttons
                    categoryButtons.forEach(btn => btn.classList.remove('active'));
                    // Add active class to clicked button
                    this.classList.add('active');

                    const category = this.getAttribute('data-category');

                    blogCards.forEach(card => {
                        if (category === 'all' || card.getAttribute('data-category') === category) {
                            card.style.display = 'block';
                            card.style.animation = 'fadeIn 0.5s ease-in';
                        } else {
                            card.style.display = 'none';
                        }
                    });
                });
            });

            // Newsletter form
            const newsletterForm = document.querySelector('.newsletter-form');
            if (newsletterForm) {
                newsletterForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    alert('تم الاشتراك في النشرة الإخبارية بنجاح!');
                    this.reset();
                });
            }
        });

        // Add fadeIn animation
        const style = document.createElement('style');
        style.textContent = `
            @keyframes fadeIn {
                from { opacity: 0; transform: translateY(20px); }
                to { opacity: 1; transform: translateY(0); }
            }
        `;
        document.head.appendChild(style);
    </script>
</body>
</html> 