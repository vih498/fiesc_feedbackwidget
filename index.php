<?php
require('../../config.php');

require_login();
require_sesskey();

global $DB, $USER;

// Moodle exige isso para chamadas AJAX
define('AJAX_SCRIPT', true);

$rating  = required_param('rating', PARAM_INT);
$comment = optional_param('comment', '', PARAM_TEXT);
$pageurl = optional_param('pageurl', '', PARAM_TEXT);

$record = new stdClass();
$record->userid = $USER->id;
$record->rating = $rating;
$record->comment = $comment;
$record->pageurl = $pageurl;
$record->timecreated = time();

$DB->insert_record('local_fiesc_feedback', $record);

// Resposta JSON
echo json_encode(['status' => 'ok']);
exit;
