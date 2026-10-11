<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 4</title>
</head>
<body>

    <h2>1 & 2. Examen des types avec var_dump</h2>
    <pre>
    <?php
        // Déclaration des 6 variables
        $v1 = 42;
        $v2 = "42";
        $v3 = 15.8;
        $v4 = true;
        $v5 = false;
        $v6 = null;

        var_dump($v1);
        var_dump($v2);
        var_dump($v3);
        var_dump($v4);
        var_dump($v5);
        var_dump($v6);
    ?>
    </pre>

    <h2>3. Conversions de types</h2>
    <?php
        $v2_int = (int)$v2;
        $v3_int = (int)$v3;
        $v1_str = (string)$v1;

        echo "<p>\"42\" en entier : "; var_dump($v2_int); echo "</p>";
        echo "<p>15.8 en entier : "; var_dump($v3_int); echo "</p>";
        echo "<p>42 en chaîne : "; var_dump($v1_str); echo "</p>";
    ?>

    <h2>4. Affichage de true et false</h2>
    <p>Avec echo (true) : <?php echo $v4; ?></p>
    <p>Avec echo (false) : <?php echo $v5; ?></p>
    <p>Avec var_dump (true) : <?php var_dump($v4); ?></p>
    <p>Avec var_dump (false) : <?php var_dump($v5); ?></p>

    <h2>5. Conversion en booléens</h2>
    <?php
        echo "<p>0 en booléen : "; var_dump((bool)0); echo "</p>";
        echo "<p>\"0\" en booléen : "; var_dump((bool)"0"); echo "</p>";
        echo "<p>\"PHP\" en booléen : "; var_dump((bool)"PHP"); echo "</p>";
        echo "<p>Tableau vide en booléen : "; var_dump((bool)[]); echo "</p>";
    ?>

</body>
</html>
