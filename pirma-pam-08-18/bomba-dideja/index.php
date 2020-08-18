<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php print 'Aš, ' . date('l') . ' ir PHP'; ?></title>
</head>
<style>
    div {
        background: url("https://preview.free3d.com/img/2013/10/1863129473415644685/nmhhf19l-900.jpg");
        background-size: contain;
        background-repeat: no-repeat;
        height: <?php print date('s') * 10; ?>px;
    }
</style>

<body>
    <div></div>
    <span><?php print date('s'); ?></span>
</body>

</html>