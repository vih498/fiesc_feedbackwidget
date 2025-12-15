<?php
defined('MOODLE_INTERNAL') || die();

$capabilities = [

    'local/fiesc:submit' => [
        'captype' => 'write',
        'contextlevel' => CONTEXT_SYSTEM,
        'archetypes' => [
            'user' => CAP_ALLOW
        ]
    ],

    'local/fiesc:manage' => [
        'captype' => 'read',
        'contextlevel' => CONTEXT_SYSTEM,
        'archetypes' => [
            'manager' => CAP_ALLOW
        ]
    ]
];