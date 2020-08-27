<!-- <form <?php /*print html_attr($form['attr']);*/ ?>>

</form> -->


<form <?php print html_attr($form['attr']); ?>>
     <!-- Generating fields -->
    <?php foreach ($form['fields'] ?? [] as $field_id => $field): ?>
    <input <?php print input_attr($field_id, $field); ?> />
    <?php endforeach; ?>

    <?php /*foreach ($form['buttons'] ?? [] as $button_id => $button) : */?>
</form>