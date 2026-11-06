<?php 

define("LIVRAISON", 1500);

$reference = "N002";
$nom = "Smartphone Itel A70, 64 Go";
$categorie_id = 1;
$prix_achat = 42000;
$prix_vente = 54000;
$stock = 2;


switch($categorie_id){
    case 1: 
        $categorie = "Telephones";
        break;
    case 2: 
        $categorie = "Ecouteurs et audio";
        break;
    case 3:
        $categorie = "Chargeurs et cables";
        break;
    case 4: 
        $categorie = "Protection";
        break;
    case 5:
        $categorie = "Montres connectees";
        break;
    case 6:
        $categorie = "Accessoires divers";
        break;
    default: 
        $categorie = "Non categorise";
        break;
}

$seuil = $categorie_id == 1 ? 3 : 5;

$marge = $prix_vente - $prix_achat;

$disponibilite = $stock > 0 ? "disponible" : "sur commande";

if($stock == 0){
    $alert = "Rupture";
}else if($stock < $seuil){
    $alert = "Stock faible";
}else{
        $alert = "Aucune alerte";
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogue · Ndiaga Tech</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">Ndiaga Tech</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Ouvrir le menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link active" href="catalogue.php" aria-current="page">Catalogue</a></li>
                    <li class="nav-item"><a class="nav-link" href="panier.php">Panier</a></li>
                    <li class="nav-item"><a class="nav-link" href="gestion/connexion.php">Espace de gestion</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="container py-4">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title"><?= $nom ?></h1>
                <p class="text-secondary">Reference: <?= $reference ?>.<?= $categorie ?></p>

                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Prix de vente: <strong><?= $prix_vente ?></strong> FCFA. Marge: <?= $marge ?> FCFA</li>
                    <li class="list-group-item">Stock: <?= $stock ?>. Seuil de disponibilite: <?= $seuil ?></li>
                    <li class="list-group-item">Alerte: <span class="badge bg-warning"><?= $alert ?></span></li>
                </ul>
            </div>
        </div>
    </main>
    <footer class="bg-dark text-white py-4 mt-5">
        <div class="container small">
            <p class="mb-1">Ndiaga Tech · Marché Sandaga, Dakar</p>
            <p class="mb-1">Téléphone et WhatsApp : 77 000 00 50 · Ouvert du lundi au samedi, de 9 h à 20 h</p>
            <p class="mb-0">Projet pédagogique · structure fictive</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
