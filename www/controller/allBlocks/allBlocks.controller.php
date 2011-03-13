<?php

class allBlocks_controller {
    public function __construct() {
        $this->_view = Base::Load('Component')->_view;
    }

    public function defaut() {
        $this->_view->addBlock('content','content.tpl');
    }
}