//page de traitement php
<?php
    //tester si le bouton est cliqué
    if(isset($_POST['submit'])){
        //tester si les champs sont remplis
        if(!empty($_POST['nbr1']) AND !empty($_POST['nbr2'])){
            //resultat du calcul
            $resultat = $_POST['nbr1']+$_POST['nbr2'];
            //redirection avec le resultat vers la page formulaire
            header('Location: ./form.php?resultat='.$resultat.'');
			// header("<Refresh:10></Refresh:10>; url=form1.php");
        }
        //sinon on affiche une erreur
        else{
           //redirection avec le resultat vers la page formulaire
           header('Location: ./form.php?error=1');
        }
    }
?>          