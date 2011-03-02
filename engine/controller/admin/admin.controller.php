<?php

Class admin_controller {

    var $_contentManager;

	function admin_controller(){ 
        $this->_view = Base::Load('Component')->_view;
        $this->_contentManager = Base::Load(CLASS_CONTENT_MANAGER);
        $this->_BBD = Base::Load(CLASS_BDD)->_connexion;
        
        // Left Nav
        $this->_view->addBlock('mainNav', 'admin_mainNav.tpl', 'view/admin/');

	}
	
	function defaut(){}


    /***
     *  CONTENUS
     * */


    /***
     *  /CONTENUS
     * */




    /***
     *  STRUCTURES
     * */

    /***
     *  /STRUCTURES
     * */


}
