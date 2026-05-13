<?php
$produit = [
    "nom"       => "iPhone 15",
    "prix"      => 999,
    "stock"     => 24,
    "categorie" => "Smartphone"
];

echo "=== FICHE PRODUIT ===<br>";
foreach ($produit as $cle => $val) {
    echo "$cle : $val<br>";
}

$produit["promo"] = true;

echo "<br>=== APRÈS PROMO ===<br>";
foreach ($produit as $cle => $val) {
    echo "$cle : $val<br>";
}
?>