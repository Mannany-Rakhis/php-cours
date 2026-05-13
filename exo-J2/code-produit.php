<?php
$code = "PROD-2025-A47";

echo "Préfixe : " . substr($code, 0, 4) . "<br>";
echo "Année : " . substr($code, 5, 4) . "<br>";
echo "Numéro : " . substr($code, 10);
?> 