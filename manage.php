<?php
require('../../config.php');
require_once($CFG->libdir . '/adminlib.php');

require_login();

// Validação de página admin
admin_externalpage_setup('local_fiesc_manage');

global $DB, $OUTPUT, $PAGE;

$PAGE->set_title('Feedbacks FIESC');
$PAGE->set_heading('Feedbacks FIESC');

echo $OUTPUT->header();

echo html_writer::tag('h2', 'Avaliações dos Usuários');

$feedbacks = $DB->get_records('local_fiesc_feedback', null, 'timecreated DESC');

if (empty($feedbacks)) {
    echo html_writer::tag('p', 'Nenhum feedback registrado.');
} else {
    $table = new html_table();
    $table->head = ['Usuário', 'Nota', 'Comentário', 'Página', 'Data'];

    foreach ($feedbacks as $f) {
        $user = $DB->get_record('user', ['id' => $f->userid], 'id, firstname, lastname');

        $table->data[] = [
            fullname($user),
            $f->rating,
            format_text($f->comment, FORMAT_HTML),
            html_writer::link($f->pageurl, 'Ver página'),
            userdate($f->timecreated)
        ];
    }

    echo html_writer::table($table);
}

echo $OUTPUT->footer();
