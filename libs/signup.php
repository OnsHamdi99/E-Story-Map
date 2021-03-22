<?php
//Inscription 
$servername = "sql205.epizy.com";
$username = "epiz_27947556";
$password = "rootlerif";
$db = "epiz_27947556_users";

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

  $emailArray = explode("@", "$email");

  if ($emailArray[1]=="univ-lille.fr") {
    $sql = "INSERT INTO users (email, pwd)
          VALUES ('$email', '$pwd')";

    if ($conn->query($sql) === TRUE) {
      header("Location:../pages/registre.php?stat=success");
    } else {
      header("Location:../pages/registre.php?stat=failed");
    }
  } else {
      header("Location:../pages/registre.php?stat=invalidEmail");
  }

  $conn->close();

}
 ?>
