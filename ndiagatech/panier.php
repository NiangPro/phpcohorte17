<?php
$title = "panier";
 require_once("entete.php"); 
 ?>
        <h1 class="mb-3">Votre panier</h1>
        <div class="row g-4">
            <div class="col-lg-7">
                <table class="table bg-white">
                    <thead class="table-dark"><tr><th scope="col">Produit</th><th scope="col" class="text-end">Prix</th><th scope="col" class="text-end">Quantité</th><th scope="col" class="text-end">Total (FCFA)</th></tr></thead>
                    <tbody>
                        <tr><td>Smartphone Tecno Spark 20, 128 Go</td><td class="text-end">85 000</td><td class="text-end">1</td><td class="text-end">85 000</td></tr>
                        <tr><td>Verre trempé universel 6,5 pouces</td><td class="text-end">1 500</td><td class="text-end">2</td><td class="text-end">3 000</td></tr>
                        <tr><td>Livraison dans Dakar</td><td></td><td></td><td class="text-end">1 500</td></tr>
                    </tbody>
                    <tfoot><tr><th scope="row" colspan="3" class="text-end">Total à payer à la livraison</th><th class="text-end">89 500</th></tr></tfoot>
                </table>
            </div>
            <div class="col-lg-5">
                <form class="card card-body" action="panier.php" method="post">
                    <h2 class="h5">Passer la commande</h2>
                    <div class="row g-3">
                    <div class="col-12"><label for="nom" class="form-label">Nom</label><input type="text" class="form-control" id="nom" name="nom" required></div>
                    <div class="col-12"><label for="telephone" class="form-label">Téléphone</label><input type="tel" class="form-control" id="telephone" name="telephone" required></div>
                    <div class="col-12"><label for="quartier" class="form-label">Quartier</label><input type="text" class="form-control" id="quartier" name="quartier" required></div>
                    <div class="col-12"><label for="adresse" class="form-label">Adresse de livraison</label><input type="text" class="form-control" id="adresse" name="adresse" required></div>
                    </div>
                    <div class="mt-3"><button type="submit" class="btn btn-dark w-100">Confirmer la commande</button></div>
                </form>
            </div>
        </div>
    <?php require_once("pied.php"); ?>