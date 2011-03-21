<?php
	/**
	 *	Contrôleur de la barre utilisateur
	 *
	 *	@author Fabien Nouaillat
	 *	@version: 1.0
	 */

	class userbar_controller {
				
		// Attributs de la classe
		private $_view,
				$_userClass;
		
		/**
		 *	Constructeur :
		 		- Récupération de la bonne instance de Smarty
		 		- Déclaration du dossier contenant les vues de ce contrôleur
		 		- Récupération des classes MongoDB nécessaires
		 *
		 *	@author Fabien Nouaillat
		 *	@version: 1.0
		 *	@see: CLASS_COMPONENT
		 *	@see: CLASS_USER
		 */
		function __construct() {
			$this->_view		= Base::Load(CLASS_COMPONENT)->_view;
			$this->_userClass	= Base::Load(CLASS_USER);
		}
		
		/**
		 *	Récupération et envoi des données de l'utilisateur à la vue
		 *
		 *	@author Fabien Nouaillat
		 *	@version: 1.0
		 */
		function defaut() {
			if ($userData = $this->_userClass->isConnect()) {
				$this->_view->assign('user', $userData);
				$this->_view->assign('myURL',$_GET['url']);
				$this->_view->addBlock('userbar', 'other.tpl','view/userbar/');
			}
		}
	}

/*
	Fin du fichier : userbar.controller.php
	Chemin du fichier : /www/controller/userbar/
*/