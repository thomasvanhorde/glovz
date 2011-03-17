<?php

class dashboard_controller {

    private $_dashboardClass;
    private $_view;
    private $_userInfo;
    private $_jalon;

    function __construct(){
        $this->_view = Base::Load(CLASS_COMPONENT)->_view;
        $this->_dashboardClass = Base::Load(CLASS_DASHBOARD);
        
        
        $this->_userClass = Base::Load(CLASS_USER);
        if ($this->_userClass->isConnect()) {
            $this->_userInfo = $this->_userClass->isConnect();
        }
        
        $this->_jalon = Base::Load(CLASS_JALON);
        $lastJalon = $this->_jalon->last();
        $this->_view->assign('jalonDate', $lastJalon->date);
        $this->_view->assign('jalonDesc', $lastJalon->description);
        $this->_view->assign('jalonProjetNom', $lastJalon->projet);
    }

    function defaut(){
        $this->_view->addBlock('content','defaut.tpl');
        $this->_view->assign('info', $this->_userInfo);
    }
}


//        
//        echo '<pre>';
//        print_r($this->_jalon->last());
//        exit;