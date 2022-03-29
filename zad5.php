<?php
$n = 3.5;
$note;

$note = match($n){
    2 => 'niedostateczny',
    3 => 'dopuszczający',
    4 => 'dobry',
    5 => 'bardzo dobry',
    default => 'a'
};

print $note.PHP_EOL;

switch($n){
    case 2:
        $note = 'niedostateczny';
        break;
    case 3:
        $note = 'dopuszczający';
        break;
    case 4:
        $note = 'dobry';
        break;
    case 5:
        $note = 'bardzo donry';
        break;
    default:
        $note = 'b';
}

print $note;