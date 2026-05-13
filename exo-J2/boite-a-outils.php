<?php
$magasinA = [999, 850, 599];
$magasinB = [720, 199, 350];

$tous = array_merge($magasinA, $magasinB);

sort($tous);
echo "Croissant : " . implode(", ", $tous) . "<br>";

rsort($tous);
echo "Décroissant : " . implode(", ", $tous) . "<br>";

$top = array_slice($tous, 0, 3);
echo "Top 3 : " . implode(", ", $top) . "<br>";

echo "599 dans le top 3 ? " . (in_array(599, $top) ? "Oui" : "Non") . "<br>";
echo "850 dans le top 3 ? " . (in_array(850, $top) ? "Oui" : "Non");
?>