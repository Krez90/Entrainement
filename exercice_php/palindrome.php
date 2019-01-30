<?php

$mot_1 = "Kayak"; 
$mot_1 = strtolower($mot_1); 
echo $mot_1 . "<br>";
$reverse = strrev($mot_1);

if ($mot_1 == $reverse)
    echo 'C\'est un palindrome';
else
    echo 'Se n\'est pas un palindrome';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<script>
	
function checkpal(palindrome){

var regex = /\W/;
palindrome = palindrome.toLowerCase().replace(regex, "");

var verif = palindrome.split("").reverse().join("");

if (palindrome == verif){
	return palindrome + " est un palindrome";
}
else{
	return palindrome + " n'est pas un palindrome";
}
return verif;

}
var resultat = checkpal("aba.");
console.log(resultat);
</script>	
</body>
</html>