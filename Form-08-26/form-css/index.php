<?php
$users = [
    [
        'id' => 'olksajdfngjdsafng',
        'email' => 'zilvinas.vidmantas.93@gmail.com',
        'password' => 'Labas123',
        'role' => 'default'
    ],
    [
        'id' => 'olksajdfnfdisafng',
        'email' => 'admin@gmail.com',
        'password' => 'Labas123',
        'role' => 'admin'
    ]
];

function validateUser($email, $password)
{
    //Kai uzaugsiu busiu duomenu baze
    global $users;
    foreach ($users as $user) {
        if ($user['email'] === $email && $user['password'] === $password) {
            return $user;
        }
    }
    return false;
    // Jei vartotojas rastas, tai grazinti vartotojo duomenis
    // Jei vartotojas nerastas, tai grazinti false
}

if (isset($_POST['email']) && isset($_POST['password'])) {
    $userValidated = validateUser($_POST['email'], $_POST['password']);
}

// var_dump($_POST); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
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
</body>
<form class="form" method="POST">
    <div class="form__title">Prisijungimas</div>
    <div class="input-group">
        <label for="email">Paštas</label>
        <input type="email" id="email" name="email">
    </div>
    <div class="input-group">
        <label for="password">Slaptažodis</label>
        <input type="password" id="password" name="password">
    </div>
    <button name="submit">Prisijungti</button>
</form>


<?php if (isset($userValidated)) : ?>
    <?php if ($userValidated) : ?>
        <p>Prisijungete sekmingai</p>
    <?php else : ?>
        <p>Prisijungti nepavyko</p>
    <?php endif; ?>
<?php endif; ?>

<hr />
<hr />

<!-- REGISTRACIJA -->
<!-- 
  1. Sukurti registracijos formą su 3 įvesties laukais:
    email,
    password,
    repeat-password
  2. Nustatyti formai POST HTTP request tipą
  3. Submit'inant formą turi būti išvedama į ekraną (po forma):
    Slaptažodžių sutapimo atvėju -> Registracija sėkminga
    Slaptažodžių NEsutapimo atvėju -> Registracija nepavyko
 -->
<?php
function isEqual($val1, $val2)
{
    return $val1 === $val2;
}
if (isset($_POST['register'])) {
    $passwordsAreEqual = isEqual($_POST['password'], $_POST['repeat-password']);
}
?>
<form class="form" method="POST">
    <div class="form__title">Registracija</div>
    <div class="input-group">
        <label for="email">Paštas</label>
        <input type="email" id="email" name="email">
    </div>
    <div class="input-group">
        <label for="password">Slaptažodis</label>
        <input type="password" id="password" name="password">
    </div>
    <div class="input-group">
        <label for="password">Pakartokite slaptažodį</label>
        <input type="password" id="password" name="repeat-password">
    </div>
    <button type="submit">Registruotis</button>
    <input type="hidden" name="register" value="1">
</form>

<!-- Jeigu buvo pa'submit'inta registracijos forma -->

<?php if (isset($_POST['register'])) : ?>
    <?php if ($passwordsAreEqual) : ?>
        <h3>Registracija sėkminga</h3>
        <!-- Kitas kodas kuris nukreipia į pagrindinį puslapį -->
    <?php else : ?>
        <h3>Registracija nepavyko</h3>
        <!-- Kitas kodas, kuris išspausdina klaidas -->
    <?php endif; ?>
<?php endif; ?>
<!-- SAVAITĖS DIENA -->
<!-- 
  Sukurti POST tipo formą, kurią pasubmitinus,
būtų atspausdinama savaitės diena po mygtuku
-->

<?php if (isset($_POST['week-day'])) {
  $weekDay;
  switch (date('N')) {
    case 1: $weekDay = 'Pirmadienis'; break;
    case 2: $weekDay = 'Antradienis'; break;
    case 3: $weekDay = 'Trečiadienis'; break;
    case 4: $weekDay = 'Kevtvirtadienis'; break;
    case 5: $weekDay = 'Penktadienis'; break;
    case 6: $weekDay = 'Šeštadienis'; break;
    case 7: $weekDay = 'Sekmadienis'; break;
    default: throw new Exception("Nera šitoj planetoje daugiau nei 7 savaitės dienų");
  };
};
?>
<form class="form" method="POST">
    <input type="submit" value="Spausdinti dieną">
    <input type="hidden" name="week-day" value="1" />
</form>
<?php if (isset($_POST['week-day'])) : ?>
  <div class="text--success"><?= $weekDay; ?></div>
<?php endif; ?>










</html>