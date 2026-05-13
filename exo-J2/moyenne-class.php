<?php
function moyenne($notes) {
    $total = 0;
    foreach ($notes as $n) {
        $total += $n;
    }
    return $total / count($notes);
}

$notes = [12, 15, 8, 17, 14, 11, 9];

$maxi = $notes;
$mini = $notes;
foreach ($notes as $n) {
    if ($n > $maxi) $maxi = $n;
    if ($n < $mini) $mini = $n;
}

echo "Notes : " . implode(", ", $notes) . "<br>";
echo "Moyenne : " . moyenne($notes) . "<br>";
echo "Note la plus haute : $maxi<br>";
echo "Note la plus basse : $mini";
?>