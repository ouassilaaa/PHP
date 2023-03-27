//formulaire html
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>

<body>

    <form action="./recup.php" method="post">
        <p><label for="nbr1">Saisir un nombre :</label></p>
        <input type="text" name="nbr1">
        <p><label for="nbr2">Saisir un nombre :</label></p>
        <input type="text" name="nbr2">
        <p><input type="submit" value="envoyer" name="submit"></p>
    </form>

</body>
</html>

<?php
    //test du retour en GET
    if(isset($_GET['resultat'])){
        //affichage du résultat
        echo 'le resultat du calcul est : '.$_GET['resultat'];
    }
    //test si le formulaire est vide
    if(isset($_GET['error'])){
        //affichage de l'erreur
        echo 'Veuillez remplir les champs du formulaire';
    }
?>