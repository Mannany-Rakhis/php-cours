<?php
$courses = ["Pain", "Lait", "Œufs", "Tomates", "Pâtes"];

echo "Nombre d'articles : " . count($courses) . "<br>";

foreach ($courses as $article) {
    echo "<li>$article</li>";
}

$courses[] = "Café";

echo "<br>Nombre après ajout : " . count($courses);
?>