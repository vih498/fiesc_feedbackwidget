<?php
defined('MOODLE_INTERNAL') || die();

function local_fiesc_before_footer() {
    global $PAGE, $USER;

    if (!isloggedin() || isguestuser()) {
        return;
    }

    // Admin sempre vê
    if (is_siteadmin()) {
        $PAGE->requires->js(new moodle_url('/local/fiesc/widget.js'));
    }
}
