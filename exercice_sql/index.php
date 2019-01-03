<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
   <h1>EXERCICE 1</h1>
<?php
$bdd = new PDO('mysql:host=localhost;dbname=portfolio','root','');
$reponse = $bdd->query('SELECT * FROM table1 WHERE nom = "Palmer"');
while ($donnees = $reponse->fetch()){
          echo '<p>' . $donnees['nom'] .'_'. $donnees['prenom'] . '_' . $donnees['mails'] .'_'. $donnees['Genre'] .'_' . $donnees['ip'] .'_'. $donnees['naissance'] . '_' . $donnees['COL 9'] .'_'. $donnees['etat'] .'<p>';
}
?>
<div style="height: 5px; width: 100%; background-color: black;"></div>
    <h1>EXERCICE 2</h1>
<?php
$bdd = new PDO('mysql:host=localhost;dbname=portfolio','root','');
$reponse = $bdd->query('SELECT * FROM table1 WHERE Genre = "female"');
while ($donnees = $reponse->fetch()){
    echo '<p>' . $donnees['nom'] .'_'. $donnees['prenom'] . '_' . $donnees['mails'] .'_'. $donnees['Genre'] .'_' . $donnees['ip'] .'_'. $donnees['naissance'] . '_' . $donnees['COL 9'] .'_'. $donnees['etat'] .'<p>';    
}
?>
<div style="height: 5px; width: 100%; background-color: black;"></div>
<h1>EXERCICE 3</h1>
<?php
$bdd = new PDO('mysql:host=localhost;dbname=portfolio','root','');
$reponse = $bdd->query('SELECT * FROM table1 WHERE etat LIKE "N%"');
while ($donnees = $reponse->fetch()){
    echo '<p>' . $donnees['nom'] .'_'. $donnees['prenom'] . '_' . $donnees['mails'] .'_'. $donnees['Genre'] .'_' . $donnees['ip'] .'_'. $donnees['naissance'] . '_' . $donnees['COL 9'] .'_'. $donnees['etat'] .'<p>';    
}
?>

<div style="height: 5px; width: 100%; background-color: black;"></div>
<h1>EXERCICE 4</h1>
<?php
$bdd = new PDO('mysql:host=localhost;dbname=portfolio','root','');
$reponse = $bdd->query('SELECT * FROM table1 WHERE mails LIKE "%google%"');
while ($donnees = $reponse->fetch()){
    echo '<p>' . $donnees['nom'] .'_'. $donnees['prenom'] . '_' . $donnees['mails'] .'_'. $donnees['Genre'] .'_' . $donnees['ip'] .'_'. $donnees['naissance'] . '_' . $donnees['COL 9'] .'_'. $donnees['etat'] .'<p>';    
}
?>

<div style="height: 5px; width: 100%; background-color: black;"></div>
<h1>EXERCICE 5</h1>
<?php


$reponse = $bdd->query('SELECT DISTINCT etat FROM table1 ORDER BY etat');

$ccd = array();

while ($donnees = $reponse->fetch()){
array_push($ccd, $donnees['etat']);
}
$i=0;
foreach ($ccd as $value) {
$getpop = $bdd->query('SELECT * FROM table1 WHERE etat ="' . $value .'"');

while ($population = $getpop->fetch()){
$i=$i+1;
echo '<p>' . $population['nom'].', '.$population['prenom'].', '.$population['mails'].', '.$population['Genre'].', '.$population['ip'].', '.$population['naissance'].', '.$population['etat'].'</p>';
}
echo "<h2>Il y a " . $i . " d'habitants dans le pays " . $value ."</h2><br>";
$i=0;
}
?>

<div style="height: 5px; width: 100%; background-color: black;"></div>
<h1>EXERCICE 6</h1>

<div class="formcontainer">
<form action="#backToUser" class="myform" id="backToUser" method="post">
<input id="formfn" type="text" placeholder="Nom" name="nom">
<input id="formln" type="text" placeholder="Prenom" name="prenom">
<input id="formemail" type="email" placeholder="Email" name="mails">
<input id="formcc" type="text" placeholder="Etat" name="etat">
<input id="formdob" type="date" placeholder="Date de naissance" name="date_de_naissance">

<input type="submit" value="Confirmer" name="envoyer"><label for="envoyer"></label>
</form>
</div>
<?php

$requete = $bdd->prepare("INSERT INTO table1 (nom, prenom, mails, etat, date_de_naissance) VALUES (?, ?, ?, ?, ?)");
$requete->execute(array($_POST['nom'], $_POST['prenom'], $_POST['mails'], $_POST['etat'], $_POST['date_de_naissance']));
if(isset($_POST) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['mails']) && !empty($_POST['etat']) && !empty($_POST['date_de_naissance']))

    echo 'Message envoyer';

    else{
        echo 'Champ manquant';
    }
?>

<div style="height: 5px; width: 100%; background-color: black;"></div>

<h1>EXERCICE 7</h1>
<?php
$bdd = new PDO('mysql:host=localhost;dbname=portfolio','root','');
$reponse = $bdd->query('SELECT Genre, COUNT(*) AS nombre FROM table1 GROUP BY Genre');

while ($donnees = $reponse->fetch()){

    echo '<p> Il y a '. $donnees['nombre'] .', ' . $donnees['Genre'] . '</p>';
}

?>

<div style="height: 5px; width: 100%; background-color: black;"></div>

<h1>EXERCICE 8</h1>
<?php
$requete = $bdd->query("SELECT ROUND(AVG(TIMESTAMPDIFF(year, STR_TO_DATE(naissance, '%d/%m/%Y'), NOW())), 1) AS average FROM table1");
while ($donnees = $requete->fetch()){
echo "<p> La moyenne d'âge des employés est de " . $donnees['average'] . " ans.</p>";
}

$requete = $bdd->query("SELECT Genre, ROUND(AVG(TIMESTAMPDIFF(year, STR_TO_DATE(naissance, '%d/%m/%Y'), NOW())), 1) AS average FROM table1 GROUP BY Genre");
while ($donnees = $requete->fetch()){
echo "<p> La moyenne d'âge des " . $donnees['Genre'] ." est de " . $donnees['average'] . " ans.</p>";
}

$requete = $bdd->query('SELECT nom, prenom, TIMESTAMPDIFF(year, STR_TO_DATE(naissance, "%d/%m/%Y"), NOW()) AS age FROM table1');
while ($donnees = $requete->fetch()){
echo '<p>' . $donnees['prenom'] . ', ' . $donnees['age'] . '</p>';
}
?>

<div style="height: 5px; width: 100%; background-color: black;"></div>

<h1>EXERCICE 9</h1>

</body>

</html>
