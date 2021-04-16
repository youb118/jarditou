
// Déclarations des variables
// Les valeurs sont récupérées grace à la fonction getElementById
const form = document.getElementById('form');
const nom = document.getElementById("nom");
const prenom = document.getElementById("prenom");
const sexe1 = document.getElementById("sexe1");
const sexe2 = document.getElementById("sexe2");
const sexe3 = document.getElementById("sexe3");
const date = document.getElementById("date");
const codepost = document.getElementById("codepost");
const adresse = document.getElementById("adresse");
const ville = document.getElementById("ville");
const email = document.getElementById("mail");
const sujet = document.getElementById("sujet");
const accept = document.getElementById("accept");
const question = document.getElementById("question");

//Creation tableau d'erreur
var tab = [];


function checkInputs() {
    const nomvalue = nom.value.trim();
    const prenomvalue = prenom.value.trim();
    const sexe1check = sexe1.checked.trim();
    const sexe2check = sexe2.checked.trim();
    const sexe3check = sexe3.checked.trim();
    const datevalue = date.value.trim();
    const codepostvalue = codepost.value.trim();
    const adressevalue = adresse.value.trim();
    const villevalue = ville.value.trim();
    const emailvalue = email.value.trim();
    const sujetvalue = sujet.value.trim();
    const acceptcheck = accept.checked.trim();
    const questionvalue = question.value.trim();
}

///////////////////////////////////////////
////   VERIFICATION DES CHAMPS ///////////
/////////////////////////////////////////


//Nom
if (nomvalue === '') {
    tab['0'] = false;
    erreurMsg(nom, 'le nom ne peut être vide');
} else if (!regnom(nomvalue)) {
    tab['0'] = false;
    erreurMsg(nom, 'le nom n\'est pas conforme');
}
else {
    tab['0'] = true;
    successMsg(nom, 'c\'est correct!');
}


//prenom
if (prenomValue === '') {
    tab['0'] = false;
    erreurMsg(prenom, 'le prenom ne peut être vide');
} else if (!regprenom(prenomValue)) {
    tab['0'] = false;
    erreurMsg(prenom, 'le prenom n\'est pas conforme');
}
else {
    tab['0'] = true;
    successMsg(prenom, 'c\'est correct!');
}















////////////////////////////
/////    REGEX  ///////////
//////////////////////////

function regemail(email) {
    return /^[A-Za-z-_áàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ ]{1,64}$/.test(email);

}
function regnom(nom) {
    return /(^[A-Z]+[a-zA-Zéèêëôœîïûüàáâæç-\s]+$)/.test(nom);
}

function regprenom(prenom) {
    return /(^[A-Z]+[a-zA-Zéèêëôœîïûüàáâæç-\s]+$)/.test(prenom);
}

function regdate(date) {
    return /^[A-Za-z-_áàâäãåçéèêëíìîïñóòôöõúùûüýÿæœÁÀÂÄÃÅÇÉÈÊËÍÌÎÏÑÓÒÔÖÕÚÙÛÜÝŸÆŒ ]{1,64}$/.test(date);
}

function regcodepost(codepost) {
    return /(^[0-9]{5}$)|^$/.test(codepost);
}

function regadresse(adresse) {
    return /(^[0-9]{5}$)|^$/.test(adresse);
}


function regville(ville) {
    return /(^[A-Z]+[a-zA-Zéèêëôœîïûüàáâæç-\s]+$)|^$/.test(ville);
}



function erreurMsg(input, message) {
    const formGroup = input.parentElement;
    const small = formGroup.querySelector('small');
    //ajout du msg d'erreur dans la balise small
    small.innerText = message;
    //ajout de la classe error
    formGroup.className = 'form-group error';
}

function successMsg(input, message) {
    const formGroup = input.parentElement;
    const small = formGroup.querySelector('small');
    small.innerText = message;
    formGroup.className = 'form-group success';
}

form.addEventListener('focusout', (e) => {
    checkInputs();
});

var Validation = true; // test de validation avec un booleen, si le tableau contient des erreurs, validation = false


sub.addEventListener("click", function (event) {
    checkInputs();
    for (var i = 0; i < tab.length; i++) {
        if (tab[i] == false) {
            Validation = false;
        } else {
            Validation = true;
        }
    }

    // envoi du formulaire si validation = true
    if (Validation == true) {
        form.submit();
    } else {
        event.preventDefault();
    }
})