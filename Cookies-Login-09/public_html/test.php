<?php 

session_start();
$id = session_id();

$_SESSION['count'] = isset($_SESSION['count']) ? $_SESSION['count'] + 1 : 1;

// $id = $_COOKIE['user_id'] ?? time();
// $visits = ($_COOKIE['times_on_page'] ?? 0) +1;

// setcookie("user_id", $id, time() + 3600);
// setcookie("times_on_page", $visits, time() + 3600);

$h1 = "Sveiki, jums buvo priskirtas ID: $id";
$h2 = "Jus apsilankete {$_SESSION['count']} kartus";

var_dump($_COOKIE);
var_dump($_SESSION);

?>

<!DOCTYPE
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>

<body>
    <h1><?= $h1; ?></h1>
    <h2><?=$h2; ?></h2>

</body>

</html>