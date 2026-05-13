<?php
$saisie = "  PHP, javascript,  Python ,html ";

$brut = explode(",", $saisie);
$propre = [];

foreach ($brut as $tag) {
    $propre[] = strtolower(trim($tag));
}

foreach ($propre as $tag) {
    echo "#$tag<br>";
}
?>