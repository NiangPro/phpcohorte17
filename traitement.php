<?php 

if(isset($_POST["register"])){
    extract($_POST);

    echo "Prenom: $prenom <br>";
    echo "Nom: $nom <br>";
    echo "Email: $email <br>";
}else{
    header("Location:formulaire.php");
}