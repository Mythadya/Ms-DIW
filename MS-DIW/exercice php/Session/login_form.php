<!DOCTYPE html>
<html lang="fr">

    <head>
        <title>Test PHP</title>
    </head>
    <body>
    <?php

// Début du formulaire
echo '<form action="login_script.php" method="post">';
echo 'Adresse email : <input type="email" name="email"><br>';
echo 'Mot de passe : <input type="password" name="password"><br>';
echo '<input type="submit" value="Se connecter">';
echo '</form>';
?>
    </body>
</html>