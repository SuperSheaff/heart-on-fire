<?php

$compNames = heartonfire_get_the_global_components('testimonials');

$fields = array(
    'component_testimonials' => array(
        'key' => 'component_testimonials',
        'name' => 'testimonials',
        'label' => 'Testimonials',
        'display' => 'block',
        'sub_fields' => array(
            array(
                'key' => 'component_testimonials_tab_general',
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
                'key' => 'component_testimonials_enable',
                'label' => 'Enable',
                'name' => 'testimonials_enable',
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
                'key' => 'component_testimonials_global_component',
                'label' => 'Global Component',
                'name' => 'testimonials_global_component',
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
                'key' => 'component_testimonials_id',
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
                'key' => 'component_testimonials_class',
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
                'key' => 'component_testimonials_tab_settings',
                'label' => 'Settings',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'component_testimonials_global_component',
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
                'key' => 'component_testimonials_tagline',
                'label' => 'Tagline',
                'name' => 'tagline',
                'type' => 'text',
                'instructions' => '',
                'required' => 1,
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
                'maxlength' => 60,
            ),
            array(
                'key' => 'component_testimonials_repeater',
                'label' => 'Testimonials Repeater',
                'name' => 'testimonials_repeater',
                'type' => 'repeater',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'sub_fields' => array(
                    array(
                        'key' => 'component_testimonial_big_text',
                        'label' => 'Testimonial Big Text',
                        'name' => 'big_text',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 1,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '100',
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
                        'key' => 'component_testimonial_small_text',
                        'label' => 'Testimonial Small Text',
                        'name' => 'small_text',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 1,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '100',
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
                        'key' => 'component_testimonial_name',
                        'label' => 'Testimonial Name',
                        'name' => 'name',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 1,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '100',
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
                        'key' => 'component_testimonial_company',
                        'label' => 'Testimonial Company',
                        'name' => 'company',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 1,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '100',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                ),
                'min' => 0,
                'layout' => 'block',
                'button_label' => 'Add Testimonial',
                'collapsed' => ''
            ),
        ),
        'min' => '',
        'max' => '',
    )
);
