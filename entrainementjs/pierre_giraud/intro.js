/////////////////////////////////////// LES CALCULES/////////////////////////////////
// var x = prompt('Rentrez un premier nombre merci');
// var y = prompt('Rentrez un deuxième nombre merci');
// var z = (parseInt(x) / parseInt (y));

// var text1 = "Le résultat de l'addition de ";
// var text2= " par ";
// var text3 = " est ";

// alert(text1 + x + text2 + y + text3 + z);

//////////////////////////////////////// LES CONDITIONS/////////////////////////////////
// var heure = 9;

// if (heure <= 12 == true) {
//     alert("C'est le matin"); 

// }else if (heure <= 18 == true) {
//     alert("C'est l'après-midi");
    
// } else{
//     alert("C'est le soir");
    
// }

/////////////////////////////////////////// TERNAIRES ET SWITCH/////////////////////////
var date = new Date();
var heure = date.getHours();

if (heure >= 00 && heure < 12 == true) {
    alert("Bonjour nous sommes le matin");
}

else if (heure == 12 == true) {
    alert("Bonjour il est midi");
}

else if (heure > 12 && heure < 18 == true) {
    alert("Bonjour nous sommes l'après-midi");
}

else {
    alert("Bonsoir");
}
