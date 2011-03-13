<?php

class project_controller {

    public  function __construct() {
        $this->_view = Base::Load('Component')->_view;
    }

    public function defaut() {
        $this->_view->addBlock('content','defaut.tpl');
    }

    public function create() {
        ;
    }

    public function old() {
        ;
    }

    public function task() {
        ;
    }

    public function milestone() {
        ;
    }

    public function member() {
        ;
    }
}