<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Partie 6 Exo 4</title>
    </head>
    <body>

        <p><a href="index.php?language=PHP&server=LAMP">Cliquer pour tester URL ci-dessous</a></p>
        <pre>"index.php?language=PHP&server=LAMP"</pre>
        <?php
        if (isset($_GET['language']) AND isset($_GET['server'])) {
            echo 'language : ' . $_GET['language'] . ' server : ' . $_GET['server'];
        } else {
            echo ' pas de données  ! ';
        }
        ?>
    </body>
</html>
