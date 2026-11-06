<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord · Ndiaga Tech</title>
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
                    <li class="nav-item"><a class="nav-link active" href="tableau-de-bord.php" aria-current="page">Tableau de bord</a></li>
                    <li class="nav-item"><a class="nav-link" href="produits.php">Produits</a></li>
                    <li class="nav-item"><a class="nav-link" href="commandes.php">Commandes</a></li>
                </ul>
                <span class="navbar-text text-white">M. Ndiaga Mbaye, gérant · <a class="text-white" href="connexion.php">Se déconnecter</a></span>
            </div>
        </div>
    </nav>
    <main class="container py-4">
        <h1 class="h2 mb-4">Tableau de bord</h1>
        <div class="row g-3 mb-4">
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card h-100 border-warning">
                    <div class="card-body">
                        <p class="text-muted mb-1">Commandes en attente</p>
                        <p class="fs-3 fw-bold mb-0 text-warning">5</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card h-100">
                    <div class="card-body">
                        <p class="text-muted mb-1">Commandes à livrer</p>
                        <p class="fs-3 fw-bold mb-0">2</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card h-100">
                    <div class="card-body">
                        <p class="text-muted mb-1">Ventes livrées (produits)</p>
                        <p class="fs-3 fw-bold mb-0">2 250 500 FCFA</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card h-100 border-danger">
                    <div class="card-body">
                        <p class="text-muted mb-1">Produits en alerte</p>
                        <p class="fs-3 fw-bold mb-0 text-danger">5</p>
                    </div>
                </div>
            </div>
        </div>
        <h2 class="h5">Stock à surveiller</h2>
        <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">N002 · Smartphone Itel A70, 64 Go <span class="badge text-bg-warning">Stock faible (2)</span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center">N004 · Smartphone Samsung Galaxy A15, 128 Go <span class="badge text-bg-danger">Rupture (0)</span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center">N015 · Écouteurs sans fil à réduction de bruit <span class="badge text-bg-warning">Stock faible (3)</span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center">N020 · Batterie externe 10 000 mAh <span class="badge text-bg-danger">Rupture (0)</span></li>
            <li class="list-group-item d-flex justify-content-between align-items-center">N031 · Bracelet connecté <span class="badge text-bg-warning">Stock faible (4)</span></li>
        </ul>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
