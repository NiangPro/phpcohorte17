<?php 
    session_start();
    require_once("../database.php");

    if(!isset($_SESSION["user"]) || $_SESSION["user"]["role"] != "admin"){
        return header("Location: ../index.php");
    }

    if(!isset($_GET["id"])){
        return header("Location: categories.php");
    }


    if (isset($_POST["modifier"])) {
        extract($_POST);

        if(modifierUneCategorie($_GET['id'], $nom)){
            return header("Location: categories.php");
        }
    }

    $c = recupererUneCategorie($_GET["id"]);

    require_once("../entete.php");


?>


<div class="container col-md-8 mt-5">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <h3 class="col-md-10">Formulaire d'edition categorie</h3>
                <div class="col-md-2 text-end">
                    <a href="categories.php" class="btn btn-primary">Retour</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="" method="post">
                <div>
                    <label for="">Nom</label>
                    <input type="text" name="nom" required value="<?= $c['nom'] ?>" class="form-control">
                </div>
                <button type="submit" name="modifier" class="btn btn-warning mt-3">Modifier</button>
            </form>
        </div>
    </div>
</div>
    
<?php require_once("../pied.php"); ?>