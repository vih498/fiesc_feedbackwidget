<?php
namespace local_fiesc\task;

defined('MOODLE_INTERNAL') || die();

class notify_feedback_closed extends \core\task\scheduled_task {

    public function get_name() {
         return get_string('pluginname', 'local_fiesc') . ': notificação de encerramento';
    }

    public function execute() {
        // Implementação futura (conceitual para a prova)
    }
}