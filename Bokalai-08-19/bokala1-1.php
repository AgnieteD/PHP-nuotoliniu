<?php
$money = rand(0, 15);
$bokal_cost = 3;
$bokal_count = floor($money / $bokal_cost);
$money_spent = number_format($bokal_count * $bokal_cost, 2);
$p = "Viso sumokėta $money_spent eur"
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Alus</title>
    <style>
        .beer-container {
            display: flex;
        }
        .beer {
            background-image: url("https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2F1.bp.blogspot.com%2F-Ht7b9u8y7z8%2FUBkvmVbhKMI%2FAAAAAAAAF8w%2Frw_RXFF83VA%2Fs1600%2FBeer_Wallpaper%2B(62).jpg&f=1&nofb=1");
            background-position: center;
            background-size: cover;
            width: 100px;
            height: 100px;
        }
    </style>
</head>
<body>
<div class="beer-container">
    <?php for ($i = 1; $i <= $bokal_count; $i++): ?>
        <div class="beer"></div>
    <?php endfor; ?>
</div>
<p><?php print $p; ?></p>
</body>
