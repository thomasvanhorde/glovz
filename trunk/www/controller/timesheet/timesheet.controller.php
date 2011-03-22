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
            $_projectClass,
            $_timesheet;

    public function __construct() {
        $this->_view = Base::Load(CLASS_COMPONENT)->_view;
        $this->_userClass = Base::Load(CLASS_USER);
        $this->_projectClass = Base::Load(CLASS_PROJECT);
        $this->_timesheet = Base::Load('Timesheet');
    }

    public function defaut() {
        $allProjects = $this->_projectClass->getAll();
        $this->_view->assign('projects', $allProjects);
        $this->_view->addBlock('content','defaut.tpl');

        $this->_view->addBlock('formNewTache', 'formNewTache.tpl');
        $this->_view->addBlock('content', 'default.tpl');
    }

    

}

/*
  Fin du fichier : timesheet.controller.php
  Chemin du fichier : /www/controller/timesheet/
 */

