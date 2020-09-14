<form <?php print html_attr($form['attr']); ?>>
    <!-- Generating fields -->
    <?php foreach ($form['fields'] ?? [] as $field_id => $field) : ?>
        <!-- Label -->
        <?php if (isset($field['label'])) : ?>
            <label>
                <span><?php print $field['label']; ?></span>
            <?php endif; ?>
            <!-- Select field -->
            <?php if ($field['type'] === 'select') : ?>
                <select <?php print select_attr($field_id, $field); ?>>
                    <?php foreach ($field['options'] ?? [] as $option_id => $option_title) : ?>
                        <option <?php print option_attr($option_id, $field); ?>>
                            <?php print $option_title; ?>
                        </option>
                    <?php endforeach; ?>
                </select>

            <?php else : ?>
                <!-- Input field -->
                <input <?php print input_attr($field_id, $field); ?> />

            <?php endif; ?>

            <!-- Error text -->
            <?php if (isset($field['error'])) : ?>
                <span class="error"><?php print $field['error']; ?></span>

            <?php endif; ?>


            <?php if (isset($field['label'])) : ?>
            </label>
        <?php endif; ?>
    <?php endforeach; ?>

    <!-- Error text for passwords -->
    <?php if (isset($form['error'])) : ?>
        <span class="error"><?php print $form['error']; ?></span>
    <?php endif; ?>

    <!-- Generating buttons -->
    <?php foreach ($form['buttons'] ?? [] as $button_id => $button) : ?>
        <button <?php print button_attr($button_id, $button); ?>>
            <?php print $button['title']; ?>
        </button>
    <?php endforeach; ?>
</form>