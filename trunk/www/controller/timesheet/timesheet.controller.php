<?php

/**
 * 	Controleur des feuille de temps
 *
 * 	@author Jean-Baptiste Crestot
 * 	@version: 1.0
 */
class timesheet_controller {

    // Attributs de la classe
    private $_view,
            $_userClass;

    public function __construct() {
        $this->_view = Base::Load(CLASS_COMPONENT)->_view;
        $this->_userClass = Base::Load(CLASS_USER);
    }

    public function defaut() {
        $this->_view->addBlock('content', 'default.tpl');
    }

    

}

/*
  Fin du fichier : project.controller.php
  Chemin du fichier : /www/controller/timesheet/
 */

