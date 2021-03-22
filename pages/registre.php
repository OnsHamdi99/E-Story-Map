<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title> Page d'accueil</title>
  <link rel="icon" href="../image/ex1.png" />
  <link rel="stylesheet" href="../style/styleLogin.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header>
    <div class="headerEtLiens">
        <a href="../index.php">E-Story-Map</a>
            </div>
        <nav>
          <a href="./WhoWeAre.html">Qui nous sommes</a>
          <a href="./read.html">À propos</a>
          <a href="./mail.php">Nous contacter</a>
        </nav>
      </header>
     <div class="banner">
       <h2>E-Story-Map</h2>
     </div>
     <div class="content-section">
<div class="form-box">
<form action ="../libs/signup.php" method="post">
  <h1>Créer votre compte</h1>
    <label for="">Identifiant :</label>
    <input name="email" type="email" class="form-control" placeholder="prenom.nom.etu@univ-lille.fr" required >
    <label for="">Mot de passe :</label>
    <input name="password" type="password" class="form-control" placeholder="*************" required >
    <input type="submit" value="Envoyer">
    <input type="reset" value="Réinitialiser">
    <h6 style="color:grey";>
    <?php
    //Vérifier l'état après une tentative de création de compte
    if ($_GET['stat']=="success") { //Le compte a bien été créé 
        echo "Votre compte a bien été créé!";
    }
    else if ($_GET['stat']=="failed") { //le compte existe déja
        echo "Ce email est déjà associé à un copmte existant !";
    }
    else if ($_GET['stat']=="invalidEmail") {//l'utilisateur utilise un mail non universitaire 
      echo "Vous pouvez uniquement vous inscrire avec un email tel que : prénom.nom@univ-lille.fr";
    }
     ?>
     </h6>

</form>

</div>

</body>

</html>
