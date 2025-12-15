<?php
defined('MOODLE_INTERNAL') || die();

if ($hassiteconfig) {
    $ADMIN->add(
        'localplugins',
        new admin_externalpage(
            'local_fiesc_manage',
            'Feedbacks FIESC',
            new moodle_url('/local/fiesc/manage.php')
        )
    );
}
