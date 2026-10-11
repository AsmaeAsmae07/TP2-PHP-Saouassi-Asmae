<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 10 - php</title>
</head>
<body>

    <h2>Résultat du traitement (post)</h2>

    <?php
        // Partie C : Vérification d'accès direct sans soumission
        if (!isset($_POST['nom']) && !isset($_POST['prenom']) && !isset($_POST['groupe'])) {
            echo "<p style='color: orange;'>Veuillez soumettre le formulaire pour accéder à cette page.</p>";
            echo "<p><a href='ex10_post.html'>Retour au formulaire</a></p>";
        } else {
            // Nettoyage et récupération des valeurs
            $nom = isset($_POST['nom']) ? trim($_POST['nom']) : '';
            $prenom = isset($_POST['prenom']) ? trim($_POST['prenom']) : '';
            $groupe = isset($_POST['groupe']) ? trim($_POST['groupe']) : '';

            // Partie C : Refuser les valeurs vides
            if ($nom === '' || $prenom === '' || $groupe === '') {
                echo "<p style='color: red;'>Erreur : Tous les champs (Nom, Prénom et Groupe) sont obligatoires et ne doivent pas être vides.</p>";
                echo "<p><a href='ex10_post.html'>Retourner au formulaire</a></p>";
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
