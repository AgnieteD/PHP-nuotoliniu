<?php
    
    $game = [
        'objects' => [
            [
                'x' => 50,
                'y' => 20,
                'class' => 'car',
            ],
            [
                'x' => 22,
                'y' => 4,
                'class' => 'ball',
            ],
            [
                'x' => 30,
                'y' => 30,
                'class' => 'cat',
            ],
            [
                'x' => 60,
                'y' => 0,
                'class' => 'dog',
            ],
        ],
        'huds' => [
            [
                'x' => 0,
                'y' => 0,
                'class' => 'huds',
                'time' => date("h:i"),
                'bar_1' => rand(1, 100),
                'bar_2' => rand(1, 100),
                'weapon' => rand(1, 3),
                'money' => 1000 + 200,
                'stars' => 1,
            ],
        ]
    ];
    
    foreach ($game['objects'] as $key => $object) {
//      $x = true;
//      $y = !$x;
        
        $object['on_fire'] = rand(true, false);
        $object['is_target'] = !$object['on_fire'];
//      if ($object['on_fire']) {
//          $object['class'] .= ' fire';
//      }
//
//      if ($object['is_target']) {
//          $object['class'] .= ' target';
//      }
        
        $object['class'] .= ' ' . ($object['on_fire'] ? 'fire' : 'target');
//      var_dump($object['on_fire'] ? 'fire' : 'target');
        $game['objects'][$key] = $object;
    }

    // $game['hud']['time'] = date("h:i");
    // $game['hud']['bar_1'] = rand(1, 100);
    // $game['hud']['bar_2'] = rand(1, 100);
    // $game['hud']['weapon'] = rand(1, 3) . '.png';
    
    //  var_dump($game);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>gta</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .bg {
            background-image: url("https://vignette.wikia.nocookie.net/gtawiki/images/f/fd/GroveStreet.jpg/revision/latest?cb=20080607212907");
            background-size: cover;
            min-height: 100vh;
            max-width: 100vw;
            position: relative;
        }

        .object {
            position: absolute;
            background-size: contain;
            background-repeat: no-repeat;
            background-position-y: bottom;
        }

        .car {
            background-image: url('https://toppng.com/public/uploads/thumbnail/gta-v-car-11550712414czhnj9a4pm.png');
            width: 10%;
        }

        .ball {
            background-image: url('https://i0.wp.com/freepngimages.com/wp-content/uploads/2018/06/football-no-background.png?fit=895%2C895');
            height: 5%;
        }

        .cat {
            background-image: url('https://i0.wp.com/freepngimages.com/wp-content/uploads/2018/06/football-no-background.png?fit=895%2C895');
            height: 5%;
        }

        .dog {
            background-image: url('https://i0.wp.com/freepngimages.com/wp-content/uploads/2018/06/football-no-background.png?fit=895%2C895');
            width: 5%;
        }

        .fire {
            content: url("https://i.pinimg.com/originals/d5/92/b0/d592b099af8623be202b7be634b11507.png");
        }

        .target {
            content: url("https://upload.wikimedia.org/wikipedia/en/f/f1/Down_Arrow_Icon.png");
        }

        .huds {
             position: sticky;
             background: rgba(240, 240, 240, 0.7);
             width: 150px;
             height: 400px;
        }
    </style>
</head>
<body>
<div class="bg">
    <?php foreach ($game['objects'] as $object): ?>
        <div class="object <?php print $object['class']; ?>"
             style="bottom: <?php print $object['y']; ?>%; left: <?php print $object['x']; ?>%;">
        </div>
    <?php endforeach; ?>  

    <?php foreach ($game['huds'] as $hud): ?>
        <div class="<?php print $hud['class']; ?>"
             style="top: <?php print $hud['y']; ?>; left: <?php print $hud['x']; ?>;">
             <img src="<?php print $hud['weapon']; ?>.png" alt="weapon">
            <h1><?php print $hud['time']; ?></h1>
        </div>
    <?php endforeach; ?>   
    
</div>
</div>
</body>
</html>



 

    