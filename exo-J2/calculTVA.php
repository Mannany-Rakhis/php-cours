<?php
function calculerTVA($prixHT, $taux = 20) {
    return $prixHT * $taux / 100;
}

// Tests
echo "TVA sur 100€ (20%) : " . calculerTVA(100) . "€<br>";
echo "TVA sur 50€ (5.5%) : " . calculerTVA(50, 5.5) . "€<br>";
echo "TVA sur 200€ (10%) : " . calculerTVA(200, 10) . "€<br>";
?>