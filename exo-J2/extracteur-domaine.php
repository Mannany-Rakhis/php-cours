<?php
function extraireDomaine($email) {
    $parties = explode("@", $email);

    if (count($parties) !== 2) {
        return "invalide";
    }

    return $parties[1];
}

$tests = ["marie@gmail.com", "contact@ecole.fr", "pasunmail"];

foreach ($tests as $e) {
    echo "$e : " . extraireDomaine($e) . "<br>";
}
?>