<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Partie 6 Exo 6</title>
    </head>
    <body>

        <p><a href="index.php?building=12&room=101">Cliquer pour tester URL ci-dessous</a></p>
        <pre>"index.php?building=12&room=101"</pre>
        <?php
        if (isset($_GET['building']) AND isset($_GET['room'])) {
            echo 'building : ' . $_GET['building'] . ' room : ' . $_GET['room'];
        } else {
            echo ' pas de données  ! ';
        }
        ?>
    </body>
</html>
