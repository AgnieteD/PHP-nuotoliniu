<?php
require '../bootloader.php';

if (is_logged_in()) {
    $message = "Zdr, {$_SESSION['username']}!";
} else {
    header('Location: login.php');
    exit;
};

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello</title>
</head>
<style>
    .error {
        color: red;
    }
</style>

<body>

    <?php if (isset($message)) : ?>
        <h1><?= $message; ?></h1>
    <?php endif; ?>

</body>

</html>