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
        $this->_userData = $this->_userClass->isConnect();
    }

    function defaut(){
        $firstJalon = $this->_jalonClass->myFirst();
        $this->_view->assign('jalon', $firstJalon);

        $myProject = $this->_userClass->getProject($this->_userData['uid']);
        $this->_view->assign('projects', $myProject);

        $this->_view->addBlock('content','defaut.tpl');
        $this->_view->assign('info', $this->_userInfo);
    }
}
