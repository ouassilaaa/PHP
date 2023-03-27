<?php
    //tab vide
    $tab = [];
    $tab2 = [1,'texte',8,9,true,'mot'];
    //affiche le contenu
    echo $tab2[2];
    //ajouter une colonne 
    $tab2[10] = 55;
    //remplacer la valeur d'une colonne
    $tab2[3] = 19;
    //ajouter à la fin d'un tableau
    $tab[]= 'ajout';

    //tableau associatif
    $tabUser = ['Nom'=> 'Mithridate', 'Prenom' => 'Mathieu', 'Entreprise'=> 'Adrar', 'Prenom'=>'Ouass'];
    //afficher le contenu de la colonne prenom
    echo $tabUser['Prenom'];
    //remplacer le contenu de la colonne prenom
    $tabUser['Prenom'] = 'Romain';
    //ajouter une colonne
    $tabUser[] = ['test'=>''];
    var_dump ($tabUser);
    
    

    //pour parcourir un tableau associatif
    foreach ($tabUser as $key => $value) {
        echo $key.' : '.$value.'<br>';
    }
    //pour parcourir un tableau indéxé
    $tab = [1,47, 47, 58, 4588, 'sgfuhh', 84515];
    foreach ($tab as $value) {
       echo $value.'<br>';
    }


    echo 'Exercice tableau 1';
    /*
    Ajouter le tableau suivant dans une page php :
    $tab = [12,42,36,48,55,87,1,59,48,36,73,49],
    afficher la somme des colonnes du tableau en utilisant une boucle,
    Bonus utiliser une fonction native de PHP,*/


    //tableau de nombres
   $tab= [12,42,36,48,55,87,1,59,48,36,73,49];
    
   //variable pour stocker la somme
   $sum = 0;
   //boucle pour ajouter les valeurs à la $sum
   foreach($tab as $value){
        //$sum = $sum + $value;
        //version simplifiée pour incrémenter 
        $sum += $value;
   }
   //affichage de la somme 
   echo 'la somme du tableau est égale à : '.$sum.'<br>';

   //version avec méthode native php
   echo 'la somme du tableau est égale à : '.array_sum($tab);
   echo '<br/>'; 
   echo min($tab); 
   echo max($tab); 
   echo count($tab); 

   
    //tableau de nombres
    $tab = [12,42,36,48,55,87,8,59,48,36,3,49];
    //variable pour stocker la valeur maximale
    $max = $tab[0];
    //boucle pour parcourir le jeu de données
    foreach($tab as $value){
        if($value>$max){
            $max = $value;
        }
    }
    //affichage de la valeur max 
    echo 'la valeur maximale du tableau égale à : '.$max.'<br>';

    //version avec méthode native php
    echo 'la valeur maximale du tableau égale à : '.max($tab).'<br>';

   echo '<br/>'; 
   echo 'Exercice 4 tableau';
   /*
   Dans le tableau $tab = [12,42,36,48,55,87,1,59,48,36,73,49];
   Trouver et afficher en utilisant une boucle la valeur moyenne.
   Bonus : utiliser une fonction native de PHP. */

   echo '<br/>'; 

      //tableau de nombres
      $tab = [12,42,36,48,55,87,8,59,48,36,3,49];
      //variable pour stocker la valeur maximale
      $sum = 0;
      //boucle pour ajouter les valeurs à la $sum
      foreach($tab as $value){
          $sum += $value;
      }
      $moy = $sum/count($tab);
      //affichage de la valeur max 
      echo 'la valeur moyenne du tableau égale à : '.$moy.'<br>';
  
      //version avec méthode native php
      echo 'la valeur moyenne du tableau égale à : '.(array_sum($tab)/count($tab)).'<br>';



 

    




?>