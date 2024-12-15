let btnProduct = document.getElementById('btnProduct');
let nom = document.getElementById('nom');
let description = document.getElementById('description');
let prix = document.getElementById('prix');
let quantite = document.getElementById('quantite');

btnProduct.onclick = function verifAll() {

    if (nom.value.trim() === "" || description.value.trim() === "" ) {
        alert("Tous les champs sont obligatoires et doivent être valides !");
      
        return;
    }

    let namePattern = /^[A-Za-zÀ-ÿ '-]+$/;
    if (!namePattern.test(nom.value.trim())) {
        alert("Le nom n'est pas valide !");
        nom.style.border = '2px solid red';
        return;
    } else {
        nom.style.border = '2px solid green';
    }

    let descriptionPattern = /^[A-Za-zÀ-ÿ0-9 ',.-]+$/; 
    if (!descriptionPattern.test(description.value.trim())) {
        alert("La description n'est pas valide !");
        description.style.border = '2px solid red';
        return;
    } else {
        description.style.border = '2px solid green';
    }

    if (isNaN(prix.value) || prix.value <= 0) {
        alert("Veuillez entrer un prix valide !");
        prix.style.border = '2px solid red';
        return;
    } else {
        prix.style.border = '2px solid green';
    }

    if (isNaN(quantite.value) || quantite.value <= 0) {
        alert("La quantité doit être positive !");
        quantite.style.border = '2px solid red';
        return;
    } else {
        quantite.style.border = '2px solid green';
    }

    btnProduct.type = 'submit';
};