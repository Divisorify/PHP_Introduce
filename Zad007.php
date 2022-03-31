<?php
$i = 10;

function rd(){
    global $i;
    $i = rand(1,50);
}

rd();
print $i;