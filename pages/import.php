<html lang="fr">
<head>
  <?php
  //Section de connection
  session_start();
  if(!isset($_SESSION['email'])){ //Connexion échouée
    echo "<script type='text/javascript'>alert('Connectez vous ou inscrivez vous pour avoir accès à ce contenu');</script>";
    header("Location:../index.php");
  }
   ?>
  <meta charset="UTF-8">
  <title> E-Story-Map </title>
  <link rel="stylesheet" href="../style/import.css">
  <link rel="icon" href="../image/ex1.png" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Cache-control" content="public">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="../js/script.js"></script>
  <style>
   /*Contrôle de la visibilité*/
    #create-project {
      visibility: hidden;
    }
    #nomProjet {
      visibility: hidden;
    }
    #import-data {
      visibility: hidden;
    }

    #user-stories {
      visibility: hidden;
    }

    #saveButton {
      visibility: hidden;
    }
    #addUs{
      visibility: hidden;
    }
  </style>
</head>
<body>
    <header>
    <div class="headerEtLiens">
        <a href="../index.php">E-Story-Map</a>
            </div>
        <nav>
          <a href=""><?php $x = explode(".",$_SESSION['email'])[0];echo "$x";
           ?></a>
          <a href="../libs/logout.php">Déconnexion</a>
          <a href="./WhoWeAre.html">Qui nous sommes</a>
          <a href="./read.html">Aide</a>
          <a href="./mail.php">Nous contacter</a>
        </nav>
      </header>
<div class="content-section">
<p> Pour créer un projet, cliquer sur le bouton ci-dessous </p>
<button id="creation-button" type="submit">Créer un projet</button>

<form id="create-project" action="../libs/extract.php" method="POST">
    <input type="text" id="nomProjet" name="nomProjet" placeholder="Entrer le nom de votre projet"required>
    <button  id="saveButton" name="projectname">Suivant</button></br>
    <div id="user-stories" class="us">
      <label>User Story : </label>
          <label>En tant que :</label>
          <input class='acteur' type="text" name="acteur" required>
          <div class="form">
            <label>Je veux :</label>
            <input class ='task' type="text" name="task" required>
          </div>
          <div class="form">
            <label>En sorte que :</label>
            <input class='envies' type="text" name="envies" required>
          </div>
          <div class="form" id = "besoin" >
            <label> Mes besoins sont satisfaits si :</label>
            <input class='besoins' type="text" name="besoins" required> <button class="addBtn" id="addBtn" type="button">+</button>
          </div>

        <!-- Ajouter un User Story -->
    </div>
    <button  id="addUs" name="addUs">Ajouter une US</button></br>
    <button  id="addUs" name="addUs">Ajouter une US</button></br>
    <div id="import-data" >
      <label>Importer vos modèles en format (.xml) : </label></br>
      <div class='files'>
        <label for="file">BPMN :</label>
        <input type="file" id="bpmn" name="bpmn" accept="xml">
        </br>
        <label for="file">MCF :</label>
        <input type="file" id="mcf" name="mcf" accept="xml">
        <button type="submit" name="import" action ="./results.html"id="analyse">Lancer l'analyse</button>
      </div>
    </div>
</form>

</div>
</body>


</html>
