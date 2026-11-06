<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un produit · Ndiaga Tech</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold" href="tableau-de-bord.php">Ndiaga Tech · Gestion</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Ouvrir le menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item"><a class="nav-link" href="tableau-de-bord.php">Tableau de bord</a></li>
                    <li class="nav-item"><a class="nav-link active" href="produits.php" aria-current="page">Produits</a></li>
                    <li class="nav-item"><a class="nav-link" href="commandes.php">Commandes</a></li>
                </ul>
                <span class="navbar-text text-white">M. Ndiaga Mbaye, gérant · <a class="text-white" href="connexion.php">Se déconnecter</a></span>
            </div>
        </div>
    </nav>
    <main class="container py-4">
        <h1 class="h2 mb-3">Modifier le produit N002</h1>
        <form class="card card-body" action="produits.php" method="post">
            <div class="row g-3">
                    <div class="col-md-3"><label for="reference" class="form-label">Référence</label><input type="text" class="form-control" id="reference" name="reference" value="N002" required></div>
                    <div class="col-md-9"><label for="nom" class="form-label">Nom</label><input type="text" class="form-control" id="nom" name="nom" value="Smartphone Itel A70, 64 Go" required></div>
                    <div class="col-md-6"><label for="categorie" class="form-label">Catégorie</label><select class="form-select" id="categorie" name="categorie"><option selected>Téléphones</option><option>Écouteurs et audio</option><option>Chargeurs et câbles</option><option>Protection</option><option>Montres connectées</option><option>Accessoires divers</option></select></div>
                    <div class="col-6 col-md-3"><label for="prix_achat" class="form-label">Prix d'achat (FCFA)</label><input type="number" class="form-control" id="prix_achat" name="prix_achat" value="42000" required></div>
                    <div class="col-6 col-md-3"><label for="prix_vente" class="form-label">Prix de vente (FCFA)</label><input type="number" class="form-control is-invalid" id="prix_vente" name="prix_vente" value="40000" required><div class="invalid-feedback">Le prix de vente doit être supérieur au prix d'achat.</div></div>
                    <div class="col-6 col-md-3"><label for="stock" class="form-label">Stock</label><input type="number" class="form-control" id="stock" name="stock" value="2" required></div>
                    <div class="col-6 col-md-3"><label for="seuil" class="form-label">Seuil d'alerte</label><input type="number" class="form-control" id="seuil" name="seuil" value="3" required></div>
                <div class="col-12"><label for="description" class="form-label">Description</label><textarea class="form-control" id="description" name="description" rows="3">Écran 6,6 pouces, double SIM, 64 Go.</textarea></div>
            </div>
            <div class="mt-4"><button type="submit" class="btn btn-dark">Enregistrer</button> <a href="produits.php" class="btn btn-outline-secondary">Annuler</a></div>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
