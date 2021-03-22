<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title> Page d'accueil</title>
  <link rel="icon" href="../image/ex1.png" />
  <link rel="stylesheet" href="style/styleLogin.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header>
    <div class="headerEtLiens">
          <h1>E-Story-Map</h1>
        </div>
        <nav>
          <a href="pages/WhoWeAre.html">Qui nous sommes</a>
          <a href="pages/read.html">À propos</a>
          <a href="pages/registre.php">S'inscrire</a>
          <a href="pages/mail.php">Nous contacter</a>
      </div>
      </header>
     <div class="banner">
       <h2>E-Story-Map</h2>
     </div>
     <div class="content-section">
       <h2>À qui s'adresse ce site</h2>
       <p> Ceci est un site s'adressant exclusivement aux étudiants de l'Université de Lille. <br>
         Toute personne ne possédant pas un compte mail à l'Université de Lille ne pourra accèder aux fonctionnalités du site. <br>
Une fois connecté, vous retrouverez des outils qui vous permettront de générer le taux de cohérence de vos travaux d'analyse fonctionnelle. <br>
Pour toutes questions, n'hésitez-pas à nous contacter via la page <a href="pages/mail.php">Nous contacter</a> et à consulter les pages <a href="pages/WhoWeAre.html">Qui nous sommes</a> et
<a href="pages/read.html">À propos</a>. </p>
<div class="form-box">
<form action ="libs/login.php" method="post">
  <h1>Authentification</h1>
    <label for="">Identifiant :</label>
    <input name="email" type="email" class="form-control" placeholder="prenom.nom.etu@univ-lille.fr" required >
    <label for="">Mot de passe :</label>
    <input name="password" type="password" class="form-control" placeholder="*************" required >
    <input type="submit" value="Envoyer">
    <input type="reset" value="Réinitialiser">
    <h6 style="color:grey";>
    
    <?php
    //Vérifier les états après une tentative de connexion
    if ($_GET['stat']=="success") {
      header("Location: pages/import.php"); // la connexion est réussie
    }
    else if ($_GET['stat']=="failed"){ //La connexion a échouée
      echo "Réessayez";
    }
    else if ($_GET['stat']=="loggedout"){ // Déconnexion
      echo "Vous vous êtes déconnecté !";
    }
     ?>
    </h6>
</form>

</div>

</body>

</html>
