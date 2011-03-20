<?php

class dashboard_controller {

    private $_dashboardClass;
    private $_view;
    private $_userInfo;

    function __construct(){
        $this->_view = Base::Load(CLASS_COMPONENT)->_view;
        
        $this->_dashboardClass = Base::Load(CLASS_DASHBOARD);
        $this->_jalonClass = Base::Load(CLASS_JALON);
        $this->_tacheClass = Base::Load(CLASS_TACHE);
        $this->_userClass = Base::Load(CLASS_USER);
        $this->_userData = $this->_userClass->isConnect();
    }

    function defaut(){
        $firstJalon = $this->_jalonClass->myFirst();
        $this->_view->assign('jalon', $firstJalon);

        $myProject = $this->_userClass->getProject($this->_userData['uid']);
        $this->_view->assign('projects', $myProject);

        $myLastTache = $this->_tacheClass->myLast(2);
        $this->_view->assign('lastTask', $myLastTache);
        //  echo '<pre>';print_r($myLastTache); exit();
        
        $this->_view->addBlock('content','defaut.tpl');
        $this->_view->assign('info', $this->_userInfo);
    }
}
