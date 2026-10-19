<?php 
define("PRIX_BASE", 100);

$nom = "Paracetamole 500mg";
$prix = 200;
$qte = 0.23;
$disponible = true;

echo "Nom: ". $nom;

echo "<br>Nom: $nom Quantite = $qte mg";
$nom = "Fatou";
echo '<br>Nom:'. $nom;

echo "<br>Prix de base: ".PRIX_BASE." f cfa";