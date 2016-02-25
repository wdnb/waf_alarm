<?php

class Services_LoadFile {

    private $a_config;
    private $s_auditlog;

    public function __construct() {

        $a_config = spyc_load_file(CONFIGS_PATH."/waf_alarm.yaml");
        $this->a_config = $a_config;

    }

    public function _initModsecAudit($s_file) {

        $s_file = trim($s_file);
        $s_auditlog = file_get_contents($s_file);
        $this->s_auditlog = $s_auditlog;
    }

    public function getConfig() {
        return $this->a_config;
    }

    public function getAuditLog() {
        return $this->s_auditlog;
    }
}
