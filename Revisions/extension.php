<?php

/*Créer une page php (extension .php) dans votre répertoire :
Elle devra contenir les variables suivantes :
-$nbr1 = 10,
-$nbr2 = 23,
-$total,
Récupérer dans $total la somme de $nbr1 et $nbr2 
et afficher le résultat (fonction echo),
Modifer les valeurs de $nbr1 et $nbr2,
Récupérer dans $total la soustraction de $nbr2 et $nbr1
et afficher le résultat (fonction echo). */ 

echo "EXO 1 <br/>"; 

$nbr1= 10; 
$nbr2= 23; 
$total= $nbr1 + $nbr2; 

echo $total; 

$nbr1= 10; 
$nbr2=2; 
$total= $nbr1 - $nbr2;

echo '<br/>'; 
echo $total; 
echo '<br/>'; 

echo "EXO 2 <br/>"; 

/*Créer un algorithme qui va intervertir les valeurs de 2 variables :
$nbr1 et  $nbr2.*/

$nbr1 = 10;
$nbr2 = 23;
$nbr3 = $nbr1; 
$nbr1 = $nbr2; 
$nbr2 = $nbr3; 



/*Exercice 3 Variables :
-Créer 3 variables $nbr1, $nbr2 et $nbr3 qui ont pour valeur $nbr1 =5, $nbr2 =3 et $nbr3 = $nbr1+$nbr2,
-Afficher la valeur de chaque variable (utilisez la fonction echo).,
-passer la valeur de $nbr1 à 2,
-Afficher la valeur de $nbr1,
-passer la valeur de $nbr3 à $nbr2 - $nbr1,
-Afficher la valeur de chaque variable (utilisez la fonction echo).*/
echo "EXO 3 <br/>"; 
$nb1= 5; 
$nb2= 3; 
$nb3= $nb1 + $nb2; 

echo $nb1; 
echo '<br/>'; 

echo $nb2; 
echo '<br/>'; 

echo $nb3; 
echo '<br/>'; 

$nb3= $nb2 - $nb1; 
echo $nb3; 
echo '<br/>'; 


echo "EXO CAST <br/>";

$nbr1= "10"; 
echo gettype($nbr1); 
echo '<br/>'; 

$var = (int) $nbr1; 
var_dump ($var); 

$resultat = "Le résultat est égal à : ";
    //version encadrée en double 
    echo "$nbr1 + $nbr2 est égal à $resultat<br>";
    //version encadrée en simple
    echo ''.$nbr1.' +  '.$nbr2.' est égal à '.$resultat.'<br>';
    //concaténation avec opérateur .
    echo $nbr1." + ".$nbr2." est égal à : ".$resultat."<br>"; 
    //opération de concaténation
    $nbr1 .= "texte";
 


    
?>