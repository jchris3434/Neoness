<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="signup.css">
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <title>Page inscription</title>
</head>
<body class="container-fluid">
    <header>
           <img class="col-8 offset-2" src="./img/neoness2.png" alt="neoness">
    </header>

    <section class="p-3">

        <?= session()->getFlashdata('error') ?>
        <?= service('validation')->listErrors() ?>

        <form class="row col-4 offset-4 border shadow-lg p-2" action="/neoness/signup" method="post">
        <?= csrf_field() ?>
            <div class="row g-2 align-items-center">
                <div class="col-3 text-center">
                  <label for="text" class="col-form-label">Pseudo</label>
                </div>
                <div class="col-9 ">
                  <input type="text" name="pseudo" id="champ_pseudo" class="form-control">
                </div>
            </div>      

            <div class="row g-2 align-items-center">
                <div class="col-3 text-center">
                  <label for="text" class="col-form-label">Nom</label>
                </div>
                <div class="col-9 ">
                  <input type="text" name="nom" id="champ_nom" class="form-control">
                </div>
            </div> 

            <div class="row g-2 align-items-center">
                <div class="col-3 text-center">
                  <label for="text" class="col-form-label">Prénom</label>
                </div>
                <div class="col-9 ">
                  <input type="text" name="prenom" id="champ_prenom" class="form-control">
                </div>
            </div> 

            <div class="row g-2 align-items-center">
                <div class="col-3 text-center">
                  <label for="text" class="col-form-label">Age</label>
                </div>
                <div class="col-9 ">
                  <input type="number" name="age" id="champ_age" class="form-control">
                </div>
            </div> 


   <div class="row g-2">
    <label class="col-3 text-center" for="champ_prenom" class="col-form-label">Sexe : </label>
  <input class="col-1 " type="radio" id="sexeH" name="sexe" value="Homme">
  <label class="col-1 text-center" for="sexeH" class="col-form-label">Homme </label>
  <input class="col-1 offset-1" type="radio" id="sexeF" name="sexe" value="Femme">
  <label class="col-1 text-center" for="sexeF" class="col-form-label">Femme </label>
</div>

<div class="row g-2 align-items-center">
    <div class="col-3 text-center">
      <label for="text" class="col-form-label">Poids</label>
    </div>
    <div class="col-9 ">
      <input type="number" name="poids" id="champ_poids" class="form-control">
    </div>
</div> 

<div class="row g-2 align-items-center">
    <div class="col-3 text-center">
      <label for="text" class="col-form-label">Taille</label>
    </div>
    <div class="col-9 ">
      <input type="number" name="taille" id="champ_taille" class="form-control">
    </div>
</div> 

<div class="row g-2 align-items-center">
    <div class="col-3 text-center">
      <label for="text" class="col-form-label">Objectif</label>
    </div>
    <div class="col-9 ">
      <input type="number" name="objectif" id="champ_objectif" class="form-control">
    </div>
</div> 

<div class="row g-2 align-items-center">
    <div class="col-3 text-center">
      <label for="text" class="col-form-label">Mot de passe</label>
    </div>
    <div class="col-9 ">
      <input type="password" name="mdp" id="champ_mdp" class="form-control">
    </div>
</div> 


<input id="signup_btn" type="submit" name="submit" value="Sign up" class="btn btn-danger col-4 offset-4 shadow mt-3">
 
     
        </form>
    </section>
    <script src="signup.js"></script>
</body>
</html>