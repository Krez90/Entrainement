<!--Permet de vérifier si une adresse mail est déjà dans la base de donnée -->
<?php

$reqmail = $bdd->prepare("SELECT * FROM client WHERE mail = ?");
$reqmail->execute([$mail]);
$mailexist = $reqmail->rowCount();
if($mailexist == 0){
}else{
   $erreur = "Adresse mail déjà utilisée ! ";
   }

?>