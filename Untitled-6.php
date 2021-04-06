<?php

$str1 = '15';
$str2 = 15;

var_dump( $str1 == $str2); echo "<br>";
var_dump( $str1 === $str2);echo "<br>";
var_dump( $str1 === (string) $str2); echo "<br>";