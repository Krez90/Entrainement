<?php
if(isset($_POST['message'])){
    $entete  = 'MIME-Version: 1.0' . "\r\n";
    $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $entete .= 'From: ' . $_POST['mail'] . "\r\n";

    $message = '<h1>Message envoyé depuis la page Contact du portfolio</h1>
    <p><b>Nom : </b>' . $_POST["nom"] . '<br>
    <b>Email : </b>' . $_POST["mail"] . '<br>
    <b>Message : </b>' . $_POST["message"] . '</p>';

    $retour = mail("bilel.h@codeur.online', 'Envoi depuis page contact portfolio", $message, $entete);
    if($retour) {
        echo "<p>Votre message a bien été envoyé.</p>";
    }
}