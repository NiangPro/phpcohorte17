<?php

function direBonjour(){
    echo "Bonjour Tout le monde <br>";
}

function direBonjourA($prenom, $titre = "Mr"){
    echo "Bonjour $titre $prenom <br>";
}

function somme($a, $b){
    return $a+$b;
}

direBonjour();
// die("Arret du programme a la ligne".__LINE__);
direBonjourA("Moussa");
direBonjourA("Aissatou", "Mme");
direBonjourA("Penda", "Mme");
direBonjourA("Matar");

echo somme(4, 8);