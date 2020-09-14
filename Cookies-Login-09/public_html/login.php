<?php
require '../bootloader.php';

$form = [
    'attr' =>
    [
        'method' => 'POST',
    ],
    'fields' =>
    [
        'username' => [
            'label' => 'User Name',
            'type' => 'text',
            'validators' => [
                'validate_field_not_empty',      
            ],
            'extra' =>
            [
                'attr' =>
                [
                    'class' => 'name-field',
                    'placeholder' => 'Enter Username',
                ],
            ],
        ],
        'password' => [
            'label' => 'Password',
            'type' => 'password',
            // 'filter' => FILTER_SANITIZE_ENCODED,
            'validators' => [
                'validate_field_not_empty',
            ],
            'extra' =>
            [
                'attr' =>
                [
                    'placeholder' => 'Enter Password',
                ],
            ],
        ],
    ],
    'buttons' =>
    [
        'save' =>
        [
            'title' => 'Login',
            'extra' =>
            [
                'attr' =>
                [
                    'class' => 'big-button',
                ],
            ],
        ],
    ],
    'validators' => [
        'validate_login',
    ],   
];

if (!empty($_POST)) {
    $form_values = sanitize_form_input_values($form);
    $success = validate_form($form, $form_values);
    if ($success) {
        $message = 'Prisijungete';
        header('Location: index.php');
        exit;
    } else {
        // $message = 'Prisiregistruok';
        header('Location: register.php');
        exit;
    }    
} 

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <?php include '../core/templates/form.tpl.php'; ?>

    <?php if (isset($message)) : ?>
        <h1><?= $message; ?></h1>
    <?php endif; ?>
    
</body>

</html>