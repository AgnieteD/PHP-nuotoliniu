<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random</title>
</head>
<style>
    .bg-1 {
        background: red;
    }

    .bg-2 {
        background: green;
    }

    .bg-3 {
        background: blue;
    }

    .bg-4 {
        background: orange;
    }

    .bg-5 {
        background: violet;
    }
</style>

<body>
<?php
if ('bg-' . (rand(1, 5)) != 'bg-' . (rand(1, 5))) {
    print '<button class="bg-'(rand(1, 5)) . '>BTN</button>';
}; 
?>
    <button class="bg-<?php print (rand(1, 5)); ?>">BTN1</button>
    <button class="bg-<?php print (rand(1, 5)); ?>">BTN2</button>
    <button class="bg-<?php print (rand(1, 5)); ?>">BTN3</button>
    <button class="bg-<?php print (rand(1, 5)); ?>">BTN4</button>
    <button class="bg-<?php print (rand(1, 5)); ?>">BTN5</button>
    

</body>

</html>

