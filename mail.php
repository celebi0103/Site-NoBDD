<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nom = $_POST["nom"];
  $email = $_POST["email"];
  $tel = $_POST["tel"];
  $message = $_POST["message"];

  $to = "prodbybiggerthanme@gmail.com";
  $message = "Nom: " . $nom . "\r\n" .
             "Email: " . $email . "\r\n" .
             "Téléphone: " . $tel . "\r\n" .
             "Message: " . $message;

  mail($to, $nom, $email, $tel, $message);
}
?>
