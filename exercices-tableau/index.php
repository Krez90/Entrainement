<?php
	//exercice pour dédramatiser les tableaux
    //premier niveau faire ce tableau
    
    //afficher les valeurs comme l'exemple :
	//la valeur coucou72 est égale à 10
	//la valeur vie_oiseau est égale à 15 ....
	
	$arr =[
		"coucou72" => 10,
		"vie_oiseau" => 15,
		"test_value50" => 25,
		"bonjour" => 20,
		"arbitraire" => 5,
	];

echo "la valeur coucou72 est égale à ", $arr["coucou72"] ,'<br>'; 
echo "la valeur vie_oiseau est égale à  ", $arr["vie_oiseau"] ,'<br>';
echo "la valeur test_value50 est égale à  ", $arr["test_value50"] ,'<br>'; 
echo "la valeur bonjour est égale à  ", $arr["bonjour"] ,'<br>'; 
echo "la valeur arbitraire est égale à  ", $arr["arbitraire"],'<br><br>';


	
	//second niveau faire ce tableau
	$arr2 = [
		"coucou72" => 10,
		"vie_oiseau" => 15,
		"test_value50" => $tab= array(
			"in_tab" => "in tab",
			"in_tab1" => "dans tableau 1",
		),
		"bonjour" => 20,
		"arbitraire" => 5,
	];

echo "la valeur coucou72 est égale à ", $arr["coucou72"] ,'<br>'; 
echo "la valeur vie_oiseau est égale à  ", $arr["vie_oiseau"] ,'<br>';
echo "la valeur test_value50 est égale à  ", $arr["test_value50"],'<br>'; 
echo "la valeur bonjour est égale à  ", $arr["bonjour"] ,'<br>'; 
echo "la valeur arbitraire est égale à  ", $arr["arbitraire"] ,'<br><br><br><br>';

//Boucle foreach
$arr3 = ["coucou72", "vie_oiseau", "test_value50", "bonjour", "arbitraire"];

foreach($arr2 as $cle=>$valeur){
   echo $cle.' : '.$valeur.'<br>';
}
foreach($tab as $cle=>$valeur){
	echo $cle.' : '.$valeur.'<br>';
 }
 


	//faire l'exercice avec une boucle for


	//faire l'exercice avec une boucle foreach


	//faire l'exercice avec un while
?>