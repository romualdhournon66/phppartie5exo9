<!DOCTYPE html>
<html lang="FR">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <title>PHP Partie 5 exercice 9</title>
    </head>
    <body>
        <div class="container" id="page-top">
            <div class="row">
                <div class="col-xl-12">
                    <h1 align="center">PHP Partie 5 exercice 9</h1>
                    <p align="center">Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau.</p>
                    <p align="center">Affichage de ce tableau dis "associatif" donc utilisation de la boucle foreach.</p>
                </div>
            </div>
            <div align="center">
                <?php
                $dpt = array(
                    '02' => 'Aisne',
                    '59' => 'Nord',
                    '60' => 'Oise',
                    '62' => 'Pas de calais',
                    '80' => 'Somme');
                foreach ($dpt as $element) {
                    echo '<p>Liste des départements : ' . $element . '</p>';
                }
                ?>
            </div>
        </div>
    </body>
</html>
