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
                'validate_user_unique',      
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
                    'placeholder' => 'Password',
                ],
            ],
        ],
        'password_repeat' => [
            'label' => 'Repeat Password',
            'type' => 'password',
            // 'filter' => FILTER_SANITIZE_ENCODED,
            'validators' => [
                'validate_field_not_empty',
            ],
            'extra' =>
            [
                'attr' =>
                [
                    'placeholder' => 'Repeat Password',
                ],
            ],
        ],
    ],
    'buttons' =>
    [
        'save' =>
        [
            'title' => 'REGISTRUOTIS',
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
        'validate_fields_match' => [
            'fields' => [
                'password',
                'password_repeat',
            ],
            'error' => 'Laukeliai privalo sutapti',
        ],
    ],
];

if (!empty($_POST)) {
    $form_values = sanitize_form_input_values($form);
    $success = validate_form($form, $form_values);
    if ($success) {
        unset($form_values['password_repeat']);
        $message = save_data($form_values, $form) ? 'Issaugota' : 'Neisaugota';
        header('Location: login.php');
        exit;
    } else {
        $message = 'Eik tu nx';
    }    
}

// unlink(DB_FILE);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<style>
    .error {
        color: red;
    }
</style>

<body>
    <?php include '../core/templates/form.tpl.php'; ?>

    <?php if (isset($message)) : ?>
        <span><?= $message; ?></span>
    <?php endif; ?>

</body>

</html>