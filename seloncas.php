<?php 
$choix = 3;
echo " 
    ******* MENU DU JOUR *********** <br>
    1- THiebou Djeun <br>
    2- Yassa <br>
    3- Maffee <br>
    4- Kaldou <br>
    Faites votre choix: $choix <br>

";

switch($choix){
    case 1: 
        echo "<mark>Vous avez choisi Thiebou Djeun</mark>";
        break;
    case 2: 
        echo "<mark>Vous avez choisi Yassa</mark>";
        break;
    default: 
        echo "Plat indisponible";
        break;
}