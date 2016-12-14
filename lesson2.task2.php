<?php
echo "Give me the mark!";
$handle = fopen ("php://stdin","r");
$mark = fgets($handle);

if ($mark == 5) {
    echo "YeeeeWhaaaa!!!!";
}
elseif ($mark == 4) {
    echo "I am good :)";
}
elseif ($mark == 3) {
    echo "OK :(";
}
else {
    echo "I am better!!";
}
