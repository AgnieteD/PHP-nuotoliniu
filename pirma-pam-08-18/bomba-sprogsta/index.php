<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bang bang boom</title>
</head>
<style>
    .bomb-container {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    .bomb-container span {
        color: cyan;
        font-size: 20px;
        font-weight: 600;
        padding: 20px;
    }

    .bomb {
        background: url("https://preview.free3d.com/img/2013/10/1863129473415644685/nmhhf19l-900.jpg");
        background-size: contain;
        background-repeat: no-repeat;
        height: 300px;
        width: 300px;
    }

    .boom {
        background: url("https://screenshots.gamebanana.com/img/ss/prefabs/58c06cc782d65.webp");
        background-size: contain;
        background-repeat: no-repeat;
        height: 300px;
        width: 300px;
    }

    .boom-00 {
        background: url("https://screenshots.gamebanana.com/img/ss/effects/1028.webp");
    }
</style>

<body>
    <div class="bomb-container">
        <div class="bomb"></div>
        <span><?php print date('s'); ?></span>
        <div class="boom boom-<?php print date('s'); ?>"></div>
    </div>
</body>

</html>