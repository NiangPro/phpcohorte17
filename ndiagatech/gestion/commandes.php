<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commandes · Ndiaga Tech</title>
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
                    <li class="nav-item"><a class="nav-link" href="produits.php">Produits</a></li>
                    <li class="nav-item"><a class="nav-link active" href="commandes.php" aria-current="page">Commandes</a></li>
                </ul>
                <span class="navbar-text text-white">M. Ndiaga Mbaye, gérant · <a class="text-white" href="connexion.php">Se déconnecter</a></span>
            </div>
        </div>
    </nav>
    <main class="container py-4">
        <h1 class="h2 mb-3">Commandes à traiter</h1>
        <p>5 commandes en attente, 2 confirmées à livrer. Le stock baisse à la confirmation.</p>
        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle bg-white">
                <thead class="table-dark"><tr><th scope="col">N°</th><th scope="col">Date</th><th scope="col">Client</th><th scope="col">Quartier</th><th scope="col">Canal</th><th scope="col" class="text-end">Total (FCFA)</th><th scope="col">Statut</th><th scope="col">Actions</th></tr></thead>
                <tbody>
                    <tr><td>38</td><td>09/10 10:02</td><td>Mamadou Ndiaye</td><td>Guédiawaye</td><td>WhatsApp</td><td class="text-end">53 500</td><td><span class="badge text-bg-warning">En attente</span></td><td><button type="button" class="btn btn-sm btn-success">Confirmer</button> <button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#confirmation">Annuler</button></td></tr>
                    <tr><td>5</td><td>11/10 20:31</td><td>Pape Sow</td><td>Liberté 6</td><td>WhatsApp</td><td class="text-end">129 000</td><td><span class="badge text-bg-primary">Confirmée</span></td><td><button type="button" class="btn btn-sm btn-dark">Marquer livrée</button></td></tr>
                    <tr><td>21</td><td>12/10 10:47</td><td>Bineta Ndiaye</td><td>Ouakam</td><td>WhatsApp</td><td class="text-end">4 000</td><td><span class="badge text-bg-warning">En attente</span></td><td><button type="button" class="btn btn-sm btn-success">Confirmer</button> <button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#confirmation">Annuler</button></td></tr>
                    <tr><td>9</td><td>12/10 11:32</td><td>Rokhaya Faye</td><td>Guédiawaye</td><td>Site</td><td class="text-end">108 000</td><td><span class="badge text-bg-warning">En attente</span></td><td><button type="button" class="btn btn-sm btn-success">Confirmer</button> <button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#confirmation">Annuler</button></td></tr>
                    <tr><td>37</td><td>13/10 09:33</td><td>Rokhaya Faye</td><td>Guédiawaye</td><td>Site</td><td class="text-end">18 500</td><td><span class="badge text-bg-warning">En attente</span></td><td><button type="button" class="btn btn-sm btn-success">Confirmer</button> <button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#confirmation">Annuler</button></td></tr>
                    <tr><td>32</td><td>13/10 13:26</td><td>Rokhaya Diop</td><td>Parcelles Assainies</td><td>WhatsApp</td><td class="text-end">6 500</td><td><span class="badge text-bg-warning">En attente</span></td><td><button type="button" class="btn btn-sm btn-success">Confirmer</button> <button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#confirmation">Annuler</button></td></tr>
                    <tr><td>28</td><td>13/10 14:36</td><td>Mariama Cissé</td><td>Ouakam</td><td>Site</td><td class="text-end">6 500</td><td><span class="badge text-bg-primary">Confirmée</span></td><td><button type="button" class="btn btn-sm btn-dark">Marquer livrée</button></td></tr>
                </tbody>
            </table>
        </div>
        <div class="modal fade" id="confirmation" tabindex="-1" role="dialog" aria-labelledby="titre-confirmation" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title fs-5" id="titre-confirmation">Annuler cette commande ?</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                    </div>
                    <div class="modal-body">Le client sera prévenu par téléphone. Une commande confirmée puis annulée remet le stock.</div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                        <button type="button" class="btn btn-danger">Annuler la commande</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
