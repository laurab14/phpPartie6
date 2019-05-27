<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Partie 6 Exo 5</title>
    </head>
    <body>

        <p><a href="index.php?week=12">Cliquer pour tester URL ci-dessous</a></p>
        <pre>"index.php?week=12"</pre>
        <?php
        if (isset($_GET['week'])) {
            echo 'week : ' . $_GET['week'];
        } else {
            echo ' pas de données  ! ';
        }
        ?>
    </body>
</html>
