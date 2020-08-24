<?php
$game = [
    'objects' => [
        [
            'x' => 19,
            'y' => 25,
            'class' => 'car',
        ],
        [
            'x' => 31,
            'y' => 21,
            'class' => 'ball',
        ],
        [
            'x' => 12,
            'y' => 28,
            'class' => 'cat',
        ],
        [
            'x' => 37,
            'y' => 31,
            'class' => 'dog',
        ],
    ],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gta1</title>
</head>
<style>
    .street {
        background: url(https://vignette.wikia.nocookie.net/gtawiki/images/f/fd/GroveStreet.jpg/revision/latest?cb=20080607212907);
        background-size: cover;
        background-repeat: no-repeat;
        min-height: 100vh;
        position: relative;
    }

    .car {
        background: url(https://toppng.com/public/uploads/thumbnail/gta-v-car-11550712414czhnj9a4pm.png);
        width: 20%;
    }

    .ball {
        background: url(https://i0.wp.com/freepngimages.com/wp-content/uploads/2018/06/football-no-background.png?fit=895%2C895);
        width: 5%;
    }

    .cat {
        background: url(https://i0.wp.com/freepngimages.com/wp-content/uploads/2018/06/football-no-background.png?fit=895%2C895);
        width: 5%;
    }

    .dog {
        background: url(https://i0.wp.com/freepngimages.com/wp-content/uploads/2018/06/football-no-background.png?fit=895%2C895);
        width: 5%;
    }

    .object {
        position: absolute;
        background-size: contain;
        background-repeat: no-repeat;
        height: 10vh;
    }

</style>

<body>
<section class="street">
<?php foreach ($game['objects'] as $object): ?>
    <div style="left:<?php print $object['x']; ?>em; top:<?php print $object['y']; ?>em;"
         class="object <?php print $object['class']; ?>"></div>
         <?php endforeach; ?>
</section>
 
</body>

</html>