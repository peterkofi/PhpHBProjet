<?php

include("_head.php");


if(isset($_POST["enregistrer"])){

    $erreur=[];  

    $insertionLigue=$_POST["insertionLigue"];
  
    // champ formulaire

    if(empty($insertionLigue)){
        $erreur["insertionLigue"]= "veillez inserer le nom de la ligue ";
    }
 
    if (!empty($erreur)) {

        header("Location:../Ligue.php?Erreur=1");
  
    }else{

        $ligue->LigueRegistration($insertionLigue);

        if ($ligue) {
            header("Location:../Ligue.php?message=Succes&Ligue=$insertionLigue");
        } else header("Location:../Ligue.php?message=Echec");
   
    }

 }


 if(isset($_GET["operation"]) ){

    if($_GET["operation"]=="supp"){
      
        $id=(int) $_GET["id"];

        $ligue = $ligue-> DeleteLigue($id);
    
        if ($ligue) {
            header("Location:../Ligue.php?message=Succes");
        } else header("Location:../Ligue.php?message=Echec");
    }
}