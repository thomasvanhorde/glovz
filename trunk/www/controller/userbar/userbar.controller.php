<?php
	/**
	 *	Contrôleur de la barre utilisateur
	 *
	 *	@author Fabien Nouaillat
	 *	@version 1.0
	 */

	class userbar_controller {
				
		// Attributs de la classe
		private $_view,
				$_userClass;
		
		/**
		 *	Constructeur :
		 		- Récupération de la bonne instance de Smarty
		 		- Déclaration du dossier contenant les vues de ce contrôleur
		 		- Récupération de la classe MongoDB nécessaire
		 *
		 *	@author Fabien Nouaillat
		 *	@version 1.0
		 *	@see: CLASS_COMPONENT
		 *	@see: CLASS_USER
		 */
		function __construct() {
			$this->_view		= Base::Load(CLASS_COMPONENT)->_view;
			$this->_userClass	= Base::Load(CLASS_USER);
		}

 		/**
		 *	Affichage des informations de l'utilisateur
		 *
		 *	@author Thomas Van Horde
		 *	@version 1.0
		 */
        public function myProfil() {
            $param = array(
              'field' => array(
                  'role' => array(
                      'hidden' => true
                  ),
                  'groupe' => array(
                      'hidden' => true
                  )
              )
            );
            $this->_view->assign('formParam', $param);
            Base::Load(CLASS_USER)->editForm('formMyProfil', $_SESSION['user']['uid'], 'user[MemberData]');
        }


		/**
		 *	Récupération et envoi des données de l'utilisateur à la vue
		 *
		 *	@author Fabien Nouaillat
		 *	@version: 1.0
		 */
		function defaut() {
			if ($userData = $this->_userClass->isConnect()) {
                $this->myProfil();
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