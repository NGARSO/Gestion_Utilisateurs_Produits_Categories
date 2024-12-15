let btnCat = document.getElementById('btnCat');
let libelle = document.getElementById('libelle');

btnCat.onclick = function verifAll() {

    let namePattern = /^[A-Za-zÀ-ÿ '-]+$/;
    if (!namePattern.test(libelle.value.trim())) {
        alert("Le libelle n'est pas valide !");
        document.getElementById('libelle').style.border = '2px solid red'
        return;
    }else{
        document.getElementById('libelle').style.border = '2px solid green'
    }

    btnCat.type = 'submit';
}