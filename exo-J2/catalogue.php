<?php
$films = [
    [
        "titre"       => "Inception",
        "realisateur" => "Christopher Nolan",
        "annee"       => 2010,
        "note"        => 9
    ],
    [
        "titre"       => "Le Voyage de Chihiro",
        "realisateur" => "Hayao Miyazaki",
        "annee"       => 2001,
        "note"        => 10
    ],
    [
        "titre"       => "Parasite",
        "realisateur" => "Bong Joon-ho",
        "annee"       => 2019,
        "note"        => 9
    ]
];

foreach ($films as $f) {
    echo "$f[titre] ($f[annee]) — $f[realisateur] · Note : $f[note]/10<br>";
}
?>