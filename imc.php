<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul IMC</title>
</head>
<body>

<?php
           function calculerIMC($poids, $taille) {

                $tailleEnMetres = $taille / 100;
                $tailleCalculee = pow($tailleEnMetres, 2);
                return $poids / $tailleCalculee;

            }

            echo calculerIMC(105.1, 170);

?>
</body>
</html>