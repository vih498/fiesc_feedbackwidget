<?php
defined('MOODLE_INTERNAL') || die();

$observers = [
    [
        'eventname'   => '\local_fiesc\event\feedback_submitted',
        'callback'    => '\local_fiesc\observer::feedback_submitted',
    ]
];
