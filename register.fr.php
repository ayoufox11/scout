<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - Espace Membres</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        body { background: linear-gradient(135deg, #361c4e 0%, #3b1f56 100%); min-height: 100vh; }
        .register-container {
            max-width: 400px;
            margin: 80px auto;
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 4px 24px rgba(54,28,78,0.08);
            padding: 2.5rem 2rem;
        }
        .register-title {
            color: #361c4e;
            font-size: 1.7rem;
            font-weight: 700;
            margin-bottom: 2rem;
            text-align: center;
        }
        .register-form label {
            display: block;
            margin-bottom: 0.5rem;
            color: #3b1f56;
            font-weight: 600;
        }
        .register-form input {
            width: 100%;
            padding: 0.8rem 1rem;
            border: 1.5px solid #ccc;
            border-radius: 8px;
            margin-bottom: 1.2rem;
            font-size: 1rem;
        }
        .register-form input:focus {
            border-color: #624c78;
            outline: none;
        }
        .register-form button {
            width: 100%;
            background: #624c78;
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 0.9rem 0;
            font-size: 1.1rem;
            font-weight: 700;
            cursor: pointer;
            transition: background 0.2s;
        }
        .register-form button:hover {
            background: #3b1f56;
        }
        .register-footer {
            text-align: center;
            margin-top: 1.5rem;
            color: #888;
            font-size: 0.95rem;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <div class="register-title" style="clear:both;">Créer un compte membre</div>
        <form class="register-form" method="post" action="#">
            <label for="name">Nom complet</label>
            <input type="text" id="name" name="name" placeholder="Votre nom" required>
            <label for="email">Adresse e-mail</label>
            <input type="email" id="email" name="email" placeholder="Votre e-mail" required>
            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password" placeholder="Mot de passe" required>
            <label for="confirm">Confirmer le mot de passe</label>
            <input type="password" id="confirm" name="confirm" placeholder="Confirmez le mot de passe" required>
            <button type="submit">S'inscrire</button>
        </form>
        <div class="register-footer">
            Vous avez déjà un compte ? <a href="login.fr.php" style="color:#624c78; text-decoration:underline;">Connectez-vous</a>
        </div>
        <button onclick="history.back()" style="background:#fff; color:#361c4e; border:none; border-radius:8px; padding:10px 22px; font-weight:600; font-size:1rem; margin:30px 0 0 0; box-shadow:0 2px 8px rgba(54,28,78,0.08); cursor:pointer; display:flex; align-items:center; gap:8px;">
            <span style="font-size:1.2em;">&#8592;</span> Retour
        </button>
    </div>
    <footer>
        <!-- تم إزالة شريط الحقوق هنا -->
    </footer>
</body>
</html> 