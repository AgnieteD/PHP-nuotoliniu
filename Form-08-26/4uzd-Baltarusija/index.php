<?php

if (isset($_POST['vardas']) && isset($_POST['pavardė']) && isset($_POST['amžius']) && isset($_POST['sritis'])) {
    $info = 'Ponas ' . $_POST['vardas'] . ' ' . $_POST['pavardė'] . ' ' . $_POST['amžius'];
    $info2 = $_POST['sritis'];
}

if (isset($_POST['lopas'])) {
    $checked = 'Lopas';
} elseif (isset($_POST['agresyvus'])) {
    $checked = 'Agresyvus bičas';
} elseif (isset($_POST['uber'])) {
    $checked = 'Uber saviakas';
}

var_dump($_POST);
// var_dump(getInfo($_POST));
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Priėmimo į Baltarusijos mentus Anketa</title>
</head>
<style>
    body {
        text-align: center;
    }

    div {
        margin: 40px auto;
    }

    h2 {
        font-size: 50px;
        font-weight: 800;
    }

    p {
        font-size: 30px;
        font-weight: 600;
    }
</style>

<body>
    <?php if (empty($_POST)) : ?>
        <form method="POST">
            <h2>Priėmimo į Baltarusijos mentus Anketa</h2>
            <div>
                <label for="vardas">Vardas: </label>
                <input type="text" name="vardas" required>
                <label for="pavardė">Pavardė: </label>
                <input type="text" name="pavardė" required>
                <label for="amžius">Amžius: </label>
                <input type="number" name="amžius">
                <div>
                    <label for="sritis">Sritis: </label>
                    <select name="sritis">
                        <option selected hidden>Pradedantysis</option>
                        <option name="OMON">OMON</option>
                        <option name="Palicija">Palicija</option>
                        <option name="Profesionalas">Profesionalas</option>
                    </select>
                </div>
            </div>
            <div>
                <label for="lopas">Ar mėgsti bananus?
                    <input type="checkbox" name="lopas">
                </label>
                <label for="agresyvus">Ar susikištum bananą, jei lieptų Putinas?
                    <input type="checkbox" name="agresyvus">
                </label>
                <label for="uber">Ar suvalgytum Putino bananą, jei lieptų Lukašenka?
                    <input type="checkbox" name="uber">
                </label>
            </div>
            <button name="submit">Gauk sertifikatą</button>
        </form>
        <!-- Antra dalis -->
    <?php else : ?>
        <h2>Sertifikatas</h2>
        <div>
            <?php if (isset($info)) : ?>
                <p><?= $info; ?></p>
            <?php endif; ?>

            <?php if (isset($info2)) : ?>
                <p>Sritis: <?= $info2; ?></p>
            <?php endif; ?>

            <?php if (isset($checked)) : ?>
                <p>Titulas: <?= $checked; ?></p>
            <?php endif; ?>
        </div>
    <?php endif; ?>
</body>

</html>