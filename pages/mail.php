<!DOCTYPE html>
<html lang="fr" >
  <head>
    <meta charset="utf-8">
    <title>Nous contacter</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="icon" href="../image/ex1.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <header>
    <div class="headerEtLiens">
    <a href="../index.php">E-Story-Map</a>
        </div>
        <nav>
          <a href="./WhoWeAre.html">Qui nous sommes</a>
          <a href="./read.html">Aide</a>
          <a href="./registre.php">S'inscrire</a>
          <a href="./mail.php">Nous contacter</a>
        </nav>
      </div>
      </header>
    <div class="contact-section">
      <div class="inner-width">
        <div class="boxed">
        <h1>Nous contacter</h1>
        <form action="../libs/send.php" method="POST">
        <input type="text" class="nom" name="nom" placeholder="Votre nom"  required>
        <input type="text" class="prenom" name ="prenom" placeholder="Votre prénom"  required>
        <input type="text" class="prenom" name ="subject" placeholder="Le sujet de votre email"  required>
        <input type="email" class="email" name="email" placeholder="Votre Email"  required>
        <textarea rows="2" placeholder="Votre message" name ="message" class="message"  required></textarea>
        <input type="submit" name="submit" value="Envoyer">
        <input type="reset" value="Réinitialiser">
        <h6 style="color:grey";>

        <?php
        //Vérifier l'état après l'envoie d'un mail
        if ($_GET['stat']=="sent") {
            echo "Nous avons bien reçu votre mail.";
        }
         ?>
         </h6>
      </form>
      </div>
      </div>

    </div>
  </body>
</html>
