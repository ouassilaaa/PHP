<?php


echo "SUPER CALCULEEEETTTTEE 🖩"; 

/*Créer une fonction qui va prendre en entrée 3 paramètres :
$nbr1  (int), $nbr2 (int), $operator (string  : + - / *).
Elle devra retourner le résultat de l'opération passé dans le paramètre $operator (au format string)*/

function calcul (int $nbr1, int $nbr2, string $operator) {
    switch($operator){
        case '+': echo $nbr1 + $nbr2 ; 
            break; 
       
        case '-': echo $nbr1 - $nbr2; 
            break; 

        case '*': echo $nbr1 * $nbr2 ; 
            break; 

        case '/' : if ($nbr2 == 0) {
            echo " Nop pas par 0 petit malin :) ";
          } else {
            echo $nbr1 / $nbr2;
          }
            break; 
       
        default : echo "SORRY je ne gère pas ce genre de calcul :) ";   
        break;   


    }
}

echo '<br/>'; 
calcul(4,5,'+');
echo '<br/>'; 
calcul(4,0,'/');
echo '<br/>'; 
calcul (5,10,'p'); 

?>