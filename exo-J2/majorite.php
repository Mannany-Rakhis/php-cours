<?php
function estMajeur($age) {
    return $age >= 18;
}

$ages = [15, 18, 42];

foreach ($ages as $age) {
    $reponse = estMajeur($age) ? "oui" : "non";
    echo "$age ans : $reponse\n";
}
?>