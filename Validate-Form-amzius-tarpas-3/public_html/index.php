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
            // 'label' => 'Vardas ir pavarde',
            'type' => 'text',
            // 'filter' => FILTER_SANITIZE_ENCODED,        
            'validators' => [
                'validate_field_not_empty',
                'validate_field_has_space_between',
            ],
            'extra' =>
            [
                'attr' =>
                [
                    'class' => 'name-field',
                    'placeholder' => 'Vardas ir pavarde',
                ],
            ],
        ],
        'age' => [
            // 'label' => 'Vardas ir pavarde',
            'type' => 'number',
            // 'filter' => FILTER_SANITIZE_ENCODED,        
            'validators' => [
                'validate_field_not_empty',
                'validate_field_is_number',  
                'validate_field_normal_age',
                            
            ],
            'extra' =>
            [
                'attr' =>
                [
                    'class' => 'age-field',
                    'placeholder' => 'Amzius',
                ],
            ],
        ],
        // 'surname' => [
        //     'label' => 'Surname',
        //     'type' => 'text',
        //     // 'value' => 'name',
        //     'validators' => [
        //         'validate_field_not_empty',
        //     ],
        //     'extra' =>
        //     [
        //         'attr' =>
        //         [
        //             'class' => 'name-field',
        //             'placeholder' => 'Pavarde',
        //         ],
        //     ],
        // ],
        // 'email' => [
        //     // 'label' => 'E-Mail',
        //     'type' => 'email',
        //     // 'value' => 'test-mail',
        //     'extra' =>
        //     [
        //         'attr' =>
        //         [
        //             'class' => 'email-field',
        //             'placeholder' => 'lopo@email.com',
        //         ],
        //     ],
        // ],
        // 'phone' => [
        //     'label' => 'Phone',
        //     'type' => 'tel',
        //     // 'value' => 'phone',
        //     'validators' => [
        //         'validate_field_is_number',
        //     ],
        //     'extra' =>
        //     [
        //         'attr' =>
        //         [
        //             'class' => 'phone-field',
        //             'placeholder' => 'Phone',
        //         ],
        //     ],
        // ],
        // 'checkbox' => [
        //     'label' => 'I have a bike',
        //     'type' => 'checkbox',
        //     'value' => 'Bike',
        //     'extra' =>
        //     [
        //         'attr' =>
        //         [
        //             'class' => 'checkbox-field',
        //         ],
        //     ],
        // ],
        // 'sex' => [
        //     'label' => 'Lytis',
        //     'type' => 'select',
        //     'value' => 'female',
        //     // 'id' => 'kazkoks',
        //     'options' => [
        //         'male' => 'Kardanas',
        //         'female' => 'Mova',
        //         'other' => 'Kardamova',
        //     ],
        // ],
    ],
    'buttons' =>
    [
        'save' =>
        [
            'title' => 'Ar as normalus?',
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


// $fields = ['vardas', 'pavarde', 'kazkas'];

if (!empty($_POST)) {
    $form_values = sanitize_form_input_values($form);
    $success = validate_form($form, $form_values);
    if (!$success) {
        var_dump('Nenormalus');
    } else {
        var_dump('Gal ir normalus');
    }
    var_dump($success);
} 

  

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form from array</title>
</head>
<style>
    .error {
        color: red;    
    }
</style>
<body>
    <?php include '../core/templates/form.tpl.php'; ?>
    <!-- <form method="POST">
        <input name="vardas" type="text">
        <input name="pavarde" type="text">
        <input name="kazkas" type="text">
        <button>Submit</button>
    </form> -->
    <!-- <p> -->
        <?php /* print $form_values['name'] ?? 'Neivesta';*/ ?>
    <!-- </p> -->
    <!-- <p> -->
        <?php /*print $form_values['age'] ?? 'Neivesta'; */ ?> 
    <!-- </p>   -->
</body>

</html>