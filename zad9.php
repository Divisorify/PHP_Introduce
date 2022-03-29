<?php

$owoce = ["banana","apple","strawberry","grape","orange","watermelon","blueberry"];

print "Tablica ma ".count($owoce)." elementów. ".PHP_EOL;
print_r($owoce);
array_push($owoce,"cytryna");
print_r($owoce);
array_pop($owoce);
print_r($owoce);
rsort($owoce);
print_r($owoce);