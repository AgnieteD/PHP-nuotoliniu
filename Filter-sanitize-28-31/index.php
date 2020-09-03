<?php




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter-sanitize</title>
</head>
<style>
    .form {
        display: block;
        width: 400px;
        margin: 100px auto;
        padding: 1rem;
        box-shadow: 0 4px 6px 2px #5555;
    }

    .form__title {
        text-align: center;
        font-size: 1.16rem;
        margin-bottom: 1rem;
    }

    .input-group {
        margin-bottom: 1rem;
    }

    .input-group>label {
        display: block;
        margin-bottom: 0.25rem;
    }

    .input-group>input[type=email],
    .input-group>input[type=text],
    .input-group>input[type=password],
    .input-group>input[type=number] {
        width: 100%;
        border: none;
        border-bottom: 1px solid #339;
    }

    .input-group>input[type=email]:focus,
    .input-group>input[type=text]:focus,
    .input-group>input[type=password]:focus,
    .input-group>input[type=number]:focus {
        outline: none;
        box-shadow: inset 0 -1px 0 0 #339;
    }
</style>

<body>
    <form class="form" method="POST">
        <div class="form__title">Registracija</div>
        <div class="input-group">
            <label for="email">Paštas</label>
            <input type="text" id="email" name="email">
        </div>
        <div class="input-group">
            <label for="password">Slaptažodis</label>
            <input type="password" id="password" name="password">
        </div>
        <div class="input-group">
            <label for="password">Pakartokite slaptažodį</label>
            <input type="password" id="password" name="repeat-password">
        </div>
        <div class="input-group">
            <label for="height">Ugis</label>
            <input type="text" id="height" name="height">
        </div>
        <div class="input-group">
            <label for="age">Amzius</label>
            <input type="text" id="age" name="age">
        </div>
        <div class="input-group">
            <label for="fb-address">FB adresas</label>
            <input type="text" id="fb-address" name="fb-address">
        </div>
        <button type="submit">Registruotis</button><input type="hidden" name="register" value="1">
    </form>
</body>

</html>