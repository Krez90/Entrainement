


<!-- $prenom = array('Bibi', 'Rayan', 'Lucas');
    foreach ($prenom as $nom){
        echo '<p>Je m\'appel ' . $nom . '</p>';
    }

    
?> -->
<?php
function calculimc($poids, $taille){
    $imc = ($poids)/$taille*$taille;
    return $imc;
}
$imc = calculimc(50, 180);
{
    echo 'L\'imc est de : ' . $imc . '.';
}


