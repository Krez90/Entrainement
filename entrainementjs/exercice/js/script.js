var texte = document.getElementById("textequigrandit");
texte.style.fontSize = "20px";

texte.addEventListener("click", function () {

    if (texte.style.fontSize === "20px") {
        texte.style.fontSize = "30px";
    }

    else {
        texte.style.fontSize = "20px";
    }
});