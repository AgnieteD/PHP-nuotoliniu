<?php
require '../bootloader.php';

logout($redirect = true);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
</head>
<body>
<?php if (isset($message)) : ?>
        <h1><?= $message; ?></h1>
    <?php endif; ?>
</body>
</html>