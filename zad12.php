<?php
function division(int $x, float $y):float{
    if($y == 0){
        throw new Exception("Nie wolno dzielić przez 0!\n");
    }
    if(is_int($x) === false || is_int($y) === false){
        throw new Exception("Podane liczby muszą być liczbami całkowitymi! \n");
    }
    $result = $x/$y;
    return $result;
}

$c = 10;
$d = 1.23;

try{
    print division($c,$d);
}catch(\Exception $e){
    echo $e->getMessage();
}
