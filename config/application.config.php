<?php
return array(
    'modules' => array(
        'Facebook'
    ),
    'module_listener_options' => array(
        'module_paths' => array(
            './module',
            './vendor',
            './module'
        ),
        'config_glob_paths' => array(
            'config/autoload/{,*.}{global,local}.php'
        )
    )
);
