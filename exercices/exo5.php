<?php 
$tel = "769953889";
$ops = ["70", "71", "75", "76", "77", "78", "33", "88"];
// tester si le nombre comporte uniquement des chiffres 
if(ctype_digit($tel)){

    // tester la taille
    if (strlen($tel) == 9) {
        // indicateurs
        // if (str_starts_with($tel, "70") || str_starts_with($tel, "71")) {
        //     # code...
        // } 
        if (in_array(substr($tel, 0, 2), $ops)) {
            echo "$tel est valide";
        }else{
            echo "Le numero doit commencer par 70, 71, 75, 76, 77, 78, 33 ou 88";
        }
    }else{
        echo "Le numero doit avoir 9 chiffres";
    }
    
}else{
    echo "Le numero doit comporter uniquement des chiffres";
}


$mot = "matam";

if($mot == strrev($mot)){
    echo "<br> $mot est palindrome";
}else{
    echo "<br> $mot n'est pas palindrome";
}