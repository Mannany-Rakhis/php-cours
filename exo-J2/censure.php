<?php
function censurer($texte, $motInterdit) {
    return str_replace($motInterdit, "***", $texte);
}

$commentaire = "Ce produit est nul, vraiment nul ! Le service est nul aussi.";

echo "Avant : $commentaire<br>";
echo "Après : " . censurer($commentaire, "nul");
?>