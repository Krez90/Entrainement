


<!-- $prenom = array('Bibi', 'Rayan', 'Lucas');
    foreach ($prenom as $nom){
        echo '<p>Je m\'appel ' . $nom . '</p>';
    }

    
?> -->
<?php
$tab = array('PC'=> 'Ordinateur', 'Tel'=> 'Smartphone', 'IOS'=>'');

foreach($tab as $valeur)
if(!empty($valeur)){
    echo '<p>Il y a ' . $valeur . ' dans le tableau</p>';
}
else{
    echo '<p> Le tableau ' . $valeur . ' est vide</p>';
}
?>