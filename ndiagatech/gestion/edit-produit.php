<?php 

    session_start();

    require_once("../database.php");

    if (!isset($_SESSION["user"]) || $_SESSION["user"]["role"] !== "admin") {
        return header("Location: ../index.php");
    }

    if (!isset($_GET["id"])) {
        return header("Location:produits.php");
    }

    $produit = recupererUnProduit($_GET["id"]);

    if(empty($produit)){
        return header("Location:produits.php");
    }

    if(isset($_POST["modifier"])){
        extract($_POST);


        if ($_FILES["image"]["size"] != 0) {
            $img = $_FILES["image"]["tmp_name"];
            $img_name = uniqid().".jpg";
            move_uploaded_file($img, "../images/".$img_name);
        }else{
            $img_name = $produit["image"];
        }

        if (modifierUnProduit($produit["id"], $reference, $nom, $prix_achat, $prix_vente, $stock, $seuil, $description, $img_name, $idcategorie)) {
            return header("Location: produits.php");
        }
    }

   
    $categories = recupererToutesLesCategories();

    require_once("../entete.php");

?>
<div class="container">
    <div class="card">
        <div class="card-header bg-dark text-white">
            <div class="row">
                <h1 class="h2 col-md-10">Formulaire d'edition Produit</h1>
                <div class="col-md-2 text-end">
                    <a href="produits.php" class="btn btn-warning">Retour</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form class="card card-body" action="" method="post" enctype="multipart/form-data">
                <div class="row g-3">
                    <div class="col-md-3"><label for="reference" class="form-label">Référence</label><input type="text" value="<?= $produit['reference'] ?>" class="form-control" id="reference" name="reference" required></div>
                    <div class="col-md-9"><label for="nom" class="form-label">Nom</label><input type="text" class="form-control" id="nom" value="<?= $produit['nom'] ?>" name="nom"  required></div>
                    <div class="col-md-6">
                        <label for="categorie" class="form-label">Catégorie</label>
                        <select class="form-select" id="categorie" name="idcategorie">
                            <option value="">Veuillez selectionner une categories</option>
                            <?php foreach($categories as $c): ?>
                            <option value="<?= $c['id'] ?>" <?= $produit["idcategorie"] == $c["id"] ? "selected" : "" ?> ><?= $c["nom"] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                        <div class="col-6 col-md-3"><label for="prix_achat" class="form-label">Prix d'achat (FCFA)</label><input type="number" class="form-control" id="prix_achat" value="<?= $produit['prix_achat'] ?>" name="prix_achat" required></div>
                        <div class="col-6 col-md-3"><label for="prix_vente" class="form-label">Prix de vente (FCFA)</label><input type="number" class="form-control is-invalid" id="prix_vente" name="prix_vente" value="<?= $produit['prix_vente'] ?>"  required><div class="invalid-feedback">Le prix de vente doit être supérieur au prix d'achat.</div></div>
                        <div class="col-6 col-md-3"><label for="stock" class="form-label">Stock</label><input type="number" class="form-control" value="<?= $produit['stock'] ?>" id="stock" name="stock" required></div>
                        <div class="col-md-3"><label for="seuil" class="form-label">Seuil d'alerte</label><input type="number" class="form-control" id="seuil" value="<?= $produit['seuil'] ?>" name="seuil"  required></div>
                        <div class="col-md-6">
                            <label for="">Image</label>
                            <input type="file" name="image"  class="form-control">
                        </div>
                    <div class="col-12"><label for="description" class="form-label">Description</label><textarea class="form-control" id="description" name="description" rows="3"><?= nl2br($produit["description"])  ?></textarea></div>
                </div>
                <div class="mt-4"><button type="submit" class="btn btn-dark" name="modifier">Modifier</button> <a href="produits.php" class="btn btn-outline-secondary">Annuler</a></div>
            </form>
        </div>
    </div>
</div>
        
 <?php require_once("../pied.php"); ?>