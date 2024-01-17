<?php



?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../www/assets/css/register.css">
    <title>Inscription</title>
</head>

<body>
    <div class="login-form-container">
        <form class="login-form" action="../../../www/actions/register.php" method="POST">
            <h2>Inscription</h2>
            <div class="input-group">
                <label for="username">Nom complet</label>
                <input type="text" id="fullname" name="fullname" placeholder="Entrez votre nom complet">
            </div>
            <div class="input-group">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" placeholder="Entrez votre adresse e-mail">
            </div>
            <div class="input-group">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" placeholder="Entrez votre mot de passe">
            </div>
            <div class="input-group">
                <label for="password">Confirmation mot de passe</label>
                <input type="password" id="cpassword" name="cpassword" placeholder="Confirmer votre mot de passe">
            </div>
            <button type="submit">S'inscrire</button>
        </form>
    </div>
</body>

</html>