<?php

$people = array("Jan" => 22, "Bartosz" =>38, "Piotr" =>40);

print_r($people);

print("Rozmiar tablicy: ".sizeof($people)."\n");
print("Bartosz ma ".$people["Bartosz"]." lat \n");
$people = array_merge($people,array("Witold" => 28));
$people["Witek"] = 28;
print_r($people);
unset($people["Piotr"]);
print_r($people);
asort($people);
print_r($people);
