let signup_btn = document.querySelector("#signup_btn");

let pseudo = document.querySelector("#champ_pseudo");
let nom = document.querySelector("#champ_nom");
let prenom = document.querySelector("#champ_prenom");
let age = document.querySelector("#champ_age");
let sexeH = document.querySelector("#sexeH");
let sexeF = document.querySelector("#sexeF");
let poids = document.querySelector("#champ_poids");
let taille = document.querySelector("#champ_taille");
let objectif = document.querySelector("#champ_objectif");
let psw = document.querySelector("#champ_mdp");

signup_btn.addEventListener("click", ()=>{
    pseudo = pseudo.value;
    nom = nom.value;
    prenom = prenom.value;
    age = age.value;
    sexeH = sexeH.value;
    sexeF = sexeF.value;
    poids = poids.value;
    taille = taille.value;
    objectif = objectif.value;
    psw = psw.value;
})