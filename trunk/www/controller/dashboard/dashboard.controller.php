<?php

	/**
	 *	Contrôleur du tableau de bord
	 *
	 *	@author Jean-Baptiste
	 *	@version: 1.0
	 */
	class dashboard_controller {

		// Attributs de la classe
		private $_dashboardClass,
				$_view,
				$_userInfo;

		/**
		 *	Constructeur :
		 		- Récupération de la bonne instance de Smarty
		 		- Déclaration du dossier contenant les vues de ce contrôleur
		 		- Récupération des classes MongoDB nécessaires
		 *
		 *	@author Jean-Baptiste
		 *	@version 1.0
		 *	@see: CLASS_COMPONENT
		 *	@see: CLASS_DASHBOARD
		 *	@see: CLASS_JALON
		 *	@see: CLASS_TACHE
		 *	@see: CLASS_USER
		 */
		public function __construct() {
			$this->_view = Base::Load(CLASS_COMPONENT)->_view;
			$this->_dashboardClass = Base::Load(CLASS_DASHBOARD);
			$this->_jalonClass = Base::Load(CLASS_JALON);
			$this->_tacheClass = Base::Load(CLASS_TACHE);
			$this->_userClass = Base::Load(CLASS_USER);
			$this->_userData = $this->_userClass->isConnect();
		}

		/**
		 *	Envoi des données à afficher dans la vue
		 *
		 *	@author Jean-Baptiste
		 *	@version 1.0
		 */
		public function defaut(){
			$firstJalon = $this->_jalonClass->myFirst();
			$this->_view->assign('jalon', $firstJalon);
			$this->_view->assign('info', $this->_userInfo);

			$myProject = $this->_userClass->getProject($this->_userData['uid']);
			$this->_view->assign('projects', $myProject);

			$myLastTache = $this->_tacheClass->myLast(2);
			$this->_view->assign('lastTask', $myLastTache);
			$this->_view->addBlock('content','defaut.tpl');
		}
	}

/*
	Fin du fichier : dashboard.controller.php
	Chemin du fichier : /www/controller/dashboard/
*/