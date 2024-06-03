<!DOCTYPE html>
<html lang="fr">

    <head>
        <title>Test PHP</title>
    </head>
    <body>
        <?php
        function lien($url, $titre) {
            return "<a href='$url'>$titre</a>";
        }
        $link = lien("https://www.reddit.com/", "Reddit Hug");
        echo $link;
        ?>
    </body>
</html>