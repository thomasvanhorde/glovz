<?php

class report {

    private $_view,
            $_report;

    public function __construct() {
        $this->_view = Base::Load(CLASS_COMPONENT)->_view;
        $this->_report = Base::Load(CLASS_REPORT);
    }

    public function defaut() {
        return false;
    }
    
}


