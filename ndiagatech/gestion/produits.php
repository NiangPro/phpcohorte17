<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produits · Ndiaga Tech</title>
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
        <div class="d-flex justify-content-between align-items-center mb-3"><h1 class="h2 mb-0">Produits</h1><a href="produit-form.php" class="btn btn-dark">Ajouter un produit</a></div>
        <form class="row g-2 align-items-end mb-3" role="search">
            <div class="col-12 col-md-6"><label for="recherche" class="form-label">Rechercher</label><input type="search" class="form-control" id="recherche" name="recherche"></div>
                    <div class="col-12 col-md-4"><label for="categorie" class="form-label">Catégorie</label><select class="form-select" id="categorie" name="categorie"><option>Toutes les catégories</option><option>Téléphones</option><option>Écouteurs et audio</option><option>Chargeurs et câbles</option><option>Protection</option><option>Montres connectées</option><option>Accessoires divers</option></select></div>
            <div class="col-12 col-md-2"><button type="submit" class="btn btn-outline-dark w-100">Filtrer</button></div>
        </form>
        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle bg-white">
                <thead class="table-dark"><tr><th scope="col">Réf.</th><th scope="col">Produit</th><th scope="col">Catégorie</th><th scope="col" class="text-end">Prix (FCFA)</th><th scope="col" class="text-end">Stock</th><th scope="col">Alerte</th><th scope="col">Actions</th></tr></thead>
                <tbody>
                    <tr><td>N001</td><td>Smartphone Tecno Spark 20, 128 Go</td><td>Téléphones</td><td class="text-end">85 000</td><td class="text-end">17</td><td></td><td><a href="produit-form.php" class="btn btn-sm btn-outline-secondary">Modifier</a></td></tr>
                    <tr><td>N002</td><td>Smartphone Itel A70, 64 Go</td><td>Téléphones</td><td class="text-end">52 000</td><td class="text-end">2</td><td><span class="badge text-bg-warning">Stock faible</span></td><td><a href="produit-form.php" class="btn btn-sm btn-outline-secondary">Modifier</a></td></tr>
                    <tr><td>N003</td><td>Smartphone Infinix Hot 40i, 128 Go</td><td>Téléphones</td><td class="text-end">92 000</td><td class="text-end">21</td><td></td><td><a href="produit-form.php" class="btn btn-sm btn-outline-secondary">Modifier</a></td></tr>
                    <tr><td>N004</td><td>Smartphone Samsung Galaxy A15, 128 Go</td><td>Téléphones</td><td class="text-end">115 000</td><td class="text-end">0</td><td><span class="badge text-bg-danger">Rupture</span></td><td><a href="produit-form.php" class="btn btn-sm btn-outline-secondary">Modifier</a></td></tr>
                    <tr><td>N005</td><td>Smartphone Redmi 13C, 128 Go</td><td>Téléphones</td><td class="text-end">95 000</td><td class="text-end">19</td><td></td><td><a href="produit-form.php" class="btn btn-sm btn-outline-secondary">Modifier</a></td></tr>
                    <tr><td>N006</td><td>Smartphone Samsung Galaxy A25, 128 Go</td><td>Téléphones</td><td class="text-end">168 000</td><td class="text-end">13</td><td></td><td><a href="produit-form.php" class="btn btn-sm btn-outline-secondary">Modifier</a></td></tr>
                    <tr><td>N007</td><td>iPhone 13, 128 Go (reconditionné)</td><td>Téléphones</td><td class="text-end">330 000</td><td class="text-end">3</td><td></td><td><a href="produit-form.php" class="btn btn-sm btn-outline-secondary">Modifier</a></td></tr>
                    <tr><td>N008</td><td>Téléphone à touches Itel it2163</td><td>Téléphones</td><td class="text-end">9 500</td><td class="text-end">6</td><td></td><td><a href="produit-form.php" class="btn btn-sm btn-outline-secondary">Modifier</a></td></tr>
                    <tr><td>N009</td><td>Smartphone Tecno Camon 30, 256 Go</td><td>Téléphones</td><td class="text-end">175 000</td><td class="text-end">19</td><td></td><td><a href="produit-form.php" class="btn btn-sm btn-outline-secondary">Modifier</a></td></tr>
                    <tr><td>N010</td><td>Smartphone Infinix Note 40, 256 Go</td><td>Téléphones</td><td class="text-end">158 000</td><td class="text-end">27</td><td></td><td><a href="produit-form.php" class="btn btn-sm btn-outline-secondary">Modifier</a></td></tr>
                    <tr><td>N011</td><td>Écouteurs filaires jack 3,5 mm</td><td>Écouteurs et audio</td><td class="text-end">2 500</td><td class="text-end">30</td><td></td><td><a href="produit-form.php" class="btn btn-sm btn-outline-secondary">Modifier</a></td></tr>
                    <tr><td>N012</td><td>Écouteurs sans fil Bluetooth</td><td>Écouteurs et audio</td><td class="text-end">10 000</td><td class="text-end">16</td><td></td><td><a href="produit-form.php" class="btn btn-sm btn-outline-secondary">Modifier</a></td></tr>
                    <tr><td>N013</td><td>Casque Bluetooth pliable</td><td>Écouteurs et audio</td><td class="text-end">15 000</td><td class="text-end">15</td><td></td><td><a href="produit-form.php" class="btn btn-sm btn-outline-secondary">Modifier</a></td></tr>
                    <tr><td>N014</td><td>Enceinte Bluetooth portable</td><td>Écouteurs et audio</td><td class="text-end">18 000</td><td class="text-end">28</td><td></td><td><a href="produit-form.php" class="btn btn-sm btn-outline-secondary">Modifier</a></td></tr>
                    <tr><td>N015</td><td>Écouteurs sans fil à réduction de bruit</td><td>Écouteurs et audio</td><td class="text-end">27 000</td><td class="text-end">3</td><td><span class="badge text-bg-warning">Stock faible</span></td><td><a href="produit-form.php" class="btn btn-sm btn-outline-secondary">Modifier</a></td></tr>
                    <tr><td>N016</td><td>Kit mains libres voiture</td><td>Écouteurs et audio</td><td class="text-end">7 000</td><td class="text-end">8</td><td></td><td><a href="produit-form.php" class="btn btn-sm btn-outline-secondary">Modifier</a></td></tr>
                </tbody>
            </table>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
