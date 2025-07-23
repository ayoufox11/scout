<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مساحة الأعضاء</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        /* ألوان الدردشة والتصنيف */
        .members-area-bg { background: linear-gradient(135deg, #361c4e 0%, #3b1f56 100%); min-height: 100vh; }
        .chat-container { background: #fff; border-radius: 15px; box-shadow: 0 4px 24px rgba(54,28,78,0.08); display: flex; overflow: hidden; max-width: 1000px; margin: 40px auto; }
        .users-list { background: #2a163d; color: #fff; width: 220px; padding: 1.5rem 1rem; display: flex; flex-direction: column; }
        .users-list h3 { color: #fff; margin-bottom: 1rem; font-size: 1.1rem; }
        .user-item { padding: 0.5rem 0.7rem; border-radius: 8px; margin-bottom: 0.5rem; cursor: pointer; transition: background 0.2s; }
        .user-item.active, .user-item:hover { background: #624c78; }
        .chat-section { flex: 1; display: flex; flex-direction: column; }
        .chat-header { background: #624c78; color: #fff; padding: 1rem; font-weight: 600; font-size: 1.1rem; }
        .chat-messages { flex: 1; padding: 1.5rem; overflow-y: auto; background: #f7f6fa; }
        .message { margin-bottom: 1.2rem; display: flex; flex-direction: column; }
        .message.me { align-items: flex-end; }
        .message .bubble { background: #3b1f56; color: #fff; padding: 0.7rem 1.2rem; border-radius: 18px 18px 4px 18px; max-width: 70%; display: inline-block; }
        .message.me .bubble { background: #361c4e; border-radius: 18px 18px 18px 4px; }
        .message .meta { font-size: 0.8rem; color: #888; margin-top: 0.2rem; }
        .chat-input-area { display: flex; padding: 1rem; background: #fff; border-top: 1px solid #eee; }
        .chat-input-area input { flex: 1; padding: 0.7rem 1rem; border: 1px solid #ccc; border-radius: 8px; font-size: 1rem; }
        .chat-input-area button { background: #624c78; color: #fff; border: none; border-radius: 8px; padding: 0.7rem 1.5rem; margin-right: 0.7rem; font-weight: 600; cursor: pointer; transition: background 0.2s; }
        .chat-input-area button:hover { background: #3b1f56; }
        /* التصنيف */
        .classement-section { background: #fff; border-radius: 15px; box-shadow: 0 4px 24px rgba(54,28,78,0.08); max-width: 1000px; margin: 40px auto; padding: 2rem; }
        .classement-title { color: #361c4e; font-size: 1.5rem; font-weight: 700; margin-bottom: 1.5rem; text-align: center; }
        .classement-table { width: 100%; border-collapse: collapse; }
        .classement-table th, .classement-table td { padding: 0.8rem 1rem; text-align: center; }
        .classement-table th { background: #3b1f56; color: #fff; }
        .classement-table tr:nth-child(even) { background: #f7f6fa; }
        .classement-table tr:nth-child(odd) { background: #fff; }
        .classement-table td.rank { font-weight: bold; color: #624c78; }
        .classement-table td.points { color: #361c4e; font-weight: 600; }
        @media (max-width: 900px) {
            .chat-container, .classement-section { max-width: 98vw; }
            .users-list { display: none; }
        }
    </style>
</head>
<body class="members-area-bg">
    <div class="container">
        <button onclick="history.back()" style="background:#fff; color:#361c4e; border:none; border-radius:8px; padding:10px 22px; font-weight:600; font-size:1rem; margin:30px 0 0 0; float:right; box-shadow:0 2px 8px rgba(54,28,78,0.08); cursor:pointer; display:flex; align-items:center; gap:8px;">
            <span style="font-size:1.2em;">&#8592;</span> رجوع
        </button>
        <h1 style="color:#fff; text-align:center; margin-top:40px; clear:both;">مساحة الأعضاء</h1>
        <!-- واجهة الدردشة -->
        <div class="chat-container">
            <div class="users-list">
                <h3>👥 الأعضاء المتصلون في الغرفة العامة</h3>
                <!-- مثال: قائمة الأعضاء (سيتم تعبئتها ديناميكياً لاحقاً) -->
                <div class="user-item active">أنت</div>
                <div class="user-item">محمد</div>
                <div class="user-item">سارة</div>
                <div class="user-item">أحمد</div>
            </div>
            <div class="chat-section">
                <div class="chat-header">💬 الغرفة العامة (جميع الأعضاء)</div>
                <div class="chat-messages" id="chatMessages">
                    <!-- رسائل الدردشة ستظهر هنا -->
                    <div class="message">
                        <div class="bubble">مرحباً بالجميع في الغرفة العامة! 🎉</div>
                        <div class="meta">سارة • الآن</div>
                    </div>
                    <div class="message me">
                        <div class="bubble">أهلاً سارة! سعيد بوجودي هنا.</div>
                        <div class="meta">أنت • الآن</div>
                    </div>
                </div>
                <form class="chat-input-area" onsubmit="event.preventDefault();">
                    <input type="text" placeholder="اكتب رسالتك..." id="chatInput" autocomplete="off">
                    <button type="submit">إرسال</button>
                </form>
            </div>
        </div>
        <!-- تم إزالة الفوتر بالكامل من هنا -->
        <!-- قسم التصنيف -->
        <div class="classement-section">
            <div class="classement-title">🏆 التصنيف العام للأعضاء</div>
            <table class="classement-table">
                <thead>
                    <tr>
                        <th>الترتيب</th>
                        <th>العضو</th>
                        <th>النقاط</th>
                        <th>مصدر النقاط</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- أمثلة توضيحية، سيتم ربطها ديناميكياً لاحقاً -->
                    <tr>
                        <td class="rank">1</td>
                        <td>سارة</td>
                        <td class="points">120</td>
                        <td>الدردشة، الأنشطة</td>
                    </tr>
                    <tr>
                        <td class="rank">2</td>
                        <td>محمد</td>
                        <td class="points">110</td>
                        <td>نقاط من المشرف</td>
                    </tr>
                    <tr>
                        <td class="rank">3</td>
                        <td>أنت</td>
                        <td class="points">90</td>
                        <td>الدردشة</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- ملاحظة: عند توفر مفتاح Pusher أو WebSocket، يمكن ربط الدردشة والتصنيف ديناميكياً -->
</body>
</html> 