<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 3</title>
</head>
<body>

    <?php
        // 1. Définition des constantes
        define("TAUX_TVA", 20);
        define("DEVISE", "MAD");

        // 2. Variables de prix et quantité
        $prixUnitaireHT = 60;
        $quantite = 3;

        // 3. Calculs
        $totalHT = $prixUnitaireHT * $quantite;
        $montantTVA = $totalHT * (TAUX_TVA / 100);
        $totalTTC = $totalHT + $montantTVA;

        // 4. Ajout des frais de livraison avec '+='
        $fraisLivraison = 15;
        $montantFinal = $totalTTC;
        $montantFinal += $fraisLivraison;

        // 5. Récapitulatif HTML
        echo "<h2>Récapitulatif de la commande</h2>";
        echo "<ul>";
        echo "<li>Total HT : " . $totalHT . " " . DEVISE . "</li>";
        echo "<li>Montant TVA (" . TAUX_TVA . "%) : " . $montantTVA . " " . DEVISE . "</li>";
        echo "<li>Total TTC : " . $totalTTC . " " . DEVISE . "</li>";
        echo "<li>Frais de livraison : " . $fraisLivraison . " " . DEVISE . "</li>";
        echo "<li><strong>Montant Final à payer : " . $montantFinal . " " . DEVISE . "</strong></li>";
        echo "</ul>";

        // Vérification de l'existence de la constante
        echo "<p>";
        if (defined("TAUX_TVA")) {
            echo "La constante TAUX_TVA est bien définie.";
        } else {
            echo "La constante TAUX_TVA n'existe pas.";
        }
        echo "</p>";
    ?>

</body>
</html>
