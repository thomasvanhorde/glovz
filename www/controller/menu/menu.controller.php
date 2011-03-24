<?php
	/**
	 *	Contrôleur du menu
	 *
	 *	@author Thomas Van Horde
	 *	@version 1.0
	 */
	class menu_controller {

		// Attributs de la classe
		private $_view,
				$_userClass;

		/**
		 *	Constructeur :
		 		- Récupération de la bonne instance de Smarty
		 		- Déclaration du dossier contenant les vues de ce contrôleur
		 		- Récupération de la classe MongoDB nécessaire
		 *
		 *	@author Thomas Van Horde
		 *	@version 1.1
		 *	@see: CLASS_COMPONENT
		 *	@see: CLASS_USER
		 */
        function __construct() {
            $this->_view = Base::Load(CLASS_COMPONENT)->_view;
            $this->_userClass = Base::Load(CLASS_USER);
        }

		/**
		 *	Envoi des données au gabarit
		 *
		 *	@author Thomas Van Horde
		 *	@version 1.0
		 */
        function defaut(){
            $this->_view->assign('isDT', $this->_userClass->isDT());
            $this->_view->assign('myURL', $_GET['url']);
            $this->_view->addBlock('menu', 'other.tpl', 'view/menu/');
        }
    }

/*
	Fin du fichier : menu.controller.php
	Chemin du fichier : /www/controller/menu/
*/