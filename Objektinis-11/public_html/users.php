<?php
require '../bootloader.php';

$users = file_to_array(DB_FILE);

$table = [
    'headers' => [
        'Email',
        'Password',
    ],
    'rows' => 
        $users,     
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users table</title>
</head>

<body>
    <?php include ROOT . '/core/templates/table.tpl.php'; ?>
</body>

</html>