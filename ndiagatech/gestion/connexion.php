<?php 

    session_start();
    $erreurs  = "";
    require_once("../database.php");
    if(isset($_POST["connecter"])){
        extract($_POST);

        $user = seconnecter($email);

        // $user = [
        //     "id" => 1,
        //     "prenom" => "fatou",
        //     "email" => "admin@admin.com",
        //     "mdp" => "rftyusioiuhsghjsklkjhgsgh",
        //     "role" => "admin"
        // ];


        if($user){
           if (password_verify($mdp, $user["mdp"])) {
            if($user["role"] == "admin"){
                 $_SESSION["user"]= $user;
                return header("Location:tableau-de-bord.php");
            }else{
                $erreur = "Acces refuse";
                return header("Location: ../index.php");
            }
           }else{
                $erreur = "mot de passe incorrect";
           }
        }else{
            $erreur= "Adresse e-mail ou mot de passe incorrect.";
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
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card shadow-sm">
                    <div class="card-body p-4">
                        <h1 class="h3 mb-1">Connexion</h1>
                        <p class="text-muted">Ndiaga Tech</p>
                        <?php if(!empty($erreur)): ?>
                        <div class="alert alert-danger" role="alert"><?= $erreur ?></div>
                        <?php endif; ?>
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="email" class="form-label">Adresse e-mail</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="mot_de_passe" class="form-label">Mot de passe</label>
                                <input type="password" class="form-control" id="mdp" name="mdp" required>
                            </div>
                            <button type="submit" name="connecter" class="btn btn-dark w-100">Se connecter</button>
                        </form>
                         <div class="d-flex justify-content-between">
                            <p class="text-center mt-3 mb-0"><a href="../index.php">Retour au site</a></p>
                        <p class="text-center mt-3 mb-0"><a href="inscription.php">Creer un compte</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
