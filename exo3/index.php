<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Partie 6 Exo 3</title>
    </head>
    <body>

        <p><a href="index.php?startDate=2/05/2016&endDate=27/11/2016">Cliquer pour tester URL ci-dessous</a></p>
        <pre>"index.php?startDate=2/05/2016&endDate=27/11/2016"</pre>
        <?php
        if (isset($_GET['startDate']) AND isset($_GET['endDate'])) {
            echo ' ' . $_GET['startDate'] . ' ' . $_GET['endDate'];
        } else {
            echo ' pas de données  ! ';
        }
        ?>
    </body>
</html>
