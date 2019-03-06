var rectangle = document.getElementById("rectangle");
rectangle.style.width = "100px";
rectangle.style.height = "100px";
rectangle.style.backgroundColor = "#0000FF";

var buttonvert = document.getElementById("buttonvert");
buttonvert.addEventListener("click",function(){
rectangle.style.backgroundColor = "green";
});

var initial = document.getElementById("buttoninitial");
initial.addEventListener("click",function(){
rectangle.style.backgroundColor = "blue";
});
var dispaxxkiller90 = document.getElementById("buttondisparition");
dispaxxkiller90.addEventListener("click",function(){
rectangle.style.display= "none";
});
var realulu = document.getElementById("buttonreaparition");
realulu.addEventListener("click",function(){
rectangle.style.display= "block";
});


var button = document.getElementById("button10px");
rectangle.style.height = 100 + "px";
console.log(rectangle.style.height);

button.addEventListener("click", function(){
if (rectangle.style.height === "300px"){
rectangle.style.height = "100px";
}
else{
rectangle.style.height = parseFloat(rectangle.style.height) + 10 + "px";
console.log(rectangle.style.height);
}
});






// rectangle.style.width = "100px";
// rectangle.style.width = "100px";
// rectangle.style.width = "100px";
// rectangle.style.width = "100px";
// rectangle.style.width = "100px";
