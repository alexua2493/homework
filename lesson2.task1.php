<?php
echo "Lets check the weather!";
$weather = fopen ("php://stdin","r");
$temperature = fgets($weather);

  if ($temperature >= 30) {
    echo "Hey, man. It's hot outside. Only rain can help you!";
} elseif (($temperature >= 20) && ($temperature  < 30)) {
    echo "Hey, man. The weather you like. Have a nice day!";
} elseif (($temperature >= 10) && ($temperature  < 20)) {
    echo "Brrr. Like in a fridge. Find some warm closes!";
} elseif (($temperature >= 0) && ($temperature  < 10)) {
    echo "Brrr. Its too cold to talk with you!";
} else {
    echo "Don't eat snow!!!";
}
