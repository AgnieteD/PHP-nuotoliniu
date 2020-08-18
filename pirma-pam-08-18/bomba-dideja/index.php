<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php print 'Aš, ' . date('l') . ' ir PHP'; ?></title>
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
    }

    .bomb {
        background: url("https://preview.free3d.com/img/2013/10/1863129473415644685/nmhhf19l-900.jpg");
        background-size: contain;
        background-repeat: no-repeat;
        height: <?php print date('s') * 10; ?>px;
        width: <?php print date('s') * 10; ?>px;
    }
</style>

<body>
    <div class="bomb-container">
        <div class="bomb"></div>
        <span><?php print date('s'); ?></span>
    </div>

</body>

</html>