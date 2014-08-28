<?php
namespace Facebook;

return array(
    'service_manager' => array(
        'factories' => array(
            'Facebook\Factory\Authentication' => 'Facebook\Factory\Authentication',
            'Facebook\Factory\Authorization' => 'Facebook\Factory\Authorization'
        ),
        'aliases' => array(
            'Facebook\Authentication' => 'Facebook\Factory\Authentication',
            'Facebook\Authorization' => 'Facebook\Factory\Authorization'
        )
    )
);
