<?php
//Déconnexion du compte
session_start();
unset($_SESSION["email"]);
header("Location:../index.php?stat=loggedout");
?>
