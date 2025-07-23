<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>المناقشات - موقع الكشفية</title>
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
                    <a href="discussions.php" style="font-weight:bold; color:#fff; text-decoration:none;">AR</a> |
                    <a href="discussions.fr.php" style="color:#fff; text-decoration:none;">FR</a>
                </div>
                <ul class="nav-menu">
                    <li><a href="index.php">الرئيسية</a></li>
                    <li><a href="discussions.php" class="active">المناقشات</a></li>
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
            </div>
        </nav>
    </header>

    <main>
        <!-- Discussions Header -->
        <section class="discussions-header">
            <div class="container">
                <h1>مناقشات الكشفية</h1>
                <p>شارك خبراتك واستمع لآراء الآخرين في عالم الكشفية</p>
            </div>
        </section>

        <!-- Discussion Categories -->
        <section class="discussion-categories">
            <div class="container">
                <div class="categories-grid">
                    <div class="category-card">
                        <div class="category-icon">🏕️</div>
                        <h3>التخييم</h3>
                        <p>مناقشات حول فن التخييم والمعسكرات</p>
                        <span class="topic-count">15 موضوع</span>
                    </div>
                    <div class="category-card">
                        <div class="category-icon">🧭</div>
                        <h3>الملاحة</h3>
                        <p>مهارات الملاحة والخرائط والاتجاهات</p>
                        <span class="topic-count">8 مواضيع</span>
                    </div>
                    <div class="category-card">
                        <div class="category-icon">🔥</div>
                        <h3>مهارات البقاء</h3>
                        <p>تقنيات البقاء في الطبيعة</p>
                        <span class="topic-count">12 موضوع</span>
                    </div>
                    <div class="category-card">
                        <div class="category-icon">🤝</div>
                        <h3>القيادة</h3>
                        <p>تطوير مهارات القيادة والعمل الجماعي</p>
                        <span class="topic-count">10 مواضيع</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Active Discussions -->
        <section class="active-discussions">
            <div class="container">
                <div class="section-header">
                    <h2>المناقشات النشطة</h2>
                    <button class="btn btn-primary" onclick="showNewTopicForm()">إضافة موضوع جديد</button>
                </div>

                <!-- New Topic Form (Hidden by default) -->
                <div id="new-topic-form" class="new-topic-form" style="display: none;">
                    <h3>إضافة موضوع جديد</h3>
                    <form id="topic-form">
                        <div class="form-group">
                            <label for="topic-title">عنوان الموضوع</label>
                            <input type="text" id="topic-title" name="title" required>
                        </div>
                        <div class="form-group">
                            <label for="topic-category">الفئة</label>
                            <select id="topic-category" name="category" required>
                                <option value="">اختر الفئة</option>
                                <option value="camping">التخييم</option>
                                <option value="navigation">الملاحة</option>
                                <option value="survival">مهارات البقاء</option>
                                <option value="leadership">القيادة</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="topic-content">محتوى الموضوع</label>
                            <textarea id="topic-content" name="content" rows="5" required></textarea>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary">نشر الموضوع</button>
                            <button type="button" class="btn btn-secondary" onclick="hideNewTopicForm()">إلغاء</button>
                        </div>
                    </form>
                </div>

                <!-- Discussion Topics -->
                <div class="discussions-list">
                    <article class="discussion-topic">
                        <div class="topic-header">
                            <div class="topic-info">
                                <h3>أفضل طرق إشعال النار في الطبيعة</h3>
                                <div class="topic-meta">
                                    <span class="author">أحمد محمد</span>
                                    <span class="date">منذ ساعتين</span>
                                    <span class="category">مهارات البقاء</span>
                                </div>
                            </div>
                            <div class="topic-stats">
                                <span class="replies">8 ردود</span>
                                <span class="views">45 مشاهدة</span>
                            </div>
                        </div>
                        <div class="topic-preview">
                            <p>أريد مشاركة تجربتي في إشعال النار باستخدام الحجارة والخشب الجاف. ما هي أفضل الطرق التي جربتموها؟</p>
                        </div>
                        <div class="topic-actions">
                            <a href="#" class="btn btn-small">عرض المناقشة</a>
                            <button class="btn btn-small btn-secondary">رد</button>
                        </div>
                    </article>

                    <article class="discussion-topic">
                        <div class="topic-header">
                            <div class="topic-info">
                                <h3>أدوات التخييم الأساسية للمبتدئين</h3>
                                <div class="topic-meta">
                                    <span class="author">سارة أحمد</span>
                                    <span class="date">منذ يوم واحد</span>
                                    <span class="category">التخييم</span>
                                </div>
                            </div>
                            <div class="topic-stats">
                                <span class="replies">12 رد</span>
                                <span class="views">78 مشاهدة</span>
                            </div>
                        </div>
                        <div class="topic-preview">
                            <p>أنا مبتدئة في التخييم وأريد معرفة الأدوات الأساسية التي أحتاجها لرحلة تخييم أولى. ما هي النصائح؟</p>
                        </div>
                        <div class="topic-actions">
                            <a href="#" class="btn btn-small">عرض المناقشة</a>
                            <button class="btn btn-small btn-secondary">رد</button>
                        </div>
                    </article>

                    <article class="discussion-topic">
                        <div class="topic-header">
                            <div class="topic-info">
                                <h3>كيفية قراءة الخرائط الطبوغرافية</h3>
                                <div class="topic-meta">
                                    <span class="author">محمد علي</span>
                                    <span class="date">منذ 3 أيام</span>
                                    <span class="category">الملاحة</span>
                                </div>
                            </div>
                            <div class="topic-stats">
                                <span class="replies">6 ردود</span>
                                <span class="views">32 مشاهدة</span>
                            </div>
                        </div>
                        <div class="topic-preview">
                            <p>أحتاج مساعدة في فهم الخرائط الطبوغرافية. هل يمكن لأحد شرح الخطوط الكنتورية والرموز؟</p>
                        </div>
                        <div class="topic-actions">
                            <a href="#" class="btn btn-small">عرض المناقشة</a>
                            <button class="btn btn-small btn-secondary">رد</button>
                        </div>
                    </article>

                    <article class="discussion-topic">
                        <div class="topic-header">
                            <div class="topic-info">
                                <h3>تطوير مهارات القيادة في المعسكرات</h3>
                                <div class="topic-meta">
                                    <span class="author">فاطمة حسن</span>
                                    <span class="date">منذ أسبوع</span>
                                    <span class="category">القيادة</span>
                                </div>
                            </div>
                            <div class="topic-stats">
                                <span class="replies">15 رد</span>
                                <span class="views">120 مشاهدة</span>
                            </div>
                        </div>
                        <div class="topic-preview">
                            <p>أعمل كقائدة مجموعة كشفية وأريد تطوير مهاراتي في إدارة الفريق. ما هي أفضل الطرق؟</p>
                        </div>
                        <div class="topic-actions">
                            <a href="#" class="btn btn-small">عرض المناقشة</a>
                            <button class="btn btn-small btn-secondary">رد</button>
                        </div>
                    </article>
                </div>

                <!-- Pagination -->
                <div class="pagination">
                    <a href="#" class="page-link active">1</a>
                    <a href="#" class="page-link">2</a>
                    <a href="#" class="page-link">3</a>
                    <a href="#" class="page-link">التالي</a>
                </div>
            </div>
        </section>

        <!-- Popular Topics -->
        <section class="popular-topics">
            <div class="container">
                <h2>المواضيع الشائعة</h2>
                <div class="topics-grid">
                    <div class="popular-topic">
                        <h4>أفضل أماكن التخييم في السعودية</h4>
                        <p>اكتشف أجمل المناطق الطبيعية للتخييم</p>
                        <span class="topic-tag">التخييم</span>
                    </div>
                    <div class="popular-topic">
                        <h4>معدات الطوارئ الأساسية</h4>
                        <p>ما يجب أن تحمله في حقيبة الطوارئ</p>
                        <span class="topic-tag">مهارات البقاء</span>
                    </div>
                    <div class="popular-topic">
                        <h4>تطوير مهارات الملاحة</h4>
                        <p>تعلم الملاحة باستخدام النجوم والشمس</p>
                        <span class="topic-tag">الملاحة</span>
                    </div>
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
        function showNewTopicForm() {
            document.getElementById('new-topic-form').style.display = 'block';
        }

        function hideNewTopicForm() {
            document.getElementById('new-topic-form').style.display = 'none';
        }

        document.getElementById('topic-form').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('تم إرسال الموضوع بنجاح!');
            hideNewTopicForm();
        });
    </script>
</body>
</html> 