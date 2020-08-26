<?php
var_dump($_POST);

$skaicius = intval($_POST['slider'] ?? 25);
$message = empty($_POST) ? 'Paspausk mygtuką' : $skaicius;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Googly Eyes</title>
</head>

<body>
    <form method="POST">
        Dydis: <input name="slider" type="range" min="0" max="50" value="<?= $skaicius?>">
        <button name="submit">Let's do it</button>
    </form>
    <p><?= $message; ?></p>
    <img style="width:<?= $skaicius; ?>em;" src="https://i.ebayimg.com/images/g/lXMAAOSwI4teQQEO/s-l300.jpg">
</body>

</html>