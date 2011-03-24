<?php
	
	/**
	 *	Contrôleur des clients
	 *
	 *	@author Fabien Nouaillat
	 *	@version 1.0
	 */
	class client_controller {
		
		// Attributs de la classe
		private $_view,
				$_clientClass;
		
		/**
		 *	Constructeur :
		 		- Récupération de la bonne instance de Smarty
		 		- Déclaration du dossier contenant les vues de ce contrôleur
		 		- Récupération de la classe MongoDB nécessaire
		 *
		 *	@author Fabien Nouaillat
		 *	@version 1.0
		 *	@see: CLASS_COMPONENT
		 *	@see: CLASS_CLIENT
		 */
	    public function __construct() {
	        $this->_view = Base::Load(CLASS_COMPONENT)->_view;
	        $this->_clientClass = Base::Load(CLASS_CLIENT);
	    }
		
		/**
		 *	Envoi des données à la vue
		 *
		 *	@author Fabien Nouaillat
		 *	@version 1.0
		 */
	    public function defaut() {
	    	$allClients = $this->_clientClass->getAll();
	    	$this->_view->assign('clients', $allClients);
	    	$this->_view->addBlock('content','defaut.tpl');
	    }
	    
	    /**
		 *	Création d'un nouveau client
		 *
		 *	@author Fabien Nouaillat
		 *	@version 1.0
		 */
		public function createClient() {
			$this->_clientClass->addForm('content', 'ClientData');
		}
		
		/**
		 *	Modification d'un client
		 *
		 *	@author Fabien Nouaillat
		 *	@version 1.0
		 */
		public function editClient() {
			$this->_clientClass->editForm('content', $_GET['param'][0], 'ClientData');
		}
		
		/**
		 *	Suppression d'un client
		 *
		 *	@author Fabien Nouaillat
		 *	@version 1.0
		 */
		public function deleteClient() {
			$this->_clientClass->remove($_GET['param'][0]);
			header('location: '.$_SERVER['REDIRECT_URL'].'../../');
		}
		
		/**
		 *	Enregistrement d'un client
		 *
		 *	@author Fabien Nouaillat
		 *	@version 1.0
		 */
		public function POST_ClientData($data) {
			if (empty($data['id'])) { // Création
				$this->_clientClass->save($data);
				header('location: '.$_SERVER['REDIRECT_URL'].'../');
			}
			else { // Édition
				if ($this->_clientClass->update($data, $data['id']))
				header('location: '.Base::getUrl(3));
			}
			exit();
		}
	}

/*
	Fin du fichier : client.controller.php
	Chemin du fichier : /www/controller/client/
*/