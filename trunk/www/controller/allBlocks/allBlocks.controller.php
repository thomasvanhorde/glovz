<?php

class allBlocks_controller {
    public function __construct() {
        $this->_view = Base::Load(CLASS_COMPONENT)->_view;
    }

    public function defaut() {
        $this->_view->addBlock('content','content.tpl');
    }
}