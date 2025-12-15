<?php
namespace local_fiesc\event;

defined('MOODLE_INTERNAL') || die();

class feedback_submitted extends \core\event\base {

    protected function init() {
        $this->data['crud'] = 'c';
        $this->data['edulevel'] = self::LEVEL_PARTICIPATING;
    }

    public static function get_name() {
        return get_string('eventfeedbacksubmitted', 'local_fiesc');
    }

    public function get_description() {
        return "O usuário com ID {$this->userid} enviou um feedback no plugin FIESC.";
    }
}
