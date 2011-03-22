<?php

class home_controller {
    public function __construct() {
        $this->_view = Base::Load(CLASS_COMPONENT)->_view;
        $this->_userClass = Base::Load(CLASS_USER);
    }

    public function defaut() {

        if($this->_userClass->isConnect()){
            header('location: dashboard/');
        }
        else {
            $this->_view->addBlock('content','connect.tpl', 'controller/user/view/');
        }
    }
}