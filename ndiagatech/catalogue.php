<?php 
$title = "catalogue";

require_once("database.php");

$produits = recupererTousLesProduits();
include_once("entete.php"); 
?>
        <h1 class="mb-3">Nos produits</h1>
        <form class="row g-2 align-items-end mb-3" role="search">
                    <div class="col-12 col-md-4"><label for="categorie" class="form-label">Catégorie</label><select class="form-select" id="categorie" name="categorie"><option selected>Téléphones</option><option>Écouteurs et audio</option><option>Chargeurs et câbles</option><option>Protection</option><option>Montres connectées</option><option>Accessoires divers</option></select></div>
            <div class="col-6 col-md-3"><label for="prix_min" class="form-label">Prix minimum</label><input type="number" class="form-control" id="prix_min" name="prix_min" min="0"></div>
            <div class="col-6 col-md-3"><label for="prix_max" class="form-label">Prix maximum</label><input type="number" class="form-control" id="prix_max" name="prix_max" min="0"></div>
            <div class="col-12 col-md-2"><button type="submit" class="btn btn-outline-dark w-100">Filtrer</button></div>
        </form>
        <div class="row g-4">
            <?php foreach($produits as $p): ?>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="card" >
                    <img src="images/<?= $p['image'] ?>" height="250" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= ucfirst($p["nom"]) ?></h5>
                        <p class="card-text"><?= substr($p["description"], 0, 30) ?>...</p>
                        <div class="d-flex justify-content-between">

                            <a href="#" class="btn btn-dark btn-sm">Ajouter au panier</a>
                            <a href="#" class="btn btn-outline-success btn-sm">Commander sur whatsapp</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            
        </div>
   <?php require_once("pied.php"); ?>
