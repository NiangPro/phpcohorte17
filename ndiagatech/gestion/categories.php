
<?php 

    session_start();

    require_once("../database.php");

    if (!isset($_SESSION["user"]) || $_SESSION["user"]["role"] !== "admin") {
        return header("Location: ../index.php");
    }

    $categories = recupererToutesLesCategories();


    require_once("../entete.php");
?>
        <div class="d-flex justify-content-between align-items-center mb-3"><h1 class="h2 mb-0">Categories</h1><a href="ajoutcategorie.php" class="btn btn-dark">Ajouter une categorie</a></div>
        <form class="row g-2 align-items-end mb-3" role="search">
            <div class="col-12 col-md-6">
                <label for="recherche" class="form-label">Rechercher</label>
                <input type="search" class="form-control" id="recherche" name="recherche">
            </div>
            <div class="col-12 col-md-4">
                <label for="categorie" class="form-label">Catégorie</label><select class="form-select" id="categorie" name="categorie">
                    <option>Toutes les catégories</option>
                    <option>Téléphones</option>
                </select>
            </div>
            <div class="col-12 col-md-2"><button type="submit" class="btn btn-outline-dark w-100">Filtrer</button></div>
        </form>
        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle bg-white">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Noms</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($categories as $c): ?>
                    <tr>
                        <td><?= ucfirst($c["nom"]) ?></td>
                        <td>
                            <a href="" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                            <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php require_once("../pied.php"); ?>