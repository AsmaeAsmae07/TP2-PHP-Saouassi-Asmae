<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 2</title>
</head>
<body>

    <?php
        // 1. Déclaration des variables fictives
        $nom = "Saouassi";
        $prenom = "Asmae";
        $age = 19;
        $formation = "Programmation Web 2";

        // 2. Construction de la phrase avec l'opérateur de concaténation '.'
        $presentation = "Bonjour, je m'appelle " . $prenom . " " . $nom . ", j'ai " . $age . " ans et je suis en formation " . $formation . ". ";

        // 3. Compléter la phrase avec l'opérateur d'affectation combinée '.='
        $presentation .= "J'apprends PHP.";

        // Affichage de la phrase complète
        echo "<p>" . $presentation . "</p>";

        // 4. Déclaration de variables sensibles à la casse
        $note = 12;
        $Note = 16;

        echo "<p>Première note (\$note) : " . $note . "</p>";
        echo "<p>Deuxième note (\$Note) : " . $Note . "</p>";
    ?>

</body>
</html>
