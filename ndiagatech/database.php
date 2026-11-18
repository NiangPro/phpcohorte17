<?php 

// try{

//     echo 5/0;
// }catch(DivisionByZeroError $e){
//     echo "Impossible de diviser par 0 a la ligne ".__LINE__." dans le fichier:". __FILE__;
// }

try{

    $db = new PDO("mysql:host=localhost;dbname=ndiagatech", "root", "");
}catch(PDOException $e){
    echo "Erreur: ".$e->getMessage()." a la ligne ".__LINE__;
}

function ajouterUneCategorie($nom){
    global $db;
    try {
        $q = $db->prepare("INSERT INTO categories VALUES (null, :nom)");
        return $q->execute(["nom" => $nom]);
    } catch(PDOException $e){
        echo "Erreur: ".$e->getMessage()." a la ligne ".__LINE__;
    }
}

function recupererToutesLesCategories(){
    global $db;
    try {
        $q = $db->prepare("SELECT * FROM categories ORDER BY id DESC");
        $q->execute();

        return $q->fetchAll();
    } catch(PDOException $e){
        echo "Erreur: ".$e->getMessage()." a la ligne ".__LINE__;
    }
}

function seconnecter($email){
    global $db;
    try {
        $q = $db->prepare("SELECT * FROM users WHERE email=:email");
        $q->execute(["email" => $email]);

       return $q->fetch();
    } catch(PDOException $e){
        echo "Erreur: ".$e->getMessage()." a la ligne ".__LINE__;
    }
}

function ajouterUnUtilisateur($prenom, $nom, $email, $telephone, $quartier, $mdp, $role = "client"){
    global $db;
    try {
       $q =  $db->prepare("INSERT INTO users VALUES(null, :p, :nom, :email, :telephone, :quartier, :mdp, :role, NOW())");
       return $q->execute([
        "p" => $prenom,
        "nom" => $nom,
        "email" => $email,
        "telephone" => $telephone,
        "quartier" => $quartier,
        "mdp" => $mdp,
        "role" => $role,
       ]);
    } catch(PDOException $e){
        echo "Erreur: ".$e->getMessage()." a la ligne ".__LINE__;
    }
}