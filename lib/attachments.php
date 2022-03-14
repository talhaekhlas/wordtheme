<?php

define('ATTACHMENTS_SETTINGS_SCREEN', false); // disable the Settings screen
add_filter('attachments_default_instance', '__return_false'); // disable the default instance

function my_attachments($attachments)
{
    $fields = array(
        array('name' => 'title',
        'type' => 'text',
        'label' => __('Title', 'ekhlas')
        )
        
    );

    $args = array(
        'label' => 'Featured Slider',
        'post_type' => array('post'),
        'filetype' => array('image'),
        'note' => 'Add Slider Image',
        'button_text' => __('Attach File', 'ekhlas'),
        'fields' => $fields

    );

    $attachments->register('slider', $args);
}

add_action('attachments_register', 'my_attachments');


function my_attachments_testimonial($attachments)
{
    $fields = array(
        array('name' => 'name',
        'type' => 'text',
        'label' => __('Name', 'ekhlas')
        ),
        array('name' => 'position',
        'type' => 'text',
        'label' => __('Position', 'ekhlas')
        ),
        array('name' => 'company',
        'type' => 'text',
        'label' => __('Company', 'ekhlas')
        ),
        array('name' => 'description',
        'type' => 'textarea',
        'label' => __('Description', 'ekhlas')
        ),
        
    );

    $args = array(
        'label' => 'Featured Slider',
        'post_type' => array('page'),
        'filetype' => array('image'),
        'note' => 'Add Slider Image',
        'button_text' => __('Attach File', 'ekhlas'),
        'fields' => $fields

    );

    $attachments->register('testimonial', $args);
}

add_action('attachments_register', 'my_attachments_testimonial');
