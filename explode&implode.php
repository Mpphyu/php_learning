<?php

$input = "A quick brown fox";
$arr = explode(" ", $input);

print_r($arr);

$str = implode(" ", $arr);

echo $str;