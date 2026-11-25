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

function modifierUnProduit($id,$reference, $nom, $prix_achat, $prix_vente, $stock, $seuil, $description, $image, $idcategorie){
    global $db;
    try{
        $q = $db->prepare("UPDATE produits SET reference=:reference, nom=:nom, prix_achat=:pa, prix_vente=:pv, stock=:stock, seuil=:seuil, description=:description, image=:image, idcategorie=:idcategorie
        WHERE id=:id");
        return $q->execute([
            "id" => intval($id),
            "ref" => $reference,
            "nom" => $nom,
            "pa" => $prix_achat,
            "pv" => $prix_vente,
            "stock" => $stock,
            "seuil" => $seuil,
            "description" => $description,
            "image" => $image,
            "idcategorie" => intval($idcategorie)
        ]);
    }catch(PDOException $e){
        echo "Erreur: ".$e->getMessage()." a la ligne ".__LINE__;
    }
}

function recupererUnProduit($id){
    global $db;
    try {
        $q = $db->prepare("SELECT * FROM produits WHERE id =:id");
        $q->execute(["id" => $id]);

        // return $q->fetch(PDO::FETCH_OBJ);
        return $q->fetch();
    } catch(PDOException $e){
        echo "Erreur: ".$e->getMessage()." a la ligne ".__LINE__;
    }
}

function recupererTousLesProduits(){
    global $db;
    try {
       $q = $db->prepare("SELECT p.id as id, p.nom as nom, image, seuil, description, 
                            reference, stock, prix_vente, prix_achat, c.nom as nomcategorie 
                        FROM produits p, categories c
                        WHERE p.idcategorie = c.id
                        ORDER BY p.id DESC");
       $q->execute();

       return $q->fetchAll();
    } catch(PDOException $e){
        echo "Erreur: ".$e->getMessage()." a la ligne ".__LINE__;
    }
}

function ajouterUnProduit($reference, $nom, $prix_achat, $prix_vente, $stock, $seuil, $description, $image, $idcategorie){
    global $db;
    try {
        $q = $db->prepare("INSERT INTO produits VALUES(NULL, :ref, :nom, :pa, :pv, :stock, :seuil, :description, :image, :idcategorie)");
        return $q->execute([
            "ref" => $reference,
            "nom" => $nom,
            "pa" => $prix_achat,
            "pv" => $prix_vente,
            "stock" => $stock,
            "seuil" => $seuil,
            "description" => $description,
            "image" => $image,
            "idcategorie" => $idcategorie
        ]);
    } catch(PDOException $e){
        echo "Erreur: ".$e->getMessage()." a la ligne ".__LINE__;
    }
}

function supprimerUneCategorie($id){
    global $db;
    try {
        $q = $db->prepare("DELETE FROM categories WHERE id=:id");
        return $q->execute(["id" => $id]);
    }catch(PDOException $e){
        echo "Erreur: ".$e->getMessage()." a la ligne ".__LINE__;
    }
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