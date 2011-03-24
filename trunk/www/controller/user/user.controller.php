<?php

	/**
	 *	Contrôleur des projets
	 *
	 *	@author Thomas Van Horde
	 *	@version 1.0
	 */
	class user_controller {

		// Attributs
		private $_view,
				$_userClass;

		/**
		 *	Constructeur :
		 		- Récupération de la bonne instance de Smarty
		 		- Déclaration du dossier contenant les vues de ce contrôleur
		 		- Récupération de la classe MongoDB nécessaire
		 *
		 *	@author Thomas Van Horde
		 *	@version 1.0
		 *	@see: CLASS_COMPONENT
		 *	@see: CLASS_USER
		 */
		public function  __construct() {
			$this->_view = Base::Load(CLASS_COMPONENT)->_view;
			$this->_userClass = Base::Load(CLASS_USER);
		}

		/**
		 *	Envoi des données concernant les membres à la vue
		 *
		 *	@author Thomas Van Horde
		 *	@version 1.0
		 */
		public function members() {
			$allUser = $this->_userClass->getAll();
			$this->_userClass->addForm('formNewMember', 'MemberData');
			$this->_view->assign('members', $allUser);
			$this->_view->addBlock('content','members.tpl');
		}

		/**
		 *	Modification d'un membre
		 *
		 *	@author Thomas Van Horde
		 *	@version 1.0
		 */
		public function edit() {
			$this->_userClass->editForm('content', $_GET['param'][0], 'MemberData');
		}

		/**
		 *	Suppresion d'un membre
		 *
		 *	@author Thomas Van Horde
		 *	@version 1.0
		 */
		public function delete() {
			if($this->_userClass->remove($_GET['param'][0]))
				header('location: '.$_SERVER['REDIRECT_URL'].'../../');
		}

		/**
		 *	Ajout d'un membre
		 *
		 *	@author Thomas Van Horde
		 *	@version 1.0
		 */
		public function newMember(){
			$this->_userClass->addForm('content', 'MemberData');
		}

		/**
		 *	Déconnexion
		 *
		 *	@author Thomas Van Horde
		 *	@version 1.0
		 */
		public function disconnect() {
			if($this->_userClass->disconnect())
				header('location: '.SYS_FOLDER);
		}

		/**
		 *	Formulaire de connexion
		 *
		 *	@author Thomas Van Horde
		 *	@version 1.0
		 */
		public function POST_connect($data){
			if($this->_userClass->connect($data['user_email'], $data['user_password'])){
				header('location: '.$_SERVER['REQUEST_URI'].'../');
				}
			else {
				$this->_view->assign('erreur', true);
			}
		}

		/**
		 *	Formulaire d'ajout/de modification de membres
		 *
		 *	@author Thomas Van Horde
		 *	@version 1.0
		 */
		public function POST_MemberData($data){
			if(empty($data['id'])){ // Création
				if($this->_userClass->save($data)) {

					$contentMail = $this->_view->addBlock('content','mail_newMember.tpl');

					Base::Load(CLASS_EMAIL)->SimpleMailHTML(
						'no-reply@glovz.com',
						'GlovZ Team',
						$data['mail'],
						'register',
						$contentMail);

					header('location: '.$_SERVER['REDIRECT_URL']);
				}
			}
			else {// Mise à jour
				if($this->_userClass->update($data, $data['id']))
					header('location: '.$_SERVER['REDIRECT_URL']);
			}
			exit();
		}

		/**
		 *	Besoin de se connecter
		 *
		 *	@author Thomas Van Horde
		 *	@version 1.0
		 */
		public function needConnect(){
			if($this->_userClass->isConnect())
				return true;
			else
			//    $this->notAllow('you should login');
			  header('location: '.BASE_URL);
		}

		/**
		 *	Besoin d'un accès DT
		 *
		 *	@author Thomas Van Horde
		 *	@version 1.0
		 */
		public function needDT(){
			if($this->needConnect()){
				if(!$this->_userClass->isDT())
					$this->notAllow('Vous avez besoin d\'être Directeur Technique');
			}
		}

		/**
		 *	Besoin d'un accès CP
		 *
		 *	@author Thomas Van Horde
		 *	@version 1.0
		 */
		public function needCP(){
			if($this->needConnect()){
				if(!$this->_userClass->isCP())
					$this->notAllow('Vous avez besoin d\'être Chef de Projet');
			}
		}

		/**
		 *	Accès non autorisé
		 *
		 *	@author Thomas Van Horde
		 *	@version 1.0
		 */
		private function notAllow($message){
			$this->_view->assign('erreur', $message);
			Base::Load(CLASS_VUE)->addBlock('content','notAllow.tpl', 'controller/user/view/');
		}

		/**
		 *	Accès aux informations personnelles
		 *
		 *	@author Thomas Van Horde
		 *	@version 1.0
		 */
		public function myProfil() {
			if($this->_userClass->isConnect()) {

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
				$this->_userClass->editForm('content', $_SESSION['user']['uid'], 'MemberData');
			}
		}
	}

/*
	Fin du fichier : user.controller.php
	Chemin du fichier : /www/controller/user/
*/