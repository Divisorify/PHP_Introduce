<?php
 $a = 4;
// $B = 10;
 $c = 4.0;
 $d = 5.667;

// define('a',4);
define('B',10);
// define('c',4.0);
// define('d',5.667);

print $a+B.PHP_EOL;
print $a/B.PHP_EOL;
print pow($a,B).PHP_EOL;
print B%$a.PHP_EOL;
print B==$a?true:"false".PHP_EOL;
print $a>B?true:"false".PHP_EOL;
print $a==B?true:"false".PHP_EOL;
print $a==$c?"true":"false".PHP_EOL;
print $a===$c?"true":"false".PHP_EOL;
print round($d,0).PHP_EOL;
print round($d,2).PHP_EOL;