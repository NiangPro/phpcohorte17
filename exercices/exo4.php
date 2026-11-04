<?php 

$tab = [34, -45, 3, 7,13, 54, 2,10,-3];

foreach($tab as $v){
    if($v >0 && $v % 2 != 0){
        echo "$v -";
    }
}