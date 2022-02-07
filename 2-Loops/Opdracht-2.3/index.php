<?php

echo "<ul>";

$dagen = array(
    "maandag",
    "dinsdag",
    "woensdag",
    "donderdag",
    "vrijdag",
    "zaterdag",
    "zondag"
);

foreach($dagen as $week){
    echo"<li>$week</li>";
}

echo "</ul>";

?>