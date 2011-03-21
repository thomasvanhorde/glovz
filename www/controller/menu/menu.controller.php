<?php

	class menu_controller {
        function __construct(){
            $this->_view			= Base::Load(CLASS_COMPONENT)->_view;
            $this->_userClass			= Base::Load(CLASS_USER);
        }

        function defaut(){
            $this->_view->assign('isDT',$this->_userClass->isDT());
            $this->_view->assign('myURL',$_GET['url']);
            $this->_view->addBlock('menu', 'other.tpl','view/menu/');
        }

    }

?>