let login_btn = document.querySelector("#login_btn");
let sign_btn = document.querySelector("#signup_btn");
let champ_pseudo = document.querySelector("#champ_pseudo");
let champ_mdp = document.querySelector("#champ_mdp");
// Variables
let pseudo;
let psw;
// 

login_btn.addEventListener("click", ()=>{
    pseudo = champ_pseudo.value;
    psw = champ_mdp.value;
    console.log(pseudo);
    console.log(psw);
    document.location.href='logged';
})

let signup_btn = document.querySelector("#signup_btn");

signup_btn.addEventListener("click", ()=>{
    document.location.href='signup';
})