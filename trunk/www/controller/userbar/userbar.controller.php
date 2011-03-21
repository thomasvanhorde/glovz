<?php
	/**
	 *	Contr�leur de la barre utilisateur
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
		 		- R�cup�ration de la bonne instance de Smarty
		 		- D�claration du dossier contenant les vues de ce contr�leur
		 		- R�cup�ration des classes MongoDB n�cessaires
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
		 *	R�cup�ration et envoi des donn�es de l'utilisateur � la vue
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