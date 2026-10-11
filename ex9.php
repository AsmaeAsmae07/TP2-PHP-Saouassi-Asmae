<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 9</title>
    <style>
        table { border-collapse: collapse; width: 50%; margin-bottom: 20px; }
        th, td { border: 1px solid #333; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        .valide { color: green; font-weight: bold; }
        .non-valide { color: red; font-weight: bold; }
    </style>
</head>
<body>

    <h2>1 & 2. Liste des étudiants et statuts</h2>
    <?php
        // Jeu de données fourni
        $notes = [
            "Amine" => 12,
            "Sara" => 16,
            "Youssef" => 8,
            "Lina" => 14,
            "Adam" => 10
        ];

        // Variables pour les calculs statistiques
        $sommeNotes = 0;
        $totalEtudiants = count($notes);
        $nombreValides = 0;

        // Variables pour déterminer la meilleure note
        $meilleureNote = -1;
        $meilleurEtudiant = "";
    ?>

    <table>
        <thead>
            <tr>
                <th>Étudiant</th>
                <th>Note</th>
                <th>Statut</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($notes as $nom => $note) : 
                // Accumulation de la somme
                $sommeNotes += $note;

                // Condition de validation
                if ($note >= 10) {
                    $statut = "Validé";
                    $classeStatut = "valide";
                    $nombreValides++;
                } else {
                    $statut = "Non validé";
                    $classeStatut = "non-valide";
                }

                // Recherche de la meilleure note
                if ($note > $meilleureNote) {
                    $meilleureNote = $note;
                    $meilleurEtudiant = $nom;
                }
            ?>
                <tr>
                    <td><?= $nom ?></td>
                    <td><?= $note ?> / 20</td>
                    <td class="<?= $classeStatut ?>"><?= $statut ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <h2>3, 4 & 5. Résultats statistiques</h2>
    <?php
        $moyenneClasse = $sommeNotes / $totalEtudiants;
    ?>
    <ul>
        <li><strong>Somme de toutes les notes :</strong> <?= $sommeNotes ?></li>
        <li><strong>Moyenne de la classe :</strong> <?= $moyenneClasse ?> / 20</li>
        <li><strong>Nombre d'étudiants ayant validé :</strong> <?= $nombreValides ?> / <?= $totalEtudiants ?></li>
        <li><strong>Meilleure note :</strong> <?= $meilleureNote ?> / 20 (détenue par <strong><?= $meilleurEtudiant ?></strong>)</li>
    </ul>

</body>
</html>
