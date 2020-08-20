<?php
$money = rand(0, 40);
$bokal_cost = 3;
$bokal_count = floor($money / $bokal_cost);
$bg_count = floor($bokal_count / 4);
$money_spent = $bokal_count * $bokal_cost;
$timestamp = time() + rand(20, 30) * 60; //sekundės
$p = "Viso sumokėta $money_spent eur"
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Alus</title>
    <style>
        .bg-container {
            position: relative;
            overflow: hidden;
            position: fixed;
            height: 100vh;
            width: 100vw;
            z-index: 1;
        }
        .bg-img {
            width: 100vw;
            height: 100vh;
            background-size: cover;
            background-image: url(https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fi.ytimg.com%2Fvi%2FxkZrTnN6ZRo%2Fmaxresdefault.jpg&f=1&nofb=1);
            position: absolute;
            opacity: 0.5;
        }
        .beer-lines {
            position: relative;
            z-index: 2;
        }
        .beer-line {
            display: flex;
            align-items: center;
        }
        .beer-line .info span {
            display: block;
        }
        .beer-images {
            display: flex;
        }
        .beer {
            background-position: center;
            background-size: cover;
            width: 100px;
            height: 100px;
        }
        .beer.empty {
            background-image: url("https://i.pinimg.com/originals/b8/f1/ab/b8f1abf8eb2870a182fa985d03fbb037.png");
        }
        .beer.full {
            background-image: url("https://www.morebeer.com/web_files/intranet.morebeer.com/images/30135.png");
        }
    </style>
</head>
<body>
<div class="bg-container">
    <?php for ($left = 0; $bg_count >= 0; $bg_count--, $left = $bg_count * 20): ?>
        <div class="bg-img" style="left: <?php print $left; ?>px"></div>
    <?php endfor; ?>
</div>
<div class="beer-lines">
    <?php for ($m = 3; $m <= $money_spent; $m += $bokal_cost, $timestamp += rand(20, 30) * 60): ?>
        <div class="beer-line">
            <div class="info">
                <span><?php print date('H:i', $timestamp); ?></span>
                <span><?php print "$m Eur"; ?></span>
            </div>
            <div class="beer-images">
                <?php for ($b = $m; $b > 0; $b -= $bokal_cost): ?>
                    <div class="beer <?php print $b == $bokal_cost ? 'full' : 'empty'; ?>"></div>
                <?php endfor; ?>
            </div>
        </div>
    <?php endfor; ?>
</div>
<p><?php print $p; ?></p>
</body>
</html>