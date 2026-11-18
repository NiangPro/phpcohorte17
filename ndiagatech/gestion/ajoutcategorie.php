<?php 
    session_start();
    require_once("../database.php");


    if (isset($_POST["ajouter"])) {
        extract($_POST);

        if(ajouterUneCategorie($nom)){
            return header("Location: categories.php");
        }
    }

    require_once("../entete.php");


?>


<div class="container col-md-8 mt-5">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <h3 class="col-md-10">Formulaire d'ajout categorie</h3>
                <div class="col-md-2 text-end">
                    <a href="categories.php" class="btn btn-primary">Retour</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="" method="post">
                <div>
                    <label for="">Nom</label>
                    <input type="text" name="nom" required class="form-control">
                </div>
                <button type="submit" name="ajouter" class="btn btn-success mt-3">Ajouter</button>
            </form>
        </div>
    </div>
</div>
    
<?php require_once("../pied.php"); ?>