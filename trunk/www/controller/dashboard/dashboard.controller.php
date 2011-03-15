<?php

class dashboard_controller {

    function __construct(){
        $this->_view = Base::Load(CLASS_COMPONENT)->_view;
    }

    function defaut(){
        $this->_view->addBlock('content','defaut.tpl');
    }
}