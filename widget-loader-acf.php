<?php

$widget_config = array(
    'key' => 'widget_code',
    'name' => 'code',
    'label' => 'Code',
    'display' => 'block',
    'sub_fields' => array(
        array(
            'key' => 'code_basic_details_tab',
            'label' => 'Basic Details',
            'type' => 'tab',
            'placement' => 'left',
        ),
        array(
            'key' => 'widget_code_code',
            'label' => 'Code',
            'name' => 'code',
            'type' => 'acf_code_editor'
        ),
        array(
            'key' => 'widget_code_language',
            'label' => 'Language',
            'name' => 'language',
            'type' => 'select',
            'choices' => array(
                'mixed' => 'Mixed HTML/CSS/JS',
                'twig' => 'Twig',
                'php' => 'PHP',
                'javascript' => 'JavaScript',
                'jsx' => 'JSX',
                'css' => 'CSS',
            ),
            'default_value' => array(
                0 => 'mixed',
            ),
        ),
        array(
            'key' => 'code_advanced_details_tab',
            'label' => 'Advanced Details',
            'name'=> 'advanced_details',
            'type' => 'tab',
            'placement' => 'left',
        ),
    )
);

$widget_config['content-types'] = array('post', 'category', 'page'); // section, article
$widget_config['content-sizes'] = array('main');
