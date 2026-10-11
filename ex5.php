<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 5</title>
</head>
<body>

    <?php
        // 1. Déclaration de la variable de test (à modifier pour vos tests : -1, 9, 10, 12, 14, 16, 21)
        $moyenne = 14; 

        echo "<h3>Note testée : $moyenne</h3>";

        // 2 & 3. Structure de validation et de contrôle
        if ($moyenne < 0 || $moyenne > 20) {
            echo "<p style='color: red;'>Note invalide</p>";
        } else {
            if ($moyenne < 10) {
                $message = "Non validé";
            } elseif ($moyenne < 12) {
                $message = "Passable";
            } elseif ($moyenne < 14) {
                $message = "Assez bien";
            } elseif ($moyenne < 16) {
                $message = "Bien";
            } else {
                $message = "Très bien";
            }
            
            echo "<p>Résultat : <strong>$message</strong></p>";
        }
    ?>

</body>
</html>
