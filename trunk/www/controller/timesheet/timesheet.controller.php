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
            $_userClass,
            $_timesheet;

    public function __construct() {
        $this->_view = Base::Load(CLASS_COMPONENT)->_view;
        $this->_userClass = Base::Load(CLASS_USER);
        $this->_timesheet = Base::Load(CLASS_TIMESHEET);
    }

    public function defaut() {
        $this->_view->addBlock('content', 'default.tpl');
        $this->_view->addBlock('formNewTache', 'formNewTache.tpl');
    }

    

}

/*
  Fin du fichier : project.controller.php
  Chemin du fichier : /www/controller/timesheet/
 */

