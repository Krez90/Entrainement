<?php
$bdd = new PDO('mysql:host=localhost;dbname=livre_dor;charset=utf8','root','');
$total_retour = $bdd->query('SELECT COUNT(*) FROM livre_dor');
var_dump($total_retour);
$donnee_total = $bdd->fetch_assoc($total_retour);
?>