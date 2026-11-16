<?php 

require_once("../database.php");

    if(isset($_POST["inscrire"])){
        extract($_POST);

        if ($mdp == $mdp_confirm) {
            $mdp = password_hash($mdp, PASSWORD_DEFAULT, ["cost" => 12]);
            if (ajouterUnUtilisateur($prenom, $nom, $email, $telephone, $quartier, $mdp, "client")) {
                header("Location: connexion.php");
            }
        }else{
            echo "Les deux mots de passes ne concordent pas";
        }
    }


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion · Ndiaga Tech</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body class="bg-light">
    <main class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card shadow-sm">
                    <div class="card-body p-4">
                        <h1 class="h3 mb-1 text-center">Creation de compte</h1>
                        <form action="" method="post">
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label  class="form-label">Prenom</label>
                                    <input type="text" class="form-control" name="prenom" required>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label  class="form-label">Nom</label>
                                    <input type="text" class="form-control" name="nom" required>
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label for="email" class="form-label">Adresse e-mail</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                 <div class="mb-3 col-md-6">
                                    <label  class="form-label">Telephone</label>
                                    <input type="text" class="form-control" name="telephone" required>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label  class="form-label">Adresse</label>
                                    <input type="text" class="form-control" name="quartier" required>
                                </div>
                                 <div class="mb-3">
                                    <label for="mot_de_passe" class="form-label">Mot de passe</label>
                                    <input type="password" class="form-control" id="mot_de_passe" name="mdp" required>
                                </div>
                                 <div class="mb-3">
                                    <label for="mdp" class="form-label">Mot de passe</label>
                                    <input type="password" class="form-control" id="mdp" name="mdp_confirm" required>
                                </div>
                            </div>
                            
                            <button type="submit" class="btn btn-dark w-100" name="inscrire">S'inscrire</button>
                        </form>
                        <div class="d-flex justify-content-between">
                            <p class="text-center mt-3 mb-0"><a href="../index.php">Retour au site</a></p>
                            <p class="text-center mt-3 mb-0"><a href="connexion.php">Connexion</a></p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
