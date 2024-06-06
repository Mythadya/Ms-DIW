<!DOCTYPE html>
<html lang="fr">

    <head>
        <title>Test PHP</title>
    </head>
    <body>
    <?php
session_start();
// Vérification des données du formulaire
if (isset($_POST['login']) && isset($_POST['password'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    // Vérification des identifiants dans la base de données
    $pdo = new PDO('mysql:host=localhost;dbname=mydb', 'username', 'password');
    $stmt = $pdo->prepare('SELECT * FROM user WHERE login = :login');
    $stmt->bindParam(':login', $login);
    $stmt->execute();
    $user = $stmt->fetch();
    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['auth'] = 'ok';
        header('Location: protected_page.php');
        exit;
    } else {
        unset($_SESSION['auth']);
        header('Location: login_form.php');
        exit;
    }
}
?>
    </body>
</html>