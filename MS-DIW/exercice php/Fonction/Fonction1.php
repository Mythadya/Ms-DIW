<!DOCTYPE html>
<html lang="fr">

    <head>
        <title>Test PHP</title>
    </head>
    <body>
        <?php
        function lien($url, $titre) {
            // Cette fonction nommée 'lien' prend deux paramètres : $url et $titre.
            // Elle retourne un lien HTML avec l'URL et le titre donnés.
            return "<a href='$url'>$titre</a>";
        }
        $link = lien("https://www.reddit.com/", "Reddit Hug");
        // Cette ligne appelle la fonction 'lien' avec l'URL "https://www.reddit.com/" et le titre "Reddit Hug",
        // et assigne le résultat à la variable $link.
        echo $link;
        // Cette ligne affiche la valeur de $link, qui est le lien HTML généré par la fonction 'lien'.
        ?>
    </body>
</html>