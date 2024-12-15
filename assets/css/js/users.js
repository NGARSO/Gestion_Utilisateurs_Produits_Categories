let btnUser = document.getElementById('btnUser');
let nom = document.getElementById('nom');
let prenom = document.getElementById('prenom');
let email = document.getElementById('email');
let mdp = document.getElementById('mdp');

console.log(mdp.value)

btnUser.onclick = function verifAll() {

    if (nom.value.trim() === "" || prenom.value.trim() === "" || email.value.trim() === ""  || mdp.value.trim() === "") {
        alert("Tous les champs sont obligatoires !!!");
        return;
    }


    let namePattern = /^[A-Za-zÀ-ÿ '-]+$/;
    if (!namePattern.test(nom.value.trim())) {
        alert("Le nom n'est pas valide !");
        document.getElementById('nom').style.border = '2px solid red'
        return;
    }else{
        document.getElementById('nom').style.border = '2px solid green'
    }

    if (!namePattern.test(prenom.value.trim())) {
        alert("Le prénom n'est pas valide !");
        document.getElementById('prenom').style.border = '2px solid red'
        return;
    }else{
        document.getElementById('prenom').style.border = '2px solid green'
    }


    let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email.value.trim())) {
        alert("Veuillez entrer un email valide !");
        document.getElementById('email').style.border = '2px solid red'
        return;
    }else{
        document.getElementById('email').style.border = '2px solid green'
    }

    let passwordPattern = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$/;
    if (!passwordPattern.test(mdp.value.trim())) {
        alert("Le mot de passe doit contenir au moins 6 caractères, incluant des lettres et des chiffres !");
        document.getElementById('mdp').style.border = '2px solid red'
        return;
    }else{
        document.getElementById('mdp').style.border = '2px solid green'
    }

    btnUser.type = 'submit';
};