<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($title) ? ucfirst($title): "Accueil" ?>  · Ndiaga Tech</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css">
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
                    <?php if(isset($_SESSION["user"]) && $_SESSION["user"]["role"] == "admin"): ?>
                         <li class="nav-item"><a class="nav-link active" href="tableau-de-bord.php" aria-current="page">Tableau de bord</a></li>
                        <li class="nav-item"><a class="nav-link" href="categories.php">Categories</a></li>
                        <li class="nav-item"><a class="nav-link" href="produits.php">Produits</a></li>
                        <li class="nav-item"><a class="nav-link" href="commandes.php">Commandes</a></li>
                        <li class="nav-item dropdown">
                        <a
                            class="nav-link dropdown-toggle"
                            href="#"
                            id="dropdownId"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                            ><?= ucfirst($_SESSION["user"]["prenom"]) ?></a
                        >
                        <div
                            class="dropdown-menu"
                            aria-labelledby="dropdownId"
                        >
                            <a class="dropdown-item" href="#"
                                >Profil</a
                            >
                            <a class="dropdown-item" href="deconnexion.php"
                                >Deconnexion</a
                            >
                        </div>
                    </li>
                    <?php else: ?>
                        <li class="nav-item"><a class="nav-link <?= isset($title) && $title=="accueil" ? 'active' : '' ?>" href="index.php" aria-current="page">Accueil</a></li>
                        <li class="nav-item"><a class="nav-link  <?= isset($title) && $title=="catalogue" ? 'active' : '' ?>" href="catalogue.php">Catalogue</a></li>
                        <li class="nav-item"><a class="nav-link  <?= isset($title) && $title=="panier" ? 'active' : '' ?>" href="panier.php">Panier</a></li>
                        <?php if(isset($_SESSION["user"])): ?>
                            <li class="nav-item dropdown">
                                <a
                                    class="nav-link dropdown-toggle"
                                    href="#"
                                    id="dropdownId"
                                    data-bs-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false"
                                    ><?= ucfirst($_SESSION["user"]["prenom"]) ?></a
                                >
                                <div
                                    class="dropdown-menu"
                                    aria-labelledby="dropdownId"
                                >
                                    <a class="dropdown-item" href="#"
                                        >Profil</a
                                    >
                                    <a class="dropdown-item" href="gestion/deconnexion.php"
                                        >Deconnexion</a
                                    >
                                </div>
                            </li>
    
                        <?php else: ?>
                        <li class="nav-item"><a class="nav-link <?= isset($title) && $title=="gestion" ? 'active' : '' ?>" href="gestion/connexion.php">Connexion</a></li>
                        <li class="nav-item">
                            <a class="nav-link <?= isset($title) && $title=="inscription" ? 'active' : '' ?>" href="gestion/inscription.php">Inscription</a>
                        </li>
                        <?php endif; ?>
                    <?php endif; ?> 
                </ul>
            </div>
        </div>
    </nav>
    <main class="container py-4">

    