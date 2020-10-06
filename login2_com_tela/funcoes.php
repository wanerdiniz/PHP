<?php
 
function soma($NU1,$NUN2){ 
    echo $NU1+$NUN2;
}

function subt($NU3,$NUN4){ 
    echo $NU3-$NUN4;
}

function multi($NU6,$NUN7){ 
    echo $NU6*$NUN7;
}

function divi($NU9,$NUN5){

    if($NUN5 == 0) 
    {
        echo 'Não é possível realizar uma divisão por zero';
    }else{
        echo $NU9/$NUN5;
}
}

?>