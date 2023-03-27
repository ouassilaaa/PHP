<?php

echo 'FONCTIOOOOOOOOOOOON 📚✖️➕➗🔢 <br/>'; 

/*Exercice 1 
Depuis les exercices tableaux 1, 2 et 3 :
Modifier le code des corrigés pour que celui ci soit dans des fonctions.
Créer :
-Fonction minTab qui va prendre en entrée un tableau et afficher la valeur minimaledu tableau,
-Fonction maxTab  qui va prendre en entrée un tableau et afficher la valeur maximaledu tableau,
-Fonction moyTab  qui va prendre en entrée un tableau et afficher la valeur moyennedu tableau.
Bonus :
Ecrire une fonction qui va en fonction d'un second paramètre afficher soit la valeur minimale, maximale ou moyenne.
ex : 
tabCalcul($tab, 'min'); affiche la valeur minimale du tableau, 
tabCalcul($tab, 'max'); affiche la valeur maximale du tableau, 
tabCalcul($tab, 'moy'); affiche la valeur moyenne du tableau, */



//tableau de données
$tab = [12,42,36,48,55,87,8,59,48,36,3,49];
//function qui retourne la valeur minimale d'un tableau
function tabMin($tabParam){
    return min($tabParam);
}
//function qui retourne la valeur maximale d'un tableau
function tabMax($tabParam){
    return max($tabParam);
}
//function qui retourne la valeur moyenne d'un tableau
function tabMoy($tabParam){
    return (array_sum($tabParam)/count($tabParam));
}
echo 'La valeur minimale du tableau est : '.tabMin($tab).'<br>';
echo 'La valeur maximale du tableau est : '.tabMax($tab).'<br>';
echo 'La valeur moyenne du tableau est : '.tabMoy($tab).'<br>';

//version bonus :
function tabCalcul($tabParam, $operation){
    switch ($operation) {
        case 'min':
            return min($tabParam);
            break;
        case 'max':
            return max($tabParam);
            break;
        case 'moy':
            return (array_sum($tabParam)/count($tabParam));
            break;
        default:
            return 'l\'opération n\'existe pas';
            break;
    }
}
echo 'La valeur minimale du tableau est : '.tabCalcul($tab, 'min').'<br>';
echo 'La valeur maximale du tableau est : '.tabCalcul($tab, 'max').'<br>';
echo 'La valeur moyenne du tableau est : '.tabCalcul($tab, 'moy').'<br>';
echo 'La valeur autre du tableau est : '.tabCalcul($tab, 'sum').'<br>';




?>