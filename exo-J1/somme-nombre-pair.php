<?php
$accumulateur = 0;
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        $accumulateur += $i;
    }
}
echo "La somme des nombres pairs de 1 à 100 est : $accumulateur.";
?>   