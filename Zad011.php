<?php
for($i = 0;$i <=100; $i=$i+5){
    if($i%7==0){
        continue;
    }
    print $i.PHP_EOL;
    $n = $n +$i;
}

print "Suma wynosi ".$n;