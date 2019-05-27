<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Partie 6 Exo 2</title>
    </head>
    <body>

        <p><a href="index.php?lastname=Nemare&firstname=Jean">Cliquer pour tester URL ci-dessous</a></p>
        <pre>"index.php?lastname=Nemare&firstname=Jean"</pre>
        <?php
        if (isset($_GET['age'])) {
            echo ' ' . $_GET['age'];
        } else {
            echo ' pas de données age ! ';
        }
        ?>
    </body>
</html>
