<?php

class dashboard_controller {

    private $_dashboardClass;
    private $_view;
    private $_userInfo;

    function __construct(){
        $this->_view = Base::Load(CLASS_COMPONENT)->_view;
        
        $this->_dashboardClass = Base::Load(CLASS_DASHBOARD);
        $this->_jalonClass = Base::Load(CLASS_JALON);
        $this->_userClass = Base::Load(CLASS_USER);
    }

    function defaut(){
        $firstJalon = $this->_jalonClass->myFirst();
        $this->_view->assign('jalon', $firstJalon);

        $this->_view->addBlock('content','defaut.tpl');
        $this->_view->assign('info', $this->_userInfo);
    }
}
