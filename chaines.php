<?php 

$chaine = "  Ma chaine de caracteres  ";

$chaine = trim($chaine);

echo $chaine."<br>";

echo "Le nombre de caracteres est de : ".mb_strlen($chaine);

echo "<br>Le premier caractere est : ".$chaine[0];
echo "<br>Le dernier caractere est : ".$chaine[strlen($chaine) - 1];
echo "<br>".str_replace("M", "L", $chaine);

echo "<br> La chaine extraite est ".substr($chaine, 13, 4);

echo "<br>".strtoupper($chaine);
echo "<br>".ucfirst($chaine);
echo "<br>".ucwords($chaine);
echo "<br> Le nombre de mots: ".str_word_count($chaine);

$tel = "7657575757a";

if (ctype_digit($tel)) {
    echo "<br> oui, c'est le cas";
}else{
    echo "<br> Non";
}

if(str_starts_with($tel, "77")){
    echo "<br> Votre operateur est Orange";
}else{
    echo "<br> Operateur inconnu";
}

echo "<br>".strrev($chaine);

$ch = str_shuffle($chaine);

echo "<br>". $ch;