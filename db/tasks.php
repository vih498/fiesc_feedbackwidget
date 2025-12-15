<?php
defined('MOODLE_INTERNAL') || die();

$tasks = [
    [
        'classname' => 'local_fiesc\task\notify_feedback_closed',
        'blocking'  => 0,
        'minute'    => '0',
        'hour'      => '9',
        'day'       => '*',
        'month'     => '*',
        'dayofweek' => '*'
    ]
];
