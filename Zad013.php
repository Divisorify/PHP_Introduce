<?php
print date("l, j-m-y\n");

print date("Y-M-j H:i").PHP_EOL;

$roznicadni = (int) ((time()-mktime(0,0,0,3,12,2020))/86400);
print "Pomiędzy dniem dzisiejszym, a 12 marca 2020 roku minęło ".$roznicadni." dni\n";

$roznicagodz= (int) time()-(mktime(7,0,0,3,18,2022)/3600);
$roznicamin= (int) time()-(mktime(7,0,0,3,18,2022)/60);
print "Różnica pomiędzy aktualną godziną, a 7:00 dnia dzisiejszego to ".$roznicagodz." godzin i ".$roznicamin." minut.\n";

$dataakt = time();
$kwietnia = mktime(0,0,0,4,1,2022);
if($dataakt<$kwietnia){
    print "Aktualna data jest wcześniejsza.".PHP_EOL;
}else if($dataakt>$kwietnia){
    print "1 kwietnia 2022 jest datą wcześniejszą".PHP_EOL;
}else{
    print "Daty są równe.".PHP_EOL;
}