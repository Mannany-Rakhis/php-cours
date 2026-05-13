<?php
// Fonction de l'exercice précédent 
function calculerTVA($prixHT, $taux = 20) {
    return $prixHT * $taux / 100;
}

function prixTTC($prixHT, $taux = 20) {
    return $prixHT + calculerTVA($prixHT, $taux);
}

echo "Prix TTC d'un produit à 100€ HT : " . prixTTC(100) . "€<br>";
echo "Prix TTC d'un livre à 25€ HT : " . prixTTC(25, 5.5) . "€";
?>