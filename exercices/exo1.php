<?php 

$a = 0;
$b = 2;

echo "
    Avant echange <br>
    a = $a et b=$b
";

$x = $a;
$a = $b;
$b = $x;

echo "
    <br>Apres echange <br>
    a = $a et b=$b
";