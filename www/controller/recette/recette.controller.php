<?php

class recette_controller {

    function __construct() {
        $this->_view			= Base::Load(CLASS_COMPONENT)->_view;
    }
    function defaut(){
        $this->_view->addBlock('content','recette.tpl');
    }

}