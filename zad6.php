<?php
function ctf (float $c=null):float|null{
    if($c == null){
       echo "Nie podano wartości";
       return null;
    }
    $F = ($c * 9/5)+32;
    return $F;
};

print ctf();