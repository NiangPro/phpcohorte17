<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($title) ? ucfirst($title): "Accueil" ?>  · Ndiaga Tech</title>
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
                    <li class="nav-item"><a class="nav-link <?= isset($title) && $title=="accueil" ? 'active' : '' ?>" href="index.php" aria-current="page">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link  <?= isset($title) && $title=="catalogue" ? 'active' : '' ?>" href="catalogue.php">Catalogue</a></li>
                    <li class="nav-item"><a class="nav-link  <?= isset($title) && $title=="panier" ? 'active' : '' ?>" href="panier.php">Panier</a></li>
                    <li class="nav-item"><a class="nav-link <?= isset($title) && $title=="gestion" ? 'active' : '' ?>" href="gestion/connexion.php">Espace de gestion</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="container py-4">