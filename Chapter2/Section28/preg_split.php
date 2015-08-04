<?php
// Perlの「my @data = split(//,"abcdefg");」



$string = "abcdefg";
$array = preg_split('//', $string, -1, PREG_SPLIT_NO_EMPTY);

print '<pre>';
print_r($array);
print '</pre>';