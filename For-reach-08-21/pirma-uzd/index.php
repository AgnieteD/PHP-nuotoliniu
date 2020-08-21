<?php
$game = [
    'objects' => [
        [
            'x' => 300,
            'y' => 400,
            'class' => 'car',
        ],
        [
            'x' => 500,
            'y' => 350,
            'class' => 'ball',
        ],
        [
            'x' => 200,
            'y' => 450,
            'class' => 'cat',
        ],
        [
            'x' => 600,
            'y' => 500,
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
        background-size: contain;
        background-repeat: no-repeat;
        height: 20vh;
        width: 20%;
        position: absolute;
    }

    .ball {
        background: url(https://i0.wp.com/freepngimages.com/wp-content/uploads/2018/06/football-no-background.png?fit=895%2C895);
        background-size: contain;
        background-repeat: no-repeat;
        height: 10vh;
        width: 5%;
        position: absolute;
    }

    .cat {
        background: url(https://i0.wp.com/freepngimages.com/wp-content/uploads/2018/06/football-no-background.png?fit=895%2C895);
        background-size: contain;
        background-repeat: no-repeat;
        height: 10vh;
        width: 5%;
        position: absolute;
    }

    .dog {
        background: url(https://i0.wp.com/freepngimages.com/wp-content/uploads/2018/06/football-no-background.png?fit=895%2C895);
        background-size: contain;
        background-repeat: no-repeat;
        height: 10vh;
        width: 5%;
        position: absolute;
    }

</style>

<body>
<section class="street">
<?php foreach ($game['objects'] as $object): ?>
    <div style="left:<?php print $object['x']; ?>px; top:<?php print $object['y']; ?>px;"
         class="<?php print $object['class']; ?>"></div>
         <?php endforeach; ?>
</section>
 
</body>

</html>