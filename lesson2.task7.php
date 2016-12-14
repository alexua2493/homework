<?php

$handle = fopen ("php://stdin","r");
$fizz = fgets($handle);
$buzz = fgets($handle);
$end = fgets($handle);
//$fizz = 2;
//$buzz = 5;
//$end = 18;

for ($i = 1; $i <= $end; $i++)
{
    if($i % $fizz == 0 && $i % $buzz ==0){
        echo "FB";
    }
    else if($i % $fizz == 0){
        echo "F";
    }
    else if($i % $buzz == 0){
        echo "B";
    }
    else {
        echo $i."";
    }
}
