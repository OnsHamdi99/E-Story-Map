<?php
  //Création d'un compte
  if(!empty($_POST)) {
    $email = $_POST['email'];
    $pwd = $_POST['password'];
    $servername = "sql205.epizy.com";
    $username = "epiz_27947556";
    $password = "rootlerif";
    $dbname = "epiz_27947556_users";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    // sql to create table
    $sql = "SELECT * FROM users WHERE email= '$email' AND pwd= '$pwd'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
      session_start();
      $_SESSION['email'] = $email;
      header("Location:../index.php?stat=success");
    } else {
      header("Location:../index.php?stat=failed");
    }

    $conn->close();

}
 ?>
