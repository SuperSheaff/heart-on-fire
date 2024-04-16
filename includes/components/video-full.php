<?php

$compNames = heartonfire_get_the_global_components('video_full');

$fields = array(
    'component_video_full' => array(
        'key' => 'component_video_full',
        'name' => 'video_full',
        'label' => 'Video Full',
        'display' => 'block',
        'sub_fields' => array(
            array(
                'key' => 'component_video_full_tab_general',
                'label' => 'General',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'top',
                'endpoint' => 0,
            ),
            array(
                'key' => 'component_video_full_enable',
                'label' => 'Enable',
                'name' => 'video_full_enable',
                'type' => 'true_false',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
                'message' => '',
                'default_value' => 1,
                'ui' => 1,
                'ui_on_text' => '',
                'ui_off_text' => '',
            ),
            array(
                'key' => 'component_video_full_global_component',
                'label' => 'Global Component',
                'name' => 'video_full_global_component',
                'type' => 'select',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
                'choices' => $compNames,
                'default_value' => false,
                'allow_null' => 0,
                'multiple' => 0,
                'ui' => 0,
                'return_format' => 'value',
                'ajax' => 0,
                'placeholder' => '',
            ),
            array(
                'key' => 'component_video_full_id',
                'label' => 'ID',
                'name' => 'id',
                'type' => 'text',
                'instructions' => 'Identifier',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'component_video_full_class',
                'label' => 'Classes',
                'name' => 'class',
                'type' => 'text',
                'instructions' => 'Additional classes',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'component_video_full_tab_settings',
                'label' => 'Settings',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'component_video_full_global_component',
                            'operator' => '==',
                            'value' => '',
                        ),
                    ),
                ),
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'top',
                'endpoint' => 0,
            ),
            array(
                'key' => 'component_video_full_responsive_choice',
                'label' => 'Responsive Choice',
                'name' => 'choice',
                'type' => 'select',
                'instructions' => 'This setting allows you to customize what device sizes can view this media.',
                'required' => 1,
                'conditional_logic' => 0,
                'multiple'      => 0,
                'allow_null'    => 0,
                'wrapper' => array(
                    'width' => '100',
                    'class' => '',
                    'id' => '',
                ),
                'choices'       => array(
                    'both' => 'Show on Both',
                    'desktop' => 'Show on Desktop Only',
                    'mobile' => 'Show on Mobile Only',
                ),
                'default_value' => 'both',
                'ui'            => 0,
                'ajax'          => 0,
                'placeholder'   => '',
                'return_format' => 'value'
            ),
            array(
                'key' => 'component_video_full_video',
                'label' => 'Video',
                'name' => 'video',
                'type' => 'file',
                'instructions' => 'Make sure to just add an mp4 file, it should just loop and is automatically muted.',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '100',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'url',
                'preview_size' => 'medium',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
            ),
        ),
        'min' => '',
        'max' => '',
    )
);
