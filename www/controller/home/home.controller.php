<?php

	/**
	 *	Contrôleur de la page de connexion
	 *
	 *	@author Thomas Van Horde
	 *	@version 1.1
	 */
	class home_controller {
		// Attributs de la classe
		private $_view,
				$_userClass;

		/**
		 *	Constructeur :
		 		- Récupération de la bonne instance de Smarty
		 		- Déclaration du dossier contenant les vues de ce contrôleur
		 		- Récupération des classes MongoDB nécessaires
		 *
		 *	@author Thomas Van Horde
		 *	@version 1.0
		 *	@see: CLASS_COMPONENT
		 *	@see: CLASS_USER
		 */
		public function __construct() {
			$this->_view = Base::Load(CLASS_COMPONENT)->_view;
			$this->_userClass = Base::Load(CLASS_USER);
		}

		/**
		 *	Choix de la vue à afficher selon que l'utilisateur est connecté ou pas
		 *
		 *	@author Fabien Nouaillat
		 *	@version 1.1
		 */
		public function defaut() {
			if ($this->_userClass->isConnect()) {
				header('location: dashboard/');
			}
			else {
				$this->_view->addBlock('content','connect.tpl', 'controller/user/view/');
			}
		}
	}

/*
	Fin du fichier : home.controller.php
	Chemin du fichier : /www/controller/home/
*/