<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil Neoness</title>
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="./index.js" defer></script>
</head>
<body class="container">
    <header class="col-8 offset-2"><img src="./img/neoness5.png" alt=""></header>
    <?= session()->getFlashdata('error') ?>
        <?= service('validation')->listErrors() ?>
    <section class="p-3">
    <?= csrf_field() ?>
        <form class="row col-4 offset-4" action="verification" method="post">
            <label for="champ_pseudo" class="form-label">Pseudo</label>
            <input id="champ_pseudo" type="text" class="form-control">
            <label for="champ_mdp" class="form-label">Mot de passe</label>
            <input id="champ_mdp" type="password" class="form-control">
            <div id="btntest">
            <input id="login_btn" type="button" value="Log In" class="btn btn-primary col-6 offset-3 shadow mt-3">
            <input id="signup_btn" type="button" value="Sign Up" class="row btn btn-danger col-2 offset-5 shadow">
            </div>
        </form>
        
    </section>
    
</body>
</html>