
<?php 

    session_start();

    require_once("../database.php");

    if (!isset($_SESSION["user"]) || $_SESSION["user"]["role"] !== "admin") {
        return header("Location: ../index.php");
    }


    if(isset($_GET["id"])){
        if(supprimerUneCategorie($_GET["id"])){
            return header("Location: categories.php");
        }
    }

    if (isset($_POST["rechercher"])) {
        extract($_POST);
        $old_name = $nom;
        $categories = rechercherDesCategories($nom);
        
    }else{

        $categories = recupererToutesLesCategories();
    }



    require_once("../entete.php");
?>
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1 class="h2 mb-0">Categories ( <?= count($categories) ?>)</h1>
            <a href="ajoutcategorie.php" class="btn btn-dark">Ajouter une categorie</a></div>
        <form class="row g-2 align-items-end mb-3" method="post" action="" role="search">
            <div class="col-12 col-md-8">
                <label for="recherche" class="form-label">Rechercher</label>
                <input type="search" class="form-control" value="<?= isset($old_name)?$old_name: '' ?>" id="recherche" required name="nom">
            </div>
            
            <div class="col-12 col-md-4">
                <button type="submit" name="rechercher" class="btn btn-outline-dark">Filtrer</button>
                <a href="" class="btn btn-warning">Reinitialiser</a>
            </div>
        </form>
        <div class="table-responsive">
            <?php if(!empty($categories)): ?>
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
                            <a href="edit-categorie.php?id=<?= $c['id'] ?>" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                            <a href="" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $c['id'] ?>"><i class="fa fa-trash"></i></a>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal<?= $c['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Suppression</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Êtes-vous sûr de vouloir supprimer ?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Non</button>
                                    <a href="?id=<?= $c['id'] ?>" type="button" class="btn btn-success">Oui</a>
                                </div>
                                </div>
                            </div>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?php else: ?>
                <div
                    class="alert alert-primary alert-dismissible fade show"
                    role="alert"
                >
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="alert"
                        aria-label="Close"
                    ></button>
                
                    Aucune categorie disponible pour le moment.
                </div>
            <?php endif; ?>
                
        </div>
    <?php require_once("../pied.php"); ?>