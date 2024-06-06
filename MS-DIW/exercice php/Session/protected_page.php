<!DOCTYPE html>
<html lang="fr">

    <head>
        <title>Test PHP</title>
    </head>
    <body>
    <?php
// Vérification de la présence de la variable de session auth
session_start();
if (!isset($_SESSION['auth']) || $_SESSION['auth']!= 'ok') {
    header('Location: login_form.php');
    exit;
}

// Si nous sommes là, c'est que l'utilisateur est authentifié
echo 'Page protégée, vous êtes connecté!';
?>
    </body>
</html>