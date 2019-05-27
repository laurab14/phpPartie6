<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Partie 6</title>
    </head>
    <body>
        <?php
        for ($i = 1; $i < 7; $i++) {
            ?>
            <p><a href=<?= 'exo' . $i . '/index.php' ?>>Exercice<?= $i ?></a></p>
            <?php
        }
        ?>
    </body>
</html>
