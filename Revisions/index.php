<?php
echo 'hello you! <br/> '; 
echo "How are you?!"; 

$nom= "Ouass"; 
$age="11" ;


echo $nom; 
echo '<br/>'; 
print_r($age); 


echo "Exercice 1 chaine de caractères" ; 
/* 
Créer une variable $mot qui va contenir la valeur suivante : "adrar";
Mettre une lettre sur 2 en majuscule (sans utiliser de boucle).*/

echo '<br/>'; 
$mot= "adrar"; 
echo $mot ; 
echo '<br/>'; 

//version sans boucle
$mot[0]= strtoupper($mot[0]); 
$mot[2]= strtoupper($mot[2]); 
$mot[4]= strtoupper($mot[4]); 
echo $mot; 

//version avec une boucle for
for ($i=0; $i < strlen(($mot)); $i++) {
    if($i%2 == 0){
      $mot[$i] = strtoupper($mot[$i]);
    }
}
echo $mot;

//version avec une boucle while
//créer un compteur
$a = 0;
while ($a <strlen($mot)) {
    if($a%2 == 0){
        $mot[$a] = strtoupper($mot[$a]);
    }
    //incrémenter le compteur
    $a++;
}

echo " <br/> Exercice 2 chaine de caractères"; 
/*
Créer un algorithme qui remplace les caractères d'une chaine :
les a par des @,
les e par des 3,
les i par des 1,
les o par des 0.
Bonus : remplacer une lettre sur 2 avec sa version en majuscule. */

//remplacer des caractères
$mot = "Hello Toulousains, aujourdhui il fait très chaud à Toulouse :) ";
//parcourir la chaine
for($i=0; $i<strlen($mot); $i++){
    //test si le caractère vaut a ou A
    if($mot[$i]== 'a' OR $mot[$i]== 'A' ){
        $mot[$i] = '@';
    }
    //test si le caractère vaut e ou E
    if($mot[$i]== 'e' OR $mot[$i]== 'E'){
        $mot[$i] = '3';
    }
    //test si le caractère vaut i ou I
    if($mot[$i]== 'i' OR $mot[$i]== 'I'){
        $mot[$i] = '1';
    }
    //test si le caractère vaut o ou O
    if($mot[$i]== 'o' OR $mot[$i]== 'O'){
        $mot[$i] = '0';
    }
}
//affichage de la chaine modifiée
echo $mot;


 











?>