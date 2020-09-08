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
        'number1' => [
            'label' => 'Iveskite Skaiciu (100-200)',
            'type' => 'text',
            // 'filter' => FILTER_SANITIZE_ENCODED,
            'validators' => [
                'validate_field_not_empty',
                'validate_field_is_number',
                // 'validate_field_from_100_to_200',
                'validate_field_range' => [
                    'min' => 100,
                    'max' => 200,
                ],    
            ],
            'extra' =>
            [
                'attr' =>
                [
                    'class' => 'number1-field',
                    'placeholder' => 'Iveskite Skaiciu (100-200)',
                ],
            ],
        ],
        'number2' => [
            'label' => 'Iveskite Skaiciu (50-100)',
            'type' => 'text',
            // 'filter' => FILTER_SANITIZE_ENCODED,
            'validators' => [
                'validate_field_not_empty',
                'validate_field_is_number',
                // 'validate_field_from_50_to_100',
                'validate_field_range' => [
                    'min' => 50,
                    'max' => 100,
                ],  
            ],
            'extra' =>
            [
                'attr' =>
                [
                    'class' => 'number2-field',
                    'placeholder' => 'Iveskite Skaiciu (50-100)',
                ],
            ],
        ],
    ],
    'buttons' =>
    [
        'save' =>
        [
            'title' => 'AR SKIRIU SKAICIUS?',
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

if (!empty($_POST)) {
    $form_values = sanitize_form_input_values($form);
    $success = validate_form($form, $form_values);
    if ($success) {
        $answer = 'Skiri';
    } else {
        $answer ='Daktaras iskviestas';
    }
    // var_dump($success);
} 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Skaiciai ir field range</title>
</head>
<style>
    .error {
        color: red;    
    }
</style>
<body>
    <?php include '../core/templates/form.tpl.php'; ?>
 
    <?php if (isset($answer)) : ?>
       <p>Isvada: <?= $answer; ?></p>
    <?php endif; ?>    
</body>

</html>