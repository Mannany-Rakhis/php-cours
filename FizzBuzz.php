<?php
header("Content-Type: text/html; charset=UTF-8");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>FizzBuzz</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        .container {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            max-width: 800px;
            margin: 0 auto;
        }
        .item {
            background: white;
            padding: 15px 25px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            text-align: center;
            font-weight: bold;
            font-size: 18px;
            min-width: 80px;
        }
        .fizz { color: #e67e22; }
        .buzz { color: #2980b9; }
        .fizzbuzz { color: #8e44ad; }
    </style>
</head>
<body>
    <h1 style="text-align:center;">Résultats FizzBuzz (1 à 30)</h1>
    <div class="container">
        <?php
        for ($i = 1; $i <= 30; $i++) {
            $class = '';
            $text = '';

            if ($i % 15 === 0) {
                $text = "FizzBuzz";
                $class = "fizzbuzz";
            } elseif ($i % 3 === 0) {
                $text = "Fizz";
                $class = "fizz";
            } elseif ($i % 5 === 0) {
                $text = "Buzz";
                $class = "buzz";
            } else {
                $text = $i;
            }

            echo "<div class=\"item {$class}\">{$text}</div>";
        }
        ?>
    </div>
</body>
</html>