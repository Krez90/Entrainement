<?php

$nom = $_POST["nom"];
$mail = $_POST["mail"];
$message = $_POST["message"];

include('infosql.php');

$dbh = new PDO('mysql:host='. $host .';dbname='. $dbname, $user, $pass);

$add_contact = $dbh->prepare ("INSERT INTO contact_portfolio (nom, mail, message) VALUES (?,?,?)");

$add_contact->execute([$nom, $mail, $message]);

header('Location: https://bilelh.promo-24.codeur.online/portfolio/accueil.php?success=1#contact');
header("Cache-Control: no-cache, must-revalidate");
exit;