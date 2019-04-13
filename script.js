/*---------------------------------------------------------------------------menu---------------------------------------------------------------------------------------------------*/

var menu = document.querySelector(".menu")
var btn = document.querySelector(".icon")
var comble = document.querySelector(".comble")

comble.style.display = "none"

var add = function() {
	comble.style.display = "block"
	menu.classList.toggle("active")
}


var remove = function () {
	menu.classList.toggle("active")
	comble.style.display = "none"
}


btn.addEventListener('click', add)
comble.addEventListener('click', remove)

/*------------------------------------------------------------------------imageGalerie--------------------------------------------------------------------------------------*/







/*------------------------------------------------------------------------formulaire--------------------------------------------------------------------------------------*/

// Contrôle du courriel en fin de saisie

document.getElementById("courriel").addEventListener("blur", function (e) {

    // Correspond à une chaîne de la forme xxx@yyy.zzz

    var regexCourriel = /.+@.+\..+/;

    var validiteCourriel = "";

    if (!regexCourriel.test(e.target.value)) {

        validiteCourriel = "Adresse invalide";

    }

    document.getElementById("aideCourriel").textContent = validiteCourriel;

});