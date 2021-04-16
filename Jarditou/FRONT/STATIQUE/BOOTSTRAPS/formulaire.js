
//REGEX//
var regalpha = new RegExp("^[A-Za-z]+$");
var regnum = new RegExp("^[0-9]*$");
var regdate = new RegExp ("^[0-3][0-9]\\/[0-1][0-9]\\/[0-9][0-9][0-9][0-9]+$");
var regemail = new RegExp("^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$");
//

// SPAN ERREUR //
var span_nom = document.getElementById("spannom");
var span_prenom = document.getElementById("spanprenom");
var span_date = document.getElementById("spandate");
var span_email = document.getElementById("spanemail");
var span_demande = document.getElementById("spandemande");
var span_question = document.getElementById("spanquestion");
var span_checkbox = document.getElementById("spancheckbox");
var span_sexe = document.getElementById("spansexe");
var span_cp = document.getElementById("spancp");

// TABLEAU BOOLEEN

var tableauErreur=Array(9);


//nom
var nom = document.getElementById("Nom");
nom.addEventListener("blur",function(){
var resultatnom = regalpha.test(nom.value);
if (resultatnom  == false)
{    
    var error_nom = "Veuillez saisir un nom";
    tableauErreur[0]=(false);
}
else 
{
    tableauErreur[0]=(true);
}

span_nom.textContent = error_nom;
});

//prenom
var prenom = document.getElementById("Prénom");
prenom.addEventListener("blur",function(){
var resultatprenom = regalpha.test(prenom.value);

if (resultatprenom == false)
{ 
    var error_prenom = "Veuillez saisir un prénom";
    tableauErreur[1]=(false);
}
else
{
    tableauErreur[1]=(true);
}

span_prenom.textContent = error_prenom;
});

// date de naissance


var date = document.getElementById("Date");
date.addEventListener("blur",function(){
    var resultatdate = regdate.test(date.value);
    if (resultatdate == false){
        var error_date = "Veuillez saisir une date de naissance"
        tableauErreur[2]=(false);
    }

    else
{
    tableauErreur[2]=(true);
}
span_date.textContent = error_date;
});

// email

var email = document.getElementById("Email");
email.addEventListener("blur",function(){
    var resultatemail = regemail.test(email.value);
    if (resultatemail == false){
        var error_email = "Veuillez saisir une adresse mail"
        tableauErreur[3]=(false);
    }
    else 
    {
        tableauErreur[3]=(true);
    }

    span_email.textContent = error_email;

});


// demande 

var demande = document.getElementById("Demande");
demande.addEventListener("blur",function(){
    if (demande.value == "demande" )
    {
        var error_demande = " veuillez saisir un sujet de demande";
        tableauErreur[4]=(false);
    }
    else
{
    tableauErreur[4]=(true);
}
    span_demande.textContent = error_demande;
});

//questions

var question = document.getElementById("Questions");
question.addEventListener("blur",function(){
    if (question.value == 0 )
    {
        var error_question = "veuillez poser une question";
        tableauErreur[5]=(false);
    }
    else
{
    tableauErreur[5]=(true);
}
    span_question.textContent = error_question;
});

// checkbox 

var checkbox = document.getElementById("checkbox");
checkbox.addEventListener("blur",function(){
    if (checkbox.checked == false )
    {
        var error_checkbox = "veuillez accepter le traitement informatique du formulaire";
        tableauErreur[6]=(false);
    }

    else
{
    tableauErreur[6]=(true);
}

    span_checkbox.textContent = error_checkbox;
});
 
// sexe
function sexe() {

var M = document.getElementById('Masculin');
var F = document.getElementById('Feminin');

if(!M.checked && !F.checked)
    {
        tableauErreur[7] = false;
        span_sexe.innerHTML = "Veuillez indiquer votre genre"
        
    }

    else
{
    tableauErreur[7] = true;
}
};
//cp
var cp = document.getElementById("cp");
cp.addEventListener("blur",function(){
    var resultatcp = regnum.test(cp.value);
    if (resultatcp == false){
        var error_cp = "Veuillez saisir un code postal"
        tableauErreur[8]=(false);
    }

    else
{
    tableauErreur[8]=(true);
}
span_cp.textContent = error_cp;
});
// SUBMIT 

var sub = document.getElementById("envoyer");
sub.addEventListener("click",function(event){
    event.preventDefault();
    sexe();
if (tableauErreur.includes(false) || tableauErreur.includes(undefined)) {
    
    

    if (tableauErreur[0]== false || tableauErreur[0]==undefined)
    {
    event.preventDefault();
    span_nom.textContent = "Saisie du nom incorrect";
    } 

    if (tableauErreur[1]== false || tableauErreur[1]==undefined)
    {
    event.preventDefault();
    span_prenom.textContent = "Saisie du prenom incorrect";
    }

    if (tableauErreur[2]== false || tableauErreur[2]==undefined)
    {
    event.preventDefault();
    span_date.textContent = "Saisie de la date incorrecte";
    }

    if (tableauErreur[3]== false || tableauErreur[3]==undefined)
    {
    event.preventDefault();
    span_email.textContent = "Saisie de l'adresse incorrecte";
    }

    if (tableauErreur[4]== false || tableauErreur[4]==undefined)
    {
    event.preventDefault();
    span_demande.textContent = "Saisie de la demande incorrecte";
    }

    if (tableauErreur[5]== false || tableauErreur[5]==undefined)
    {
    event.preventDefault();
    span_question.textContent = "Votre question est manquante";
    }

    if (tableauErreur[6]== false || tableauErreur[6]==undefined)
    {
    event.preventDefault();
    span_checkbox.textContent = "les conditions du traitement informatique n'ont pas été acceptés";
    }
     if (tableauErreur[7]== false || tableauErreur[7]==undefined)
    {
    event.preventDefault();
    span_sexe.textContent = "Indiquez votre genre";
    }
    if (tableauErreur[8]== false || tableauErreur[8]==undefined)
    {
    event.preventDefault();
    span_cp.textContent = "Indiquez votre code postal";
    }

}else{

    var formulaire = document.getElementById("formulaire")
    formulaire.submit();
    }
        });