<?php
namespace Facebook;

return array(
    'service_manager' => array(
        'factories' => array(
            'Facebook\Factory\Facebook' => 'Facebook\Factory\Facebook'
        ),
        'aliases' => array(
            'facebook' => 'Facebook\Factory\Facebook'
        )
    )
);
