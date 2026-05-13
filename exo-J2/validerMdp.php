<?php
function motDePasseValide($mdp) {
    $assezLong = strlen($mdp) >= 8;
    $aMajuscule = $mdp !== strtolower($mdp);

    $chiffres = ['0','1','2','3','4','5','6','7','8','9'];
    $sansChiffres = str_replace($chiffres, '', $mdp);
    $aChiffre = strlen($mdp) > strlen($sansChiffres);

    return $assezLong && $aMajuscule && $aChiffre;
}

$tests = ["azerty", "motdepasse", "Motdepasse", "Motdepasse1"];

foreach ($tests as $mdp) {
    $verdict = motDePasseValide($mdp) ? "valide" : "invalide";
    echo "$mdp : $verdict<br>";
}
?>