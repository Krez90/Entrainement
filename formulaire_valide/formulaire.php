<?php
$recupNom = $_POST['nom'];
$recupEmail = $_POST['mail'];
$recupMessage = $_POST['message'];

if($recupNom != "" && $recupEmail != ""){
    $message = "Votre message a bien été envoyer";
}
else{
    $message = "Certains champs sont vide";
}

if(isset($_POST['message'])){
    $entete  = 'MIME-Version: 1.0' . "\r\n";
    $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $entete .= 'From: ' . $_POST['mail'] . "\r\n";

    $message = '<h1>Message envoyé depuis la page Contact du portfolio</h1>
    <p><b>Nom : </b>' . $_POST['nom'] . '<br>
    <b>Email : </b>' . $_POST['mail'] . '<br>
    <b>Message : </b>' . $_POST['message'] . '</p>';

    $retour = mail('bilel.h@codeur.online', 'Envoi depuis page contact portfolio', $message, $entete);
    if($retour) {
        echo '<p>Votre message a bien été envoyé.</p>';
    }
}


// $dbh = new PDO('mysql:host='. $host .';dbname='. $dbname, $user, $pass); 

// function addFichier($filename){
//     global $dbh;

// $add_fichier = $dbh->prepare('INSERT INTO upload (Url, code, date) VALUES (?,?, NOW());');
// $add_fichier->execute([$filename]);

// }
// if(isset($filename)){
// addFichier($filename);
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1><?$message?></h1>
</body>
</html>

