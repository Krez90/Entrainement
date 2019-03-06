var rectangle = document.getElementById("rectangle");
var pog = document.getElementById("pog");
var kappa = document.getElementById("kappa");
// rectangle.style.width = "100px";
// rectangle.style.height = "100px";
rectangle.style.backgroundColor = "blue";
var montimer;

document.addEventListener("keydown", function (event) {
    if (event.keyCode == "38") {
        pog.style.marginBottom = "320px";
        pog.style.display ="flex";
        kappa.style.display = "none";
        // rectangle.style.marginBottom = "100px";
        montimer = setTimeout(function(){
            pog.style.display ="none";
            kappa.style.display ="flex";
            // rectangle.style.marginBottom = "0px";
         }, 100);
    }
});