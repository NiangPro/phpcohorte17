
<?php 

    session_start();

    require_once("../database.php");

    if (!isset($_SESSION["user"]) || $_SESSION["user"]["role"] !== "admin") {
        return header("Location: ../index.php");
    }

    $produits = recupererTousLesProduits();
    require_once("../entete.php");
?>
        <div class="d-flex justify-content-between align-items-center mb-3"><h1 class="h2 mb-0">Produits</h1><a href="produit-form.php" class="btn btn-dark">Ajouter un produit</a></div>
        <form class="row g-2 align-items-end mb-3" role="search">
            <div class="col-12 col-md-6"><label for="recherche" class="form-label">Rechercher</label><input type="search" class="form-control" id="recherche" name="recherche"></div>
                    <div class="col-12 col-md-4"><label for="categorie" class="form-label">Catégorie</label><select class="form-select" id="categorie" name="categorie"><option>Toutes les catégories</option><option>Téléphones</option><option>Écouteurs et audio</option><option>Chargeurs et câbles</option><option>Protection</option><option>Montres connectées</option><option>Accessoires divers</option></select></div>
            <div class="col-12 col-md-2"><button type="submit" class="btn btn-outline-dark w-100">Filtrer</button></div>
        </form>
        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle bg-white">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Réf.</th>
                        <th scope="col">Produit</th>
                        <th scope="col">Catégorie</th>
                        <th scope="col" class="text-end">Prix (FCFA)</th>
                        <th scope="col" class="text-end">Stock</th>
                        <th scope="col">Alerte</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($produits as $p): ?>
                    <tr>
                        <td>
                            <img src="../images/<?= $p['image'] ?>" width="100" height="50" alt="">
                        </td>
                        <td><?= $p["reference"] ?></td>
                        <td><?= $p["nom"] ?></td>
                        <td><?= $p["nomcategorie"] ?></td>
                        <td class="text-end"><?= number_format($p["prix_achat"], 0, ",", " ") ?></td>
                        <td class="text-end"><?= $p["stock"] ?></td>
                        <td><?= $p["seuil"] ?></td>
                        <td>
                            <a href="edit-produit.php?id=<?= $p['id'] ?>" class="btn btn-sm btn-outline-secondary"><i class="fa fa-edit"></i></a>
                            <a href="produit-form.php" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
