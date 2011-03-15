<?php

class project_controller {

    public  function __construct() {
        $this->_view = Base::Load(CLASS_COMPONENT)->_view;
        $this->_projectClass = Base::Load(CLASS_PROJECT);
    }
	
    public function defaut() {
        /*
        	echo '<pre>';
        	print_r($allProjects);
       		echo '</pre>';
        	exit();
        */
        
        # Si l'url contient un paramètre (l'id du projet choisi) on redirige vers le détail de ce projet
        if (isset($_GET['param'][0])) {
        	$current_project = $this->_projectClass->get($_GET['param'][0], true);
        	
        	$this->_view->assign('project', $current_project);
        	$this->_view->addBlock('content','detailled_project.tpl');
        }
        else {
        	$allProjects = $this->_projectClass->getAll();
        	$this->_view->assign('projects', $allProjects);
        	$this->_view->addBlock('content','defaut.tpl');
        }
    }

    public function create() {
        ;
    }

    public function old() {
        ;
    }
	
    public function member() {
        ;
    }
}