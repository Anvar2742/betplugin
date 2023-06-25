<?php
/**
 * We do all the logic here
 * Not in blade files
 */

use App\Classes\BlockAttributesParser;

// The `$block` variable is dynamically inject here
$block_attributes = (new BlockAttributesParser())->attributes($block);

//Get all fields pertaining to this block
$fields = get_fields();

// Do necessary checks and/or sanitisation where applicable
$test_text_field = $fields['test_text_field'];
$test_repeater   = $fields['test_repeater'];

$output = [];

/*
 * Somewhat contrived example, but you get the idea...
 */
if (is_array($test_repeater)) {
    foreach ($test_repeater as $detail) {
        $output[] = [
            'phone' => $detail['phone'],
            'email' => $detail['email_address'],
        ];
    }
}

echo \Roots\view('blocks.testimonials', [
//    'block'      => $block,
    'attributes' => $block_attributes,
    'text'       => $test_text_field,
    'details'    => $output,
]);
