<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>PHP Exercice 7 Partie 1</title>
    </head>
    <body>
        <?php
        $firstname = 'Gerard';
        $lastname = 'Bouchard';
        $age = 82;
        ?> 
        <p>Bonjour <?= $lastname .' '.$firstname ?> tu as <?= $age ?> ans ?</p>
    </body>
</html>
<!--Exercice 7

Créer trois variables lastname , firstname et age et les initialiser avec les valeurs de votre choix. Attention age est de type entier.
Afficher : "Bonjour" + lastname + firstname + ",tu as" + age + "ans".
-->
