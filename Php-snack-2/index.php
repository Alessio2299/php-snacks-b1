<?php
  if(!empty($_GET["name"]) && !empty($_GET["age"]) && !empty($_GET["email"])){
    $firstName = $_GET["name"];
    $age = $_GET["age"];
    $email = $_GET["email"];
    if(strlen($firstName) > 3 && strpos($email, "@") == true && strpos($email, ".") == true && is_numeric($age) === true){
      echo "Accesso Consentito";
    } else{
      echo "Accesso Negato";
    }
  } else{
    echo "Inserisci i tuoi dati per poter verificare l'accesso";
  }

