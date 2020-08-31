<?php
require '../bootloader.php';

$form = [
    'attr' =>
    [
        'action' => 'index.php',
        'method' => 'POST',
        'class' => 'my-form',
        'id' => 'login-form',
    ],
    'fields' =>
    [
        'name' => [
            'label' => 'Name',
            'type' => 'text',
            // 'value' => 'name',
            'extra' =>
            [
                'attr' =>
                [
                    'class' => 'name-field',
                    'placeholder' => 'Vardas',
                ],
            ],
        ],
        'email' => [
            // 'label' => 'E-Mail',
            'type' => 'email',
            // 'value' => 'test-mail',
            'extra' =>
            [
                'attr' =>
                [
                    'class' => 'email-field',
                    'placeholder' => 'lopo@email.com',
                ],
            ],
        ],
        'phone' => [
            'label' => 'Phone',
            'type' => 'tel',
            // 'value' => 'phone',
            'extra' =>
            [
                'attr' =>
                [
                    'class' => 'phone-field',
                    'placeholder' => 'Phone',
                ],
            ],
        ],
        'checkbox' => [
            'label' => 'I have a bike',
            'type' => 'checkbox',
            'value' => 'Bike',
            'extra' =>
            [
                'attr' =>
                [
                    'class' => 'checkbox-field',
                ],
            ],
        ],
        'sex' => [
            'label' => 'Lytis',
            'type' => 'select',
            'value' => 'female',
            // 'id' => 'kazkoks',
            'options' => [
                'male' => 'Kardanas',
                'female' => 'Mova',
                'other' => 'Kardamova',
            ],
        ],
    ],
    'buttons' =>
    [
        'save' =>
        [
            'title' => 'Join',
            'extra' =>
            [
                'attr' =>
                [
                    'class' => 'big-button',
                ],
            ],
        ],
    ],
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form from array</title>
</head>

<body>
    <?php include '../core/templates/form.tpl.php'; ?>
</body>

</html>