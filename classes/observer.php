<?php
namespace local_fiesc;

defined('MOODLE_INTERNAL') || die();

class observer {

    public static function feedback_submitted(\local_fiesc\event\feedback_submitted $event) {
        // Exemplo de log (conceitual)
        debugging(
            'Feedback enviado pelo usuário ID: ' . $event->userid,
            DEBUG_DEVELOPER
        );
    }
}
