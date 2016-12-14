<?php

echo "Scan your student card and enter the club!\n";
$id= fopen ("php://stdin","r");
$age = fgets($id);

echo ($age >= 18) ? "Welcome to the club, MAN!!!" : "Hey, kid! Its too late. Don't make your parents worry!";
echo "\n";