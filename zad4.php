<?php
// print strlen('ń').PHP_EOL;
// print mb_strlen('ń').PHP_EOL;
// print strrev('ń').PHP_EOL;
// print str_contains('stopień','ń').PHP_EOL;
// print trim(' asds  ').PHP_EOL;
// print ltrim( '  asdasd  ').PHP_EOL;
// print rtrim('    sdgfg  ').PHP_EOL;
// //print str_replace();
// print mb_strtoupper(' asdas');
//print_r($a)
//explode()

$text1 = "  Programuję dobrze ";
$text2 = "dobrze w PHP.";
print strlen($text1).PHP_EOL;
print strrev($text2).PHP_EOL;
print strlen($text1)>strlen($text2)?"text1":"text2".PHP_EOL;
print "\n";
print str_contains($text1,'Programuję').PHP_EOL;
print str_contains($text2,'dobrze').PHP_EOL;
$text1 = trim($text1);
$text2 = trim($text2);
$text3 = trim($text1).trim($text2);
$text3 = explode(' ',$text3);
print_r($text3);
print str_replace("dobrze","źle",$text1).PHP_EOL;

print mb_strtoupper($text1).PHP_EOL;
print ucfirst($text2).PHP_EOL;
print substr($text2, 9, 3);