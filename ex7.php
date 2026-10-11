<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 7</title>
</head>
<body>

    <section>
        <h2>1. Table de multiplication de 7</h2>
        <ul>
        <?php
            $nombre = 7;
            for ($i = 1; $i <= 10; $i++) {
                $resultat = $nombre * $i;
                echo "<li>$nombre &times; $i = $resultat</li>";
            }
        ?>
        </ul>
    </section>

    <hr>

    <section>
        <h2>2. Pyramide d'étoiles</h2>
        <pre>
            <?php
                // Utilisation de <pre> pour conserver l'affichage exact des lignes
                $lignes = 6;
                for ($i = 1; $i <= $lignes; $i++) {
                    for ($j = 1; $j <= $i; $j++) {
                        echo "*";
                    }
                    echo "\n"; // Retour à la ligne pour chaque niveau de la pyramide
                }
            ?>
        </pre>
    </section>

</body>
</html>
