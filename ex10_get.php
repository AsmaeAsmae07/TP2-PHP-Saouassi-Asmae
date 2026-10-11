<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 10 - php</title>
</head>
<body>

    <h2>Résultat du traitement (GET)</h2>

    <?php
        // Partie C : Vérification d'accès direct sans soumission
        if (!isset($_GET['nom']) && !isset($_GET['prenom']) && !isset($_GET['groupe'])) {
            echo "<p style='color: orange;'>Veuillez soumettre le formulaire pour accéder à cette page.</p>";
            echo "<p><a href='ex10_get.html'>Retour au formulaire</a></p>";
        } else {
            // Nettoyage et récupération des valeurs
            $nom = isset($_GET['nom']) ? trim($_GET['nom']) : '';
            $prenom = isset($_GET['prenom']) ? trim($_GET['prenom']) : '';
            $groupe = isset($_GET['groupe']) ? trim($_GET['groupe']) : '';

            // Partie C : Refuser les valeurs vides
            if ($nom === '' || $prenom === '' || $groupe === '') {
                echo "<p style='color: red;'>Erreur : Tous les champs (Nom, Prénom et Groupe) sont obligatoires et ne doivent pas être vides.</p>";
                echo "<p><a href='ex10_get.html'>Retourner au formulaire</a></p>";
            } else {
                // Sécurisation de l'affichage avec htmlspecialchars contre les failles XSS
                $nomSecurise = htmlspecialchars($nom, ENT_QUOTES, 'UTF-8');
                $prenomSecurise = htmlspecialchars($prenom, ENT_QUOTES, 'UTF-8');
                $groupeSecurise = htmlspecialchars($groupe, ENT_QUOTES, 'UTF-8');

                echo "<p style='color: green; font-size: 1.2em;'>";
                echo "Bienvenue <strong>" . $prenomSecurise . " " . $nomSecurise . "</strong> du groupe <strong>" . $groupeSecurise . "</strong> !";
                echo "</p>";
            }
        }
    ?>

</body>
</html>
