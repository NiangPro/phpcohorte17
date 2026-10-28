<?php 

echo "<pre>";
$var = "Bouba";

// pour supprimer une variable
unset($var);

$entier = "34";
// pour modifier le type 
settype($entier, "Integer");

// pour avoir le type 
echo gettype($entier);
// pour savoir l'etat actuel de la variable 
var_dump($entier);


// pour tester l'existence d'une variable 
if(isset($var)){

    echo $var;
}else{
    echo "<br>La variable n'existe plus<br>";
}

// declaration d'un tableau 
$tab = ["madou", 45, true, 9.4];
$entiers = array(56, -5, 102, -123, 45);

echo "<br> Le nombre d'elements est de : ".count($entiers);
echo "<br> Le premier element est : ".$tab[0];
echo "<br> Le dernier element est : ".$entiers[count($entiers) - 1]."<br>";

// ajouter en premiere position 
array_unshift($tab, "Fatou");

// ajouter en derniere position 
array_push($tab, "Cheikh");
$tab[] = "Aissatou";

// supprimer le premier element 
array_shift($tab);

// supprimer le dernier element 
array_pop($tab);

array_splice($tab, 1, 0, "Mouhamed");

array_splice($tab, 3, 1, 100);

array_splice($tab, 4, 1);

$tab = array_reverse($tab);

print_r($tab);

rsort($entiers);
sort($entiers);

// affichage 
for($i = 0; $i < count($tab); $i++){
    echo $tab[$i]." - ";
}

foreach($entiers as $v){
    if($v < 0){
        echo "$v - ";
    }
}

print_r($entiers);




echo "</pre>";
