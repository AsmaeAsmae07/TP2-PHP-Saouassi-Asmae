<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 8</title>
</head>
<body>

    <h2>Partie 1 : Nombres pairs de 0 à 20 (avec 10 en gras)</h2>
    <p>
    <?php
        $i = 0;
        while ($i <= 20) {
            if ($i % 2 === 0) {
                if ($i === 10) {
                    echo "<strong>10</strong> ";
                } else {
                    echo "$i ";
                }
            }
            $i++;
        }
    ?>
    </p>

    <h2>Partie 2 : Comparaison While et Do-While (compteur initialisé à 5)</h2>
    <?php
        // Test avec la boucle WHILE
        $compteurWhile = 5;
        $executionsWhile = 0;
        while ($compteurWhile < 5) {
            $executionsWhile++;
            $compteurWhile++;
        }
        echo "<p>La boucle <strong>while</strong> a réalisé : $executionsWhile exécution(s).</p>";

        // Test avec la boucle DO-WHILE
        $compteurDoWhile = 5;
        $executionsDoWhile = 0;
        do {
            $executionsDoWhile++;
            $compteurDoWhile++;
        } while ($compteurDoWhile < 5);
        echo "<p>La boucle <strong>do-while</strong> a réalisé : $executionsDoWhile exécution(s).</p>";
    ?>

    <h2>Partie 3 : Parcours de 1 à 20 (continue et break)</h2>
    <p>
    <?php
        for ($k = 1; $k <= 20; $k++) {
            // Ignorer les multiples de 3
            if ($k % 3 === 0) {
                continue;
            }
            // Arrêter la boucle dès que le compteur atteint 16 (avant affichage)
            if ($k === 16) {
                break;
            }
            echo "$k ";
        }
    ?>
    </p>

</body>
</html>
